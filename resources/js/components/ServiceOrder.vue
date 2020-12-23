<template>
    <div class="row justify-content-center">
    <!-- order list area start -->
        <div class=" col-lg-11 card mt-5">
            <div class="card-body">
                <h4 class="header-title">Services Orders</h4>
                <div class="container row justify-content-between">
                    <!-- <select name="" id="" class="form-control"> -->
                        <nav aria-label="page navigation example">
                            <ul class="pagination">
                                <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                                    <a href="#" class="page-link" @click="getOrders(pagination.prev_page_url)">Previous</a>
                                </li>

                                <li class="page-item disabled">
                                    <a href="#" class="page-link text-dark">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}
                                    </a>
                                </li>

                                <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                    <a href="#" class="page-link" @click="getOrders(pagination.next_page_url)">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <div>
                            <!-- <input type="checkbox" @click="changeStatus()" :checked="open"> -->
                            <div class="custom-control custom-checkbox mr-sm-2 text-right">
                                <input type="checkbox" class="custom-control-input o-icon" @click="changeStatus()" :checked="!open" id="status">
                                <label class="custom-control-label" for="status">{{ open ? "Open" : "Closed "}} Orders</label>
                            </div>
                        </div>
                    <!-- </select> -->
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-uppercase bg-light">
                            <tr>
                                <!-- <th scope="col">Service</th> -->
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
                                <td>
                                    <div v-for="tag in order.order_tags" :key="tag.id">
                                        <span class="badge badge-pill badge-info p-1 my-1" > {{tag.tag.name_en}}</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-center align-items-center">
                                        <li class="mr-3">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input o-icon" @change="updateOrder(order.id)" :id="'customcheck'+ order.id" v-bind:checked="(order.status > 0)">
                                                <label class="custom-control-label" :for="'customcheck'+ order.id"></label>
                                            </div>
                                        </li>
                                        <li><a href="#" @click="deleteOrder(order.id)" class="text-danger"><i class="ti-trash o-icon"></i></a></li>
                                    </ul>
                                </td>
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
                    status: 0,
                    order_tags: [{
                        tag: []
                    }]
                },
                // order_tag: {
                    tag: {
                        id: '',
                        name_en: '',
                    },

                // },
                order_id: '',
                pagination: {},
                open: true,
            }
        },

        created() {
            this.getOrders()
        },

        methods: {
            getOrders(page_url) {
                let vm = this;
                // console.log(this.open ? 'api/order' : 'api/order-reverse')
                page_url = page_url || this.open ? 'api/order' : 'api/order-reverse';
                // console.log(this.open);
                const config = {
                    headers: { 
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                axios.get(page_url, config)
                // .then(res => res.json())
                .then(res => {
                    this.orders = res.data.data;
                    vm.makePagination(res.data.current_page, res.data.last_page, res.data.next_page_url, res.data.prev_page_url)
                    // console.log(this.orders.order_tags);

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

            },
            // Delete Order
            deleteOrder(id){
                const config = {
                    headers: { 
                        'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                if(confirm('Are You Sure ?')){
                    axios.delete(`api/order/${id}`, config)
                    // .then(res => res.json())
                    .then(res => {
                        // alert('Order Deleted !');
                        this.getOrders();
                        // console.log(res);

                    });
                }
            },
            // Update Order
            updateOrder(id){
                const config = {
                    headers: { 
                        'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                axios.put(`api/order/${id}`, config)
                // .then(res => res.json())
                .then(res => {
                    // alert('Order Deleted !');
                    this.getOrders();
                    // console.log(res);

                });
            },
            // Change the Orders View
            changeStatus(){
                this.open = !this.open;
                this.getOrders();
                // console.log(this.open);
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>