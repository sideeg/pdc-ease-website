<template>
    <div class="row justify-content-center">
    <!-- order list area start -->
        <div class=" col-lg-11 card mt-5">
            <div class="card-body">
                <h4 class="header-title">Services Orders</h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="text-uppercase bg-light">
                            <tr>
                                <th scope="col">Service</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer Email</th>
                                <th scope="col">Customer Phone</th>
                                <th scope="col">Service Tags</th>
                                <th scope="col">Order Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="order in orders" :key="order.id">
                                <td>{{order.name}}</td>
                                <!-- <td>Lorem, ipsum.</td> -->
                                <td>{{order.email}}</td>
                                <td>{{order.phone}}</td>
                                <td v-for="order_tag in order.order_tags" :key="order.order_tages.id">
                                    <span class="badge badge-pill badge-info p-1 my-1"> Web Development Web Development Web Development</span>
                                    <span class="badge badge-pill badge-info p-1 my-1"> Web Development</span>
                                    <span class="badge badge-pill badge-info p-1 my-1"> Web Development</span>
                                    <span class="badge badge-pill badge-info p-1 my-1"> Web Development</span>
                                    <span class="badge badge-pill badge-info p-1 my-1"> Web Development Web Development Web Development</span>
                                    <span class="badge badge-pill badge-info p-1 my-1"> Web Development</span>
                                    <span class="badge badge-pill badge-info p-1 my-1"> Web Development</span>
                                    
                                </td>
                                <td>Order Status</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <!-- <div class="pagination_area pull-right mt-5">
                    <ul>
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <!-- order list area end -->
    </div>
</template>


<script>
 export default {
        data() {
            return {
                orders: [],
                order: {
                    // id: '',
                    name: '',
                    email: '',
                    phone: '',
                    status: '',
                    order_tags: []
                },
                order_tags: {
                    order_id: '',
                    
                },
                order_id: '',
                pagination: {},
                edit: false,
            }
        },

        created() {
            this.getOrders()
        },

        methods: {
            getOrders(page_url) {
                let vm = this;
                page_url = page_url || 'api/order';
                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.orders = res.data;
                    vm.makePagination(res.current_page, res.last_page, res.next_page_url, res.prev_page_url)
                    // console.log(res.data);

                }
                )
                .catch(err => console.log(err));
            },
            // Pagination

            makePagination(current_page, last_page, next_page_url , prev_page_url) {

                let pagination = {
                    current_page : current_page,
                    last_page : last_page,
                    next_page_url : next_page_url,
                    prev_page_url : prev_page_url
                }

                this.pagination = pagination;

                console.log(this.pagination);


            },
            // Delete Order
            deleteOrder(id){
                if(confirm('Are You Sure ?')){
                    fetch(`api/order/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(res => {
                        alert('Order Deleted !');
                        this.getOrders();
                        // console.log(res);

                    });
                }
            },
            // Add Order
            addOrder(){
                if(this.edit === false){
                    // Add 
                    fetch('api/orderr', {
                        method: 'post',
                        body: JSON.stringify(this.order),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(res => {
                        // console.log(res);
                        
                        // this.resetModal();                        
                        // alert('Order Added !');
                        this.getOrders();
                        // console.log(res);
                    })
                    .catch(err => console.log(err));
                    
                }else {
                    // Update
                    fetch('api/order', {
                        method: 'put',
                        body: JSON.stringify(this.order),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(res => {
                        // console.log(res);

                        // this.resetModal();                        
                        // alert('Order Added !');
                        this.getOrders();
                        // console.log(res);
                    })
                    .catch(err => console.log(err));
                    this.edit = false;

                }
                this.resetModal();                        

            },
            editOrder(order){
                this.edit = true;
                this.order.id = order.id;
                this.order.order_id = order.id;
                this.order.title_en = order.title_en;
                this.order.title_ar = order.title_ar;
                this.order.desc_en = order.desc_en;
                this.order.desc_ar = order.desc_ar;
                this.order.sourse = order.sourse;


            },
            // File Handle
            selectFile(event) {
                // `files` is always an array because the file input may be in multiple mode
                this.sourse = event.target.files[0];
                // console.log(this.sourse);
            },

            resetModal() {
                this.order.title_en = '';
                this.order.title_ar = '';
                this.order.desc_en = '';
                this.order.desc_ar = '';
                this.order.sourse = null;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>