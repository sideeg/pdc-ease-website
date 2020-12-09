<template>

    <div class="row justify-content-center">
        <!-- Modal -->
            <!-- Add New Service Modal -->
            <div class="col-lg-10 mt-3 d-flex justify-content-between">
                <div class="modal fade bd-example-modal-lg">
                    <div class="modal-dialog modal-lg">
                        <form @submit.prevent="addService" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New Service</h5>
                                <button type="button" class="close" @click="resetModal()" data-dismiss="modal"><code>&times;</code></button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <!-- Textual inputs start -->
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Service Name <b>( ar )</b></label>
                                                    <input class="form-control" type="text" v-model="service.title_ar">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Service Name <b>( en )</b></label>
                                                    <input class="form-control" type="text" v-model="service.title_en">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email-input" class="col-form-label">Service Description <b>( ar )</b></label>
                                                    <textarea  class="form-control" v-model="service.desc_ar" cols="30" rows="4"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email-input" class="col-form-label">Service Description <b>( en )</b></label>
                                                    <textarea  class="form-control" v-model="service.desc_en" cols="30" rows="4"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email-input" class="col-form-label d-block">Service Image</label>
                                                    <input type="file" v-on:change="onImageChange" class="col-form-label">
                                                </div>
                                                <!-- <input type="text" hidden :value="article.edit ? article.created_at : ''"> -->

                                                <div class="form-group p-3">
                                                    <!-- <h5>Tags:&ThickSpace;</h5> -->
                                                    <span class="">
                                                        <label for="">Tags: &ThickSpace;</label>
                                                        <span v-if="edit">
                                                            <span class="badge badge-pill badge-info px-1 mx-1" v-for="tag in service.tags" :key="tag.id" > {{tag.name_en}}</span>
                                                        </span>
                                                    </span>
                                                    <div class="form-group mt-3">
                                                        <!-- <label for="example-email-input" class="col-form-label d-block">Article Tag</label> -->
                                                        <select id="example-email-input" class="form-control" v-model="tags_ids" multiple>
                                                            <!-- <option v-for="tag in edit ? service.tags : tags " :key="tag.id" v-bind:value="tag.id" :selected="edit">{{tag.name_en}}</option> -->
                                                            <option v-for="tag in tags" :key="tag.id" v-bind:value="tag.id" :selected="service.tags.includes(tag)">{{tag.name_en}}</option>

                                                            <!-- <div>
                                                                <option v-for="tag in service.tags" :key="tag.id" v-bind:value="tag.id" >{{tag.name_en}} vvv</option>
                                                            </div> -->

                                                        </select>
                                                    </div>
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

            <!-- Show Service Details Modal -->
            <div class="col-lg-10 mt-3 d-flex justify-content-between">
                <div class="modal fade show-service-details-modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Service Details</h5>
                                <button type="button" class="close" data-dismiss="modal"><code>&times;</code></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Textual inputs start -->
                                    <div class="col-12">
                                        <!-- <div class="card"> -->
                                            <div class="card-body p-0">
                                                <div class="media">
                                                    <img class="img-card mr-md-4" :src="service.image" alt="image">
                                                    <div class="media-body">
                                                        <h4 class="mb-2 md-mt-2">{{ service.title_en}}</h4>
                                                        <h4 class="mb-2 md-mt-2">{{ service.title_ar}}</h4>

                                                        <!-- <div class="row mb-3"><span class="col-lg-6 col-sm-12 font-italic"><b>Date:&ThickSpace; </b> 5 Fab, 2020</span></div> -->
                                                        <p>{{ service.desc_en}}</p>
                                                        <p>{{ service.desc_ar}}</p>

                                                        <div class="row mb-3">
                                                            <span class="col-lg-12 font-italic">
                                                                <b>Tags: &ThickSpace;</b >
                                                                <span class="badge badge-pill badge-info p-1 mx-1" v-for="tag in service.tags" :key="tag.id"> {{tag.name_en}}</span>

                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div> -->
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
                        <h4 class="header-title">Services</h4>
                        <div class="container row justify-content-between">
                        <nav aria-label="page navigation example">
                            <ul class="pagination">
                                <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                                    <a href="#" class="page-link" @click="getServices(pagination.prev_page_url)">Previous</a>
                                </li>

                                <li class="page-item disabled">
                                    <a href="#" class="page-link text-dark">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}
                                    </a>
                                </li>

                                <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                    <a href="#" class="page-link" @click="getServices(pagination.next_page_url)">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" @click="getSetTags()" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class="ti-plus mr-1"></i> New Service</button>
                        </div>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table">
                                <thead class="text-uppercase">
                                    <tr>
                                        <!-- <th scope="col">ID</th> -->
                                        <th scope="col">Title</th>
                                        <!-- <th scope="col">Description</th> -->
                                        <!-- <th scope="col">Image</th> -->
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="service in services" :key="service.id" >
                                        <td >{{service.title_en}}</td>
                                        <td class="">
                                            <ul class="d-flex justify-content-center align-items-center">
                                                <li class="mr-3"><a href="#" class="text-primary" @click="showService(service)" data-toggle="modal" data-target=".show-service-details-modal"><i class="ti-eye o-icon"></i></a></li>
                                                <li class="mr-3"><a href="#" @click="editService(service)" class="text-secondary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-pencil o-icon"></i></a></li>
                                                <li><a href="#" @click="deleteService(service.id)" class="text-danger"><i class="ti-trash o-icon"></i></a></li>
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
                services: [],
                service: {
                    title_en: '',
                    title_ar: '',
                    desc_en: '',
                    desc_ar: '',
                    image: null,
                    tags:[],
                    tag:{
                        id: '',
                        name_en: '',
                    },
                },
                tags:[],
                tag:{
                    id: '',
                    name_en: '',
                },
                tags_ids: [],
                tag_id: {
                    id:'',
                },
                service_id: '',
                pagination: {},
                edit: false,
                success: '',
            }
        },

        created() {
            this.getServices()
        },

        methods: {
            // Get Services
            getServices(page_url) {
                let vm = this;
                page_url = page_url || 'api/service';
                const config = {
                    headers: {
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                axios.get(page_url,config)
                // .then(res => res.json())
                .then(res => {
                    this.services = res.data.data;
                    // console.log(res.data.data)
                    vm.makePagination(res.data.current_page, res.data.last_page, res.data.next_page_url, res.data.prev_page_url);
                })
                .catch(err => console.log(err));
            },
            // Get Tags
            getSetTags() {
                // console.log('getsettags');
                const config = {
                    headers: {
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                let vm = this;
                axios.get('api/tag_names', config)
                // .then(res => res.json())
                .then(res => {
                    this.tags = res.data;
                    // console.log(this.tags);
                })
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
            // Delete Service
            deleteService(id){
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                if(confirm('Are You Sure ?')){
                    axios.delete(`api/service/${id}`, config)
                    // .then(res => res.json())
                    .then(res => {
                        // alert('Service Deleted !');
                        this.getServices();
                        // console.log(res);

                    });
                }
            },
            // Add Service
            addService(){
                this.getSetTags();
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                    }
                }
                if(this.edit === false){
                    // Add
                   let vm = this;

                    let formData = new FormData();
                    formData.append('image', this.image);
                    formData.append('title_ar', this.service.title_ar);
                    formData.append('title_en', this.service.title_en);
                    formData.append('desc_en', this.service.desc_en);
                    formData.append('desc_ar', this.service.desc_ar);
                    formData.append('tags', this.tags_ids);
                    // console.log(this.tags_ids);
                    // formData.append('type', this.service.type);
                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                        }
                    }
                    // console.log(formData);
                    axios.post('/api/service', formData, config)
                        .then(res => {
                            // vm.success = res.success;
                            // console.log(res);
                            this.getServices();

                        })
                        .catch(err => console.log(err));

                }else {
                    // Update
                    let vm = this;

                    let formData = new FormData();
                    formData.append('id', this.service.id);
                    formData.append('image', this.image);
                    formData.append('title_ar', this.service.title_ar);
                    formData.append('title_en', this.service.title_en);
                    formData.append('desc_en', this.service.desc_en);
                    formData.append('desc_ar', this.service.desc_ar);
                    formData.append('tags', this.tags_ids);
                    formData.append('_method', 'PUT');

                    // formData.append('type', this.service.type);
                            // console.log(formData);

                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                        }
                    }

                    axios.post('/api/service', formData, config)
                        .then(res => {
                            this.getServices();
                        }).catch(err => console.log(err));

                    this.edit = false;

                }

                // this.resetModal();

            },
            editService(service){
                // console.log(service.tag)
                this.getSetTags();
                this.edit = true;
                this.service.id = service.id;
                this.service.service_id = service.id;
                this.service.title_en = service.title_en;
                this.service.title_ar = service.title_ar;
                this.service.desc_en = service.desc_en;
                this.service.desc_ar = service.desc_ar;
                this.service.image = service.image;
                // service tags
                this.service.tags = service.tag;

            },
            // Show Service
            showService(service){
                this.service.title_en = service.title_en;
                this.service.title_ar = service.title_ar;
                this.service.desc_en = service.desc_en;
                this.service.desc_ar = service.desc_ar;
                this.service.image = service.image;
                // service tags
                this.service.tags = service.tag;
            },

            resetModal() {
                this.edit= false;
                this.service.title_en = '';
                this.service.title_ar = '';
                this.service.desc_en = '';
                this.service.desc_ar = '';
                this.service.image = null;
                this.service.tags = [];

            },
            onImageChange(e){
                this.image = e.target.files[0];
                // this.service.type = e.target.files[0].type;
            },

        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>



