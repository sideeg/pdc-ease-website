<template>
    <div class="row justify-content-center">
        <!-- Show Service Details Modal -->
            <div class="col-lg-10 mt-3 d-flex justify-content-between">
                <div class="modal fade show-message-modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{message.subject}}</h5>
                                <button type="button" class="close" @click="resetModal()" data-dismiss="modal"><code>&times;</code></button>
                            </div>
                            <div class="modal-body border-none">
                                <div class="row">
                                    <!-- Textual inputs start -->
                                    <div class="col-12">
                                        <!-- <div class="card"> -->
                                            <div class="card-body p-0">
                                                <div class="media">
                                                    <div class="media-body">

                                                        <!-- <h4 class="mb-2 md-mt-2"></h4> -->
                                                        <p>{{message.message}}</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                    <!-- Textual inputs end -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning mt-4 py-2 px-4" @click="resetModal()" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Progress Table start -->
            <div class="col-lg-10 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Contact Messages</h4>
                        <div class="container row justify-content-between">
                        <nav aria-label="page navigation example" v-show="pagination.last_page">
                            <ul class="pagination">
                                <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                                    <a href="#" class="page-link" @click="getMessages(pagination.prev_page_url)">Previous</a>
                                </li>

                                <li class="page-item disabled">
                                    <a href="#" class="page-link text-dark">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}
                                    </a>
                                </li>

                                <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                    <a href="#" class="page-link" @click="getMessages(pagination.next_page_url)">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class="ti-plus mr-1"></i> Add Slider</button> -->
                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <!-- <th scope="col">ID</th> -->
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="message in messages" :key="message.id" >
                                            <td >{{message.name}}</td>
                                            <td >{{message.email}}</td>
                                            <td >{{message.subject}}</td>
                                            <td class="">
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" @click="showMessage(message)" class="text-primary" data-toggle="modal" data-target=".show-message-modal"><i class="ti-eye o-icon"></i></a></li>
                                                    <li><a href="#" @click="deleteMessage(message.id)" class="text-danger"><i class="ti-trash o-icon"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Table end -->
    </div>
</template>

<script>
    // import 'axios' from axios;
    export default {
        data() {
            return {
                messages: [],
                message: {
                    name: '',
                    email: '',
                    subject: '',
                    message: '',
                },
                pagination: {},
            }
        },

        created() {
            this.getMessages()
        },

        methods: {
            getMessages(page_url) {
                let vm = this;
                page_url = page_url || 'api/message';
                const config = {
                        headers: { 
                            // 'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                            }
                    }
                axios.get(page_url, config)
                // .then(res => res.json())
                .then(res => {
                    this.messages = res.data.data;
                    vm.makePagination(res.data.current_page, res.data.last_page, res.data.next_page_url, res.data.prev_page_url)
                    // console.log(res.data);

                }
                )
                .catch(err => console.log(err));
            },
            // Show Message
            showMessage (message) {
                this.message.subject = message.subject;
                this.message.message = message.message;
            },
            // Delete Slide
            deleteMessage(id){
                // console.log(id);
                const config = {
                    headers: { 
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }

                if(confirm('Are You Sure ?')){
                    axios.delete(`api/message/${id}`, config)
                    // .then(res => res.json())
                    .then(res => {
                        // alert('Message Deleted !');
                        this.getMessages();
                        // console.log(res);

                    });
                }
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

                // console.log(this.pagination);


            },
            resetModal() {
                this.message.name = '';
                this.message.email = '';
                this.message.subject = '';
                this.message.message = '';
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
