<template>
    <div class="row justify-content-center">
        <!-- Modal -->
            <div class="row justify-content-center">
                    <div class="col-lg-10 mt-3 d-flex justify-content-between">       
                        <!-- <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-plus"></i> New Article</button> -->
                        <div class="modal fade bd-example-modal-lg" id="#hide-modal">
                            <div class="modal-dialog modal-lg">
                                <form @submit.prevent="addTag" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tag</h5>
                                            <button type="button" class="close" data-dismiss="modal" @click="resetModal()"><code>&times;</code></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <!-- Textual inputs start -->
                                                <div class="col-12">
                                                    <!-- <div class="card"> -->
                                                        <div class="card-body">
                                                            <!-- <p class="text-muted font-14 mb-3">The <code>*</code> endicates an optional input</p> -->
                                                            <div class="form-group">
                                                                <label for="example-text-input" class="col-form-label">Name ar <code>*</code></label>
                                                                <input class="form-control" type="text" v-model="tag.name_ar" id="example-text-input1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-text-input" class="col-form-label">Name en <code>*</code></label>
                                                                <input class="form-control" type="text" v-model="tag.name_en"  id="example-text-input2">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-email-input" class="col-form-label">Description ar <code>*</code></label>
                                                                <textarea name="" id="example-email-input" v-model="tag.desc_ar" class="form-control" cols="30" rows="4"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-email-input" class="col-form-label">Description en <code>*</code></label>
                                                                <textarea name="" id="example-email-input" v-model="tag.desc_en" class="form-control" cols="30" rows="4"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-email-input" class="col-form-label d-block">Services</label>
                                                                <select id="example-email-input" class="form-control order-multiple-services" v-model='tag.service_id'>
                                                                   
                                                                    <option v-for="service in services" :key="service.id" v-bind:value="service.id">{{service.title_en}}</option>
                                                                </select>
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
                        <div class="modal fade show-tag-details-modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tag Details</h5>
                                        <button type="button" class="close" data-dismiss="modal"><code>&times;</code></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!-- Textual inputs start -->
                                            <div class="col-12">
                                                <!-- <div class="card"> -->
                                                    <div class=" p-0">
                                                        <div class="media">
                                                            <!-- <img class="img-card mr-md-4" src="assets/images/about/about-page.jpg" alt="image"> -->
                                                            <div class="media-body">
                                                                <h4 class="mb-2 md-mt-2">Title (en) : {{tag.name_en}}</h4>
                                                                <h4 class="mb-2 md-mt-2">Title (en) : {{tag.name_ar}}</h4>

                                                                <!-- <div class="row mb-3"><span class="col-lg-6 col-sm-12 font-italic"><b>Date:&ThickSpace; </b> 5 Fab, 2020</span></div> -->
                                                                <p class="py-2">Description (en) : <br> {{tag.desc_en}}</p>
                                                                <p class="py-2">Description (ar) : <br> {{tag.desc_ar}}</p>

                                                                
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

            </div>
        <!-- End Modal -->

        <!-- Progress Table start -->
            <div class="col-lg-10 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Tags</h4>
                        <div class="container row justify-content-between">
                        <nav aria-label="page navigation example">
                            <ul class="pagination">
                                <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                                    <a href="#" class="page-link" @click="getTags(pagination.prev_page_url)">Previous</a>
                                </li>

                                <li class="page-item disabled">
                                    <a href="#" class="page-link text-dark">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}
                                    </a>
                                </li>

                                <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                    <a href="#" class="page-link" @click="getTags(pagination.next_page_url)">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" data-toggle="modal" data-target=".bd-example-modal-lg" @click="getSetServices()" ><i class="ti-plus mr-1"></i> New Tag</button>
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
                                            <th scope="col"  class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="tag in tags" :key="tag.id" >
                                            <td >{{tag.name_en}}</td>
                                            <td class="">
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" @click="showTag(tag)" class="text-primary" data-toggle="modal" data-target=".show-tag-details-modal"><i class="ti-eye o-icon"></i></a></li>
                                                    <li class="mr-3"><a href="#" @click="editTag(tag)" class="text-secondary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-pencil o-icon"></i></a></li>
                                                    <li><a href="#" @click="deleteTag(tag.id)" class="text-danger"><i class="ti-trash o-icon"></i></a></li>
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
                tags: [],
                tag: {
                    id: '',
                    name_en: '',
                    name_ar: '',
                    desc_en: '',
                    desc_ar: '',
                    service_id: '',
                },
                services: [],
                service: {
                    id: '',
                    name_en: '',
                },

                tag_id: '',
                pagination: {},
                edit: false,
            }
        },

        created() {
            this.getTags()
        },

        methods: {
            getTags(page_url) {
                let vm = this;
                page_url = page_url || 'api/tag';
                const config = {
                    headers: { 
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                axios.get(page_url, config)
                // .then(res => res.json())
                .then(res => {
                    this.tags = res.data.data;
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

                // console.log(this.pagination);


            },
            // Delete Tag
            deleteTag(id){
                const config = {
                    headers: { 
                        'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                if(confirm('Are You Sure ?')){
                    axios.delete(`api/tag/${id}`, config)
                    // .then(res => res.json())
                    .then(res => {
                        // alert('Tag Deleted !');
                        this.getTags();
                        // console.log(res);

                    });
                }
            },
            // Add Tag
            addTag(){
                if(this.edit === false){

                    const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                        }
                    }
                    let formData = new FormData();
                    formData.append('id', this.tag.id);
                    formData.append('name_ar', this.tag.name_ar);
                    formData.append('name_en', this.tag.name_en);
                    formData.append('desc_en', this.tag.desc_en);
                    formData.append('desc_ar', this.tag.desc_ar);
                    formData.append('service_id', this.tag.service_id);

                    // Add 
                    axios.post('api/tag', formData, config)
                    .then(res => {
                        this.getTags();
                    }).catch(err => console.log(err));
                    
                }else {
                    // Update
                        // console.log('hhhhhhhhhhh');

                    const config = {
                        headers: { 
                            'content-type': 'multipart/form-data',
                            'remember_token': window.Laravel.remember_token
                        }
                    }

                    let formData = new FormData();
                    formData.append('id', this.tag.id);
                    formData.append('name_ar', this.tag.name_ar);
                    formData.append('name_en', this.tag.name_en);
                    formData.append('desc_en', this.tag.desc_en);
                    formData.append('desc_ar', this.tag.desc_ar);
                    formData.append('service_id', this.tag.service_id);
                    formData.append('_method', 'PUT');
                    
                    // console.log(this.tag)
                    axios.post('api/tag', formData, config)
                    // .then(res => res.json())
                    .then(res => {
                        this.getTags();
                    })
                    .catch(err => console.log(err));
                    this.edit = false;

                }
                // this.resetModal();                        

            },
            editTag(tag){
                // console.log(tag);
                this.edit = true;
                this.tag.id = tag.id;
                this.tag.tag_id = tag.id;
                this.tag.name_en = tag.name_en;
                this.tag.name_ar = tag.name_ar;
                this.tag.desc_en = tag.desc_en;
                this.tag.desc_ar = tag.desc_ar;
                this.getSetServices()
            },
            // Get and Set Services
            getSetServices(){
                const config = {
                    headers: { 
                        // 'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                    }
                }
                axios.get('api/services_names')
                // .then(res => res.json())
                .then(res => {
                    this.services = res.data;
                    // console.log(res);
                })
                
            },
            resetModal() {
                this.tag.name_en = '';
                this.tag.name_ar = '';
                this.tag.desc_en = '';
                this.tag.desc_ar = '';
                // this.tag.sourse = null;
            },
            showTag(tag){
                this.tag.name_en = tag.name_en;
                this.tag.name_ar = tag.name_ar;
                this.tag.desc_en = tag.desc_en;
                this.tag.desc_ar = tag.desc_ar;
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
