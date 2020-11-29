<template>
    
    <div class="row justify-content-center">
        <!-- Modal -->
            <!-- Add New Service Modal -->
            <div class="col-lg-10 mt-3 d-flex justify-content-between">
                <div class="modal fade bd-example-modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New Service</h5>
                                <button type="button" class="close" data-dismiss="modal"><code>&times;</code></button>
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
                                                    <input type="file" class="col-form-label">
                                                </div>
                                                
                                                <div class="border p-3">
                                                    <!-- <h5>Tags:&ThickSpace;</h5> -->
                                                    <span class="font-italic">
                                                        <b>Tags: &ThickSpace;</b >

                                                        <span class="badge badge-pill badge-info p-1" v-for="tag in service.tags" :key="tag.id" > {{tag.title_en}}</span>
                                                        <!-- <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                        <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                        <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                        <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                        <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                        <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                        <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                        <span class="badge badge-pill badge-info p-1"> Web Development</span> -->
                                                        
                                                    </span>
                                                    <div class="form-group mt-3">
                                                        <label for="example-text-input" class="col-form-label">New Tag</label>
                                                        <div class="container row mx-0 px-0 d-flex justify-content-between">
                                                            <input class="form-control col-lg-9 col-md-9 col-sm-12 md-mb-2" type="text" id="example-text-input">
                                                            <button class="col-lg-2 col-md-2 col-sm-4 btn btn-primary py-1 pl-0 pr-2"><i class="ti-plus"></i> Add</button>
                                                        </div>
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
                                <button type="button" class="btn btn-primary mt-4 py-2 px-4">Submit</button>
                            </div>
                        </div>
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
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="media">
                                                    <img class="img-card mr-md-4" src="assets/images/about/about-page.jpg" alt="image">
                                                    <div class="media-body">
                                                        <h4 class="mb-2 md-mt-2">Media heading</h4>
                                                        <!-- <div class="row mb-3"><span class="col-lg-6 col-sm-12 font-italic"><b>Date:&ThickSpace; </b> 5 Fab, 2020</span></div> -->
                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        <div class="row mb-3">
                                                            <span class="col-lg-12 font-italic">
                                                                <b>Tags: &ThickSpace;</b >
                                                                <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                                <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                                <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                                <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                                <span class="badge badge-pill badge-info p-1"> Web Development</span>
                                                            </span> 
                                                        </div>
                                                        
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
                        <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class="ti-plus mr-1"></i> New Service</button>
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
                                                <li class="mr-3"><a href="#" class="text-primary" data-toggle="modal" data-target=".show-service-details-modal"><i class="ti-eye o-icon"></i></a></li>
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
                        title_en: '',
                    },
                },
                tags:[],
                tag:{
                    id: '',
                    title_en: '',
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
                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.services = res.data;
                    vm.makePagination(res.current_page, res.last_page, res.next_page_url, res.prev_page_url)
                })
                .catch(err => console.log(err));
            },
            // Get Tags
            getSetTags() {
                let vm = this;
                fetch('api/tag')
                .then(res => res.json())
                .then(res => {
                    this.services.tags = res.data;
                    console.log(this.services.tags);
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
                if(confirm('Are You Sure ?')){
                    fetch(`api/service/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(res => {
                        alert('Service Deleted !');
                        this.getServices();
                        // console.log(res);

                    });
                }
            },
            // Add Service
            addService(){
                this.getSetTags();
                if(this.edit === false){
                    // Add 
                   let vm = this;
 
                    const config = {
                        headers: { 'content-type': 'multipart/form-data' }
                    }
    
                    let formData = new FormData();
                    formData.append('image', this.image);
                    formData.append('title_ar', this.service.title_ar);
                    formData.append('title_en', this.service.title_en);
                    formData.append('desc_en', this.service.desc_en);
                    formData.append('desc_ar', this.service.desc_ar);
                    // formData.append('type', this.service.type);
    
                    axios.post('/api/service', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getServices();

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
                    formData.append('title_ar', this.service.title_ar);
                    formData.append('title_en', this.service.title_en);
                    formData.append('desc_en', this.service.desc_en);
                    formData.append('desc_ar', this.service.desc_ar);
                    // formData.append('type', this.service.type);
    
                    axios.put('/api/service', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getServices();

                        })
                        .catch(err => console.log(err));
                        
                    this.edit = false;

                }
                // this.resetModal();                        

            },
            editService(service){
                this.getSetTags();
                this.edit = true;
                this.service.id = service.id;
                this.service.service_id = service.id;
                this.service.title_en = service.title_en;
                this.service.title_ar = service.title_ar;
                this.service.desc_en = service.desc_en;
                this.service.desc_ar = service.desc_ar;
                this.service.image = service.image;

            },
            // File Handle
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },

            resetModal() {
                this.service.title_en = '';
                this.service.title_ar = '';
                this.service.desc_en = '';
                this.service.desc_ar = '';
                this.service.image = null;
            },
            onImageChange(e){
                this.image = e.target.files[0];
                // this.service.type = e.target.files[0].type;
            },
            // formSubmit(e) {
            //     e.preventDefault();
            //     let vm = this;
 
            //     const config = {
            //         headers: { 'content-type': 'multipart/form-data' }
            //     }
 
            //     let formData = new FormData();
            //     formData.append('image', this.image);
            //     formData.append('title_ar', this.service.title_ar);
            //     formData.append('title_en', this.service.title_en);
            //     formData.append('desc_en', this.service.desc_en);
            //     formData.append('desc_ar', this.service.desc_ar);
            //     // formData.append('type', this.service.type);
 
            //     axios.post('/api/servicer', formData, config)
            //         .then(res => {
            //             vm.success = res.success;
            //             console.log(res);
            //         })
            //         .catch(err => console.log(err));
            // },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>



