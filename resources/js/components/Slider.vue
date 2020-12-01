<template>
    <div class="row justify-content-center">
        <!-- Modal -->
            <div class="row justify-content-center">
                    <div class="col-lg-10 mt-3 d-flex justify-content-between">       
                        <!-- <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-plus"></i> New Article</button> -->
                        <div class="modal fade bd-example-modal-lg">
                            <div class="modal-dialog modal-lg">
                                <form @submit.prevent="addSlide" enctype="multipart/form-data">
                                <!-- <form @submit="formSubmit" enctype="multipart/form-data"> -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Slide</h5>
                                            <button type="button" class="close" data-dismiss="modal" @click="resetModal()"><code>&times;</code></button>
                                        </div>
                                        <div class="modal-body">
                                            <div v-if="success != ''" class="alert alert-success" role="alert">
                                                {{success}}
                                            </div>
                                            <div class="row">
                                                <!-- Textual inputs start -->
                                                <div class="col-12">
                                                    <!-- <div class="card"> -->
                                                        <div class="card-body">
                                                            <p class="text-muted font-14 mb-3">The <code>*</code> endicates an optional input</p>
                                                            <div class="form-group">
                                                                <label for="example-text-input" class="col-form-label">Title ar <code>*</code></label>
                                                                <input class="form-control" type="text" v-model="slide.title_ar" id="example-text-input1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-text-input" class="col-form-label">Title en <code>*</code></label>
                                                                <input class="form-control" type="text" v-model="slide.title_en"  id="example-text-input2">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-email-input" class="col-form-label">Description ar <code>*</code></label>
                                                                <textarea name="" id="example-email-input" v-model="slide.desc_ar" class="form-control" cols="30" rows="4"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-email-input" class="col-form-label">Description en <code>*</code></label>
                                                                <textarea name="" id="example-email-input" v-model="slide.desc_en" class="form-control" cols="30" rows="4"></textarea>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-email-input"  class="col-form-label d-block">Video or Image</label>
                                                                <!-- <input ref="file" type="file" @change.prevent="selectFile" class="col-form-label"> -->
                                                                <input type="file" class="col-form-label d-block" v-on:change="onImageChange">
                                                                <img v-bind:src="slide.sourse" alt="">
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
                        <div class="modal fade show-slide-details-modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Slide Details</h5>
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
                        <h4 class="header-title">Sliders</h4>
                        <div class="container row justify-content-between">
                        <nav aria-label="page navigation example">
                            <ul class="pagination">
                                <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                                    <a href="#" class="page-link" @click="getSlides(pagination.prev_page_url)">Previous</a>
                                </li>

                                <li class="page-item disabled">
                                    <a href="#" class="page-link text-dark">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}
                                    </a>
                                </li>

                                <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                    <a href="#" class="page-link" @click="getSlides(pagination.next_page_url)">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class="ti-plus mr-1"></i> Add Slider</button>
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
                                        <tr v-for="slide in slides" :key="slide.id" >
                                            <td >{{slide.title_en}}</td>
                                            <td class="">
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" class="text-primary" data-toggle="modal" data-target=".show-service-details-modal"><i class="ti-eye o-icon"></i></a></li>
                                                    <li class="mr-3"><a href="#" @click="editSlide(slide)" class="text-secondary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-pencil o-icon"></i></a></li>
                                                    <li><a href="#" @click="deleteSlide(slide.id)" class="text-danger"><i class="ti-trash o-icon"></i></a></li>
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
                slides: [],
                slide: {
                    title_en: '',
                    title_ar: '',
                    desc_en: '',
                    desc_ar: '',
                    sourse: null,
                    type: 0,
                },
                slide_id: '',
                pagination: {},
                edit: false,
                success: '',
            }
        },

        created() {
            this.getSlides()
        },

        methods: {
            getSlides(page_url) {
                let vm = this;
                page_url = page_url || 'api/slider';
                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.slides = res.data;
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
            // Delete Slide
            deleteSlide(id){
                if(confirm('Are You Sure ?')){
                    fetch(`api/slider/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(res => {
                        alert('Slide Deleted !');
                        this.getSlides();
                        // console.log(res);

                    });
                }
            },
            // Add Slide
            addSlide(){
                if(this.edit === false){
                    // Add 
                   let vm = this;
 
                    const config = {
                        headers: { 'content-type': 'multipart/form-data' }
                    }
    
                    let formData = new FormData();
                    formData.append('image', this.image);
                    formData.append('title_ar', this.slide.title_ar);
                    formData.append('title_en', this.slide.title_en);
                    formData.append('desc_en', this.slide.desc_en);
                    formData.append('desc_ar', this.slide.desc_ar);
                    // formData.append('type', this.slide.type);
    
                    axios.post('/api/slider', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getSlides();

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
                    formData.append('title_ar', this.slide.title_ar);
                    formData.append('title_en', this.slide.title_en);
                    formData.append('desc_en', this.slide.desc_en);
                    formData.append('desc_ar', this.slide.desc_ar);
                    // formData.append('type', this.slide.type);
    
                    axios.put('/api/slider', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getSlides();

                        })
                        .catch(err => console.log(err));
                        
                    this.edit = false;

                }
                // this.resetModal();                        

            },
            editSlide(slide){
                this.edit = true;
                this.slide.id = slide.id;
                this.slide.slide_id = slide.id;
                this.slide.title_en = slide.title_en;
                this.slide.title_ar = slide.title_ar;
                this.slide.desc_en = slide.desc_en;
                this.slide.desc_ar = slide.desc_ar;
                this.slide.sourse = slide.sourse;

            },
            // File Handle
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.sourse = e.target.result;
                };
                reader.readAsDataURL(file);
            },

            resetModal() {
                this.slide.title_en = '';
                this.slide.title_ar = '';
                this.slide.desc_en = '';
                this.slide.desc_ar = '';
                this.slide.sourse = null;
            },
            onImageChange(e){
                this.image = e.target.files[0];
                // this.slide.type = e.target.files[0].type;
            },
            // formSubmit(e) {
            //     e.preventDefault();
            //     let vm = this;
 
            //     const config = {
            //         headers: { 'content-type': 'multipart/form-data' }
            //     }
 
            //     let formData = new FormData();
            //     formData.append('image', this.image);
            //     formData.append('title_ar', this.slide.title_ar);
            //     formData.append('title_en', this.slide.title_en);
            //     formData.append('desc_en', this.slide.desc_en);
            //     formData.append('desc_ar', this.slide.desc_ar);
            //     // formData.append('type', this.slide.type);
 
            //     axios.post('/api/slider', formData, config)
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
