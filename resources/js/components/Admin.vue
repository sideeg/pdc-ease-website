<template>
    <!-- Modal -->
    <div class="row justify-content-center">
        <div class="col-lg-10 mt-3 d-flex justify-content-between">       
            <!-- <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".add-admin-modal"><i class="ti-plus"></i> New Article</button> -->
            <div class="modal fade add-admin-modal">
                <div class="modal-dialog modal-lg">
                    <form @submit.prevent="addAdmin" enctype="multipart/form-data">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Admin</h5>
                            <button type="button" class="close" @click="resetModal()" data-dismiss="modal"><code>&times;</code></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <!-- Textual inputs start -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- <p class="text-muted font-14 mb-3">The <code>*</code> endicates an optional input</p> -->
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Name</label>
                                                <input class="form-control" type="text" v-model="admin.name">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Email</label>
                                                <input class="form-control" type="text" v-model="admin.email">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Password</label>
                                                <input class="form-control" type="Password" v-model="admin.password">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Confirm Password</label>
                                                <input class="form-control" type="Password" v-model="admin.password">
                                            </div>
                                            <input hidden type="text" v-model="admin.id">

                                            <div class="form-group">
                                                <label for="roles" class="col-form-label">Roles</label>
                                                <select name="roles" id="roles" class="form-control order-multiple-services" v-model='admin.role_id'>
                                                    <option v-for="role in roles" :key="role.id" v-bind:value="role.id">{{role.role_name}}</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
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

        <!-- Show Role Details Modal -->
        <div class="col-lg-10 mt-3 d-flex justify-content-between">
            <div class="modal fade show-admin-details-modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Admin Details</h5>
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
        <!-- End Modal -->
    

        <!-- Progress Table start -->
        <div class="col-lg-10 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Admins</h4>
                        <div class="container row justify-content-between">
                        <nav aria-label="page navigation example">
                            <ul class="pagination">
                                <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                                    <a href="#" class="page-link" @click="getAdmins(pagination.prev_page_url)">Previous</a>
                                </li>

                                <li class="page-item disabled">
                                    <a href="#" class="page-link text-dark">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}
                                    </a>
                                </li>

                                <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                    <a href="#" class="page-link" @click="getAdmins(pagination.next_page_url)">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" data-toggle="modal" data-target=".add-admin-modal" @click="getSetRoles()" ><i class="ti-plus mr-1"></i>New Admin</button>
                        </div>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table ">
                                <thead class="text-uppercase">
                                    <tr>
                                        <!-- <th scope="col">ID</th> -->
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Roles</th>
                                        <!-- <th scope="col">Image</th> -->
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="admin in admins" :key="admin.id">
                                        <!-- <th scope="row">1</th> -->
                                        <td>{{admin.name}}</td>
                                        <td>{{admin.email}}</td>
                                        <td>
                                            <span class="badge badge-pill badge-info p-1 my-1"> {{admin.role.role_name}}</span>    
                                        </td>
                                        <td class="">
                                            <ul class="d-flex justify-content-center align-items-center">
                                                <!-- <li class="mr-3"><a href="#" class="text-primary" data-toggle="modal" data-target=".show-role-details-modal"><i class="ti-eye o-icon"></i></a></li> -->
                                                <li class="mr-3"><a href="#" @click="editAdmin(admin)" class="text-secondary" data-toggle="modal" data-target=".add-admin-modal"><i class="ti-pencil o-icon"></i></a></li>
                                                <li><a href="#" @click="deleteAdmin(admin.id)" class="text-danger"><i class="ti-trash o-icon"></i></a></li>
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
                admins: [],
                admin: {
                    id: '',
                    name: '',
                    email: '',
                    password: '',
                    role_id: '',
                },
                roles: [],
                role: {
                    id: '',
                    role_name: '',
                },

                admin_id: '',
                pagination: {},
                edit: false,
            }
        },

        created() {
            this.getAdmins()
        },

        methods: {
            getAdmins(page_url) {
                let vm = this;
                page_url = page_url || 'api/user';

                const config = {
                    headers: { 
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }

                axios.get(page_url, config)
                // .then(res => res.json())
                .then(res => {
                    this.admins = res.data.data;
                    vm.makePagination(res.data.current_page, res.data.last_page, res.data.next_page_url, res.data.prev_page_url)
                    // console.log(res.data.data);
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
            // Delete Admin
            deleteAdmin(id){
                const config = {
                    headers: { 
                        'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                    }
                }
                if(confirm('Are You Sure ?')){
                    axios.delete(`api/user/${id}`, config)
                    // .then(res => res.json())
                    .then(res => {
                        // alert('Admin Deleted !');
                        this.getAdmins();
                        // console.log(res);

                    });
                }
            },
            // Add Admin
            addAdmin(){
                // console.log(this.admin);
                this.resetModal();                        

                if(this.edit === false){
                    // Add 
                    let vm = this;
 
                    const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                        }
                    }
    
                    let formData = new FormData();
                    formData.append('name', this.admin.name);
                    formData.append('email', this.admin.email);
                    formData.append('password', this.admin.password);
                    formData.append('role_id', this.admin.role_id);
                   
                    console.log(this.admin);
                    axios.post('/api/user', formData, config)
                        .then(res => {
                            // vm.success = res.success;
                            // console.log(res);
                            this.getAdmins();

                        })
                        .catch(err => console.log(err));
                    
                }else {
                    // Update
                        // console.log(admin);
                    const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                        }
                    }

                    
                    let formData = new FormData();

                    formData.append('id', this.admin.id);
                    formData.append('name', this.admin.name);
                    formData.append('email', this.admin.email);
                    formData.append('password', this.admin.password);
                    formData.append('role_id', this.admin.role_id);
                    // console.log(this.admin.id);
                   

                    axios.put('api/user', formData, config)
                    // .then(res => res.json())
                    .then(res => {
                        // console.log(res);

                        // this.resetModal();                        
                        // alert('Admin Added !');
                        this.getAdmins();
                        // console.log(res);
                    })
                    .catch(err => console.log(err));
                    this.edit = false;

                }

                this.resetModal();                        

            },
            editAdmin(admin){
                // console.log(admin.id);
                this.edit = true;
                this.admin.id = admin.id;
                this.admin.admin_id = admin.id;
                this.admin.role_id = admin.role_id;
                this.admin.name = admin.name;
                this.admin.email = admin.email;
                // console.log(this.admin);

                this.getSetRoles()
            },
            // Get and Set Roles
            getSetRoles(){
                    const config = {
                        headers: { 
                            // 'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                            }
                    }

                axios.get('api/role',config)
                // .then(res => res.json())
                .then(res => {
                    this.roles = res.data;
                    // console.log(res);
                })
                .catch(err => console.log(err));
                
            },
            resetModal() {
                // console.log('kkkk')
                this.admin.id = '';
                this.admin.name = '';
                this.admin.email = '';
                this.admin.role_id = '';
                this.roles = [];
                // this.admin.sourse = null;
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
