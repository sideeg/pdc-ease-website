<template>
    <div class="row justify-content-center">
        <!-- Modal -->
            <div class="row justify-content-center">
                    <div class="col-lg-10 mt-3 d-flex justify-content-between">       
                        <!-- <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-plus"></i> New Article</button> -->
                        <div class="modal fade bd-example-modal-lg">
                            <div class="modal-dialog modal-lg">
                                <form @submit.prevent="addClient" enctype="multipart/form-data">
                                <!-- <form @submit="formSubmit" enctype="multipart/form-data"> -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Client</h5>
                                            <button type="button" class="close" data-dismiss="modal" @click="resetModal()"><code>&times;</code></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- <div v-if="success != ''" class="alert alert-success" role="alert">
                                                {{success}}
                                            </div> -->
                                            <div class="row">
                                                <!-- Textual inputs start -->
                                                <div class="col-12">
                                                    <!-- <div class="card"> -->
                                                        <div class="card-body">
                                                            <!-- <p class="text-muted font-14 mb-3">The  endicates an optional input</p> -->
                                                            
                                                            <div class="form-group">
                                                                <label for="example-text-input" class="col-form-label">Name </label>
                                                                <input class="form-control" type="text" v-model="client.name" >
                                                            </div>
                                                            <div class="form-group container row justify-content-between align-items-center">
                                                                <div>
                                                                    <label for="example-email-input"  class="col-form-label d-block">Client Logo</label>
                                                                    <!-- <input ref="file" type="file" @change.prevent="selectFile" class="col-form-label"> -->
                                                                    <input type="file" class="col-form-label d-block" v-on:change="onImageChange">
                                                                </div>
                                                                <img v-bind:src="client.logo" class="bg-dark" alt="">
                                                            </div>

                                                        </div>
                                                    <!-- </div> -->
                                                </div>
                                                <!-- Textual inputs end -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning mt-4 py-2 px-4" @click="resetModal()" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary mt-4 py-2 px-4">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- Show Service Details Modal -->
                    <div class="col-lg-10 mt-3 d-flex justify-content-between">
                        <div class="modal fade show-client-details-modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Client Details</h5>
                                        <button type="button" class="close" data-dismiss="modal"><code>&times;</code></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!-- Textual inputs start -->
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body p-0">
                                                        <div class="media">
                                                            <img class="img-card mr-md-4" src="assets/images/about/about-page.jpg" alt="image">
                                                            <div class="media-body">
                                                                <h4 class="mb-2 md-mt-2">Media heading</h4>
                                                                <!-- <div class="row mb-3"><span class="col-lg-6 col-sm-12 font-italic"><b>Date:&ThickSpace; </b> 5 Fab, 2020</span></div> -->
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Textual inputs end -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning mt-4 py-2 px-4" data-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary mt-4 py-2 px-4">Submit</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        <!-- End Modal -->

        

        <!-- Progress Table start -->
            <div class="col-lg-10 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Clients</h4>
                        <div class="container row justify-content-between">
                        <nav aria-label="page navigation example">
                            <ul class="pagination">
                                <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                                    <a href="#" class="page-link" @click="getClients(pagination.prev_page_url)">Previous</a>
                                </li>

                                <li class="page-item disabled">
                                    <a href="#" class="page-link text-dark">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}
                                    </a>
                                </li>

                                <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                    <a href="#" class="page-link" @click="getClients(pagination.next_page_url)">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class="ti-plus mr-1"></i> New Client</button>
                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <!-- <th scope="col">ID</th> -->
                                            <th scope="col">Name</th>
                                            <!-- <th scope="col">Description</th> -->
                                            <th scope="col">Image</th>
                                            <th scope="col"  class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="client in clients" :key="client.id" >
                                            <td >{{client.name ? client.name : 'This Client Has No Title'}}</td>
                                            <td>
                                                <img :src="client.logo"  :alt="client.name" class="table-img bg-dark" srcset="">
                                            </td>
                                            <td class="">
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <!-- <li class="mr-3"><a href="#" class="text-primary" data-toggle="modal" data-target=".show-service-details-modal"><i class="ti-eye o-icon"></i></a></li> -->
                                                    <li class="mr-3"><a href="#" @click="editClient(client)" class="text-secondary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-pencil o-icon"></i></a></li>
                                                    <li><a href="#" @click="deleteClient(client.id)" class="text-danger"><i class="ti-trash o-icon"></i></a></li>
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
            // console.log(this.remember_token)
            console.log(window.Laravel.remember_token)

        },

        methods: {
            getClients(page_url) {
                let vm = this;
                page_url = page_url || 'api/clint';
                const config = {
                        headers: { 
                            // 'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                            }
                    }
                axios.get(page_url, config)
                // .then(res => res.json())
                .then(res => {
                    this.clients = res.data.data;
                    vm.makePagination(res.data.current_page, res.data.last_page, res.data.next_page_url, res.data.prev_page_url)
                    // console.log(res);
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
                const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                            }
                    }
                if(confirm('Are You Sure ?')){
                    axios.delete(`api/clint/${id}`, config)
                    // .then(res => res.json())
                    .then(res => {
                        // alert('Client Deleted !');
                        this.getClients();
                        // console.log(res);

                    });
                }
            },
            // Add Client
            addClient(){
                if(this.edit == false){
                    // Add 
                   let vm = this;
 
                    const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            'remember_token' : window.Laravel.remember_token
                             }
                    }
    
                    let formData = new FormData();
                    formData.append('logo', this.image);
                    formData.append('name', this.client.name);
                    // console.log(this.image);
                    axios.post('/api/clint', formData, config)
                        .then(res => {
                            // vm.success = res.success;
                            // console.log(res);
                            this.getClients();

                        })
                        .catch(err => console.log(err));
                        
                }else {
                    // Update
                    let vm = this;
 
                    const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                            }
                    }
    
                    let formData = new FormData();
                    formData.append('logo', this.image);
                    formData.append('id', this.client.id);
                    formData.append('name', this.client.name);
                    formData.append('_method', 'PUT');

                    // console.log(formData);
    
                    axios.post('/api/clint', formData, config)
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
                // console.log(client.logo);

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
            // console.log('Component mounted.')
        }
    }
</script>
