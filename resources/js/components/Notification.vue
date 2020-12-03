<template>
    <div class="col-md-6 col-sm-4 clearfix">
        <ul class="notification-area pull-right">
            <!-- <li id="full-view"><i class="ti-fullscreen"></i></li>
            <li id="full-view-exit"><i class="ti-zoom-out"></i></li> -->
            <li class="dropdown">
                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                    <span>2</span>
                </i>
                <div class="dropdown-menu bell-notify-box notify-box">
                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                    <div class="nofity-list">
                        <a href="#" class="notify-item">
                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                            <div class="notify-text">
                                <p>You have Changed Your Password</p>
                                <span>Just Now</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                            <div class="notify-text">
                                <p>New Commetns On Post</p>
                                <span>30 Seconds ago</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                            <div class="notify-text">
                                <p>Some special like you</p>
                                <span>Just Now</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                            <div class="notify-text">
                                <p>New Commetns On Post</p>
                                <span>30 Seconds ago</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                            <div class="notify-text">
                                <p>Some special like you</p>
                                <span>Just Now</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                            <div class="notify-text">
                                <p>You have Changed Your Password</p>
                                <span>Just Now</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                            <div class="notify-text">
                                <p>You have Changed Your Password</p>
                                <span>Just Now</span>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                <div class="dropdown-menu notify-box nt-enveloper-box">
                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                    <div class="nofity-list">
                        <a href="#" class="notify-item">
                            <div class="notify-thumb">
                                <img src="assets/images/author/author-img1.jpg" alt="image">
                            </div>
                            <div class="notify-text">
                                <p>Aglae Mayer</p>
                                <span class="msg">Hey I am waiting for you...</span>
                                <span>3:15 PM</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb">
                                <img src="assets/images/author/author-img2.jpg" alt="image">
                            </div>
                            <div class="notify-text">
                                <p>Aglae Mayer</p>
                                <span class="msg">When you can connect with me...</span>
                                <span>3:15 PM</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb">
                                <img src="assets/images/author/author-img3.jpg" alt="image">
                            </div>
                            <div class="notify-text">
                                <p>Aglae Mayer</p>
                                <span class="msg">I missed you so much...</span>
                                <span>3:15 PM</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb">
                                <img src="assets/images/author/author-img4.jpg" alt="image">
                            </div>
                            <div class="notify-text">
                                <p>Aglae Mayer</p>
                                <span class="msg">Your product is completely Ready...</span>
                                <span>3:15 PM</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb">
                                <img src="assets/images/author/author-img2.jpg" alt="image">
                            </div>
                            <div class="notify-text">
                                <p>Aglae Mayer</p>
                                <span class="msg">Hey I am waiting for you...</span>
                                <span>3:15 PM</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb">
                                <img src="assets/images/author/author-img1.jpg" alt="image">
                            </div>
                            <div class="notify-text">
                                <p>Aglae Mayer</p>
                                <span class="msg">Hey I am waiting for you...</span>
                                <span>3:15 PM</span>
                            </div>
                        </a>
                        <a href="#" class="notify-item">
                            <div class="notify-thumb">
                                <img src="assets/images/author/author-img3.jpg" alt="image">
                            </div>
                            <div class="notify-text">
                                <p>Aglae Mayer</p>
                                <span class="msg">Hey I am waiting for you...</span>
                                <span>3:15 PM</span>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                clients: [],
                client: {
                    name: '',
                    logo: null,
                },
                client_id: '',
                pagination: {},
                edit: false,
                success: '',
            }
        },
        props: ['remember_token'],

        created() {
            // this.http.headers.common['remember_token'] = this.remember_token;
            this.getClients()
            console.log(this.remember_token)
        },

        methods: {
            getClients(page_url) {
                let vm = this;
                page_url = page_url || 'api/clint';
                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.clients = res.data;
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

            },
            // Delete Client
            deleteClient(id){
                if(confirm('Are You Sure ?')){
                    fetch(`api/clint/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(res => {
                        // alert('Client Deleted !');
                        this.getClients();
                        // console.log(res);

                    });
                }
            },
            // Add Client
            addClient(){
                if(this.edit === false){
                    // Add 
                   let vm = this;
 
                    const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            // 'remember_token' : this.remember_token
                             }
                    }
    
                    let formData = new FormData();
                    formData.append('logo', this.image);
                    formData.append('name', this.client.name);
                    // console.log(this.client.logo);
                    axios.post('/api/clint', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getClients();

                        })
                        .catch(err => console.log(err));
                        
                }else {
                    // Update
                    let vm = this;
 
                    const config = {
                        headers: { 'content-type': 'multipart/form-data' }
                    }
    
                    let formData = new FormData();
                    formData.append('image', this.image);
                    formData.append('name', this.client.title_ar);
    
                    axios.put('/api/clint', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getClients();

                        })
                        .catch(err => console.log(err));
                        
                    this.edit = false;

                }
                // this.resetModal();                        

            },
            editClient(client){
                this.edit = true;
                this.client.id = client.id;
                this.client.client_id = client.id;
                this.client.name = client.name;
                this.client.logo = client.logo;

            },
            // File Handle
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.logo = e.target.result;
                };
                reader.readAsDataURL(file);
            },

            resetModal() {
                this.client.name = '';
                this.client.logo = null;
            },
            onImageChange(e){
                this.image = e.target.files[0];
                // this.client.logo = e.target.files[0];
            },
           
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
