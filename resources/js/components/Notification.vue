<template>
    <div class="col-md-6 col-sm-4 clearfix">
        <ul class="notification-area pull-right">
            <!-- <li id="full-view"><i class="ti-fullscreen"></i></li>
            <li id="full-view-exit"><i class="ti-zoom-out"></i></li> -->
            <li class="dropdown">
                <i class="ti-bell dropdown-toggle" data-toggle="dropdown" @click="getOrders()">
                    <span>{{orders_num}}</span>
                </i>
                <div class="dropdown-menu bell-notify-box notify-box">
                    <span class="notify-title">You have {{orders_num}} new orders <a href="/dashboard-messages"> view all</a></span>
                    <div class="nofity-list">
                        <a href="javascript:void(0);" class="notify-item" v-for="(key,order) in orders.data" :key="order.id" >
                            <div class="notify-thumb"><i class="ti-shopping-cart-full btn-danger"></i></div>
                            <div class="notify-text">
                                <p>{{key.name_en}}</p>
                                <span class="msg font-italic">{{ key.created_at }}</span>

                                <!-- <span>Just Now</span> -->
                            </div>
                        </a>
                        <!-- <a href="#" class="notify-item">
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
                        </a> -->
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown" @click="getMessages()">
                    <span>{{messages_num}}</span>
                </i>
                <div class="dropdown-menu notify-box nt-enveloper-box">
                    <span class="notify-title">You have {{messages_num}} new messages <a href="/dashboard-services-orders">view all</a></span>
                    <div class="nofity-list">
                        <a href="javascript:void(0);" class="notify-item" v-for="(key,message) in messages" :key="message.id">
                            <div class="notify-thumb"><i class="ti-shopping-cart-full btn-danger"></i></div>
                            <div class="notify-text">
                                <p>{{ key.name }}</p>
                                <span class="msg font-italic">{{ key.subject }}</span>
                                <!-- <span>3:15 PM</span> -->
                            </div>
                        </a>
                        <!-- <a href="#" class="notify-item">
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
                        </a> -->
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
                orders:[],
                order: {         
                    data: {
                        name_en: '',
                        phone: '',
                    }
                }, 

                messages:[],
                message: {
                    name_en: '',
                    phone: '',
                }, 

                orders_num: 0,
                messages_num: 0,
            }
        },
       props: [
           'ordersRoute',
           'messagesRoute'
       ],
        created() {
            // this.http.headers.common['remember_token'] = this.remember_token;
            this.getNotifyNumber();
            // this.getMessagesNumber();

        },

        methods: {
            getNotifyNumber() {
                const config = {
                    headers: { 
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                // Orders Nutification Number
                axios.get('api/user-notification-num', config)
                .then(res => {
                    this.orders_num = res.data;
                })
                .catch(err => console.log(err));

                // Messages Nutification Number
                axios.get('api/user-message-num', config)
                .then(res => {
                    this.messages_num = res.data;
                    // console.log(res.data)
                })
                .catch(err => console.log(err));
                // console.log(this.ordersRoute);

            },
            // Get Orders
            getOrders(){
                axios.get('api/user-notification')
                .then(res => {
                    this.orders = res;
                    console.log(this.orders.data);
                })
                .catch(err => console.log(err));

            },
            // Get Messages
            getMessages(){
                const config = {
                    headers: { 
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                axios.get('api/user-message', config)
                .then(res => {
                    this.messages = res.data;
                    console.log(this.messages);
                })
                .catch(err => console.log(err));

            },
           
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
