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
                                            <!-- <div v-if="success != ''" class="alert alert-success" role="alert">
                                                {{success}}
                                            </div> -->
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
                                                                <label for="desc_ar" class="col-form-label">Description ar <code>*</code></label>
                                                                <textarea name="" v-model="slide.desc_ar" class="form-control" cols="30" rows="4"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="desc_en" class="col-form-label">Description en <code>*</code></label>
                                                                <textarea name="" v-model="slide.desc_en" class="form-control" cols="30" rows="4"></textarea>
                                                            </div>
                                                            <div class="form-group container row align-items-center justify-content-between">
                                                                <div>
                                                                    <label for="desc_ar"  class="col-form-label d-block">Video or Image</label><br>
                                                                    <!-- <input ref="file" type="file" @change.prevent="selectFile" class="col-form-label"> -->
                                                                    <input type="file" class="col-form-label d-block" v-on:change="onImageChange">
                                                                </div>
                                                                <img v-bind:src="slide.sourse" class="table-img" alt="">
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
            </div>
        <!-- End Modal -->

        <!-- Show Service Details Modal -->
            <div class="col-lg-10 mt-3 d-flex justify-content-between">
                <div class="modal fade show-slider-details-modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Slider Details</h5>
                                <button type="button" class="close" data-dismiss="modal"><code>&times;</code></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Textual inputs start -->
                                    <div class="col-12">
                                        <!-- <div class="card"> -->
                                            <div class="card-body p-0">
                                                <div class="media">
                                                    <img v-if="slide.type == 0" :src="slide.sourse"  :alt="slide.title_en" class="img-card mr-md-4" srcset="">
                                                    <video v-if="slide.type == 1" width="320" height="240" controls class="img-card mr-md-4">
                                                        <source :src="slide.sourse" type="video/mp4">
                                                        <source :src="slide.sourse" type="video/ogg">
                                                        Your browser does not support video.
                                                    </video>
                                                    <!-- <img class="img-card mr-md-4" :src="slide.image" alt="image"> -->
                                                    <div class="media-body">
                                                        <h4 class="mb-2 md-mt-2">{{ slide.title_en}}</h4>
                                                        <h4 class="mb-2 md-mt-2">{{ slide.title_ar}}</h4>

                                                        <!-- <div class="row mb-3"><span class="col-lg-6 col-sm-12 font-italic"><b>Date:&ThickSpace; </b> 5 Fab, 2020</span></div> -->
                                                        <p>{{ slide.desc_en}}</p>
                                                        <p>{{ slide.desc_ar}}</p>

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
                                            <th scope="col" class="text-center">Image</th>
                                            <th scope="col"  class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="slide in slides" :key="slide.id" >
                                            <td >{{slide.title_en ? slide.title_en : 'This Slide Has No Title'}}</td>
                                            <td class="d-flex justify-content-center">
                                                {{slide.image}}
                                                <img v-if="slide.type == 0" :src="slide.sourse"  :alt="slide.title_en" class="table-img" srcset="">
                                                <video v-if="slide.type == 1" width="320" height="240" controls class="table-img1">
                                                    <source :src="slide.sourse" type="video/mp4">
                                                    <source :src="slide.sourse" type="video/ogg">
                                                    Your browser does not support video.
                                                </video>
                                            </td>
                                            <td class="">
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" @click="showSlide(slide)" class="text-primary" data-toggle="modal" data-target=".show-slider-details-modal"><i class="ti-eye o-icon"></i></a></li>
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
                    // sourse_full_path: null,
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
                const config = {
                    headers: {
                        // 'content-type': 'multipart/form-data',
                        'remember_token' : window.Laravel.remember_token
                    }
                }

                axios.get(page_url, config)
                // .then(res => res.json())
                .then(res => {
                    this.slides = res.data.data;
                    vm.makePagination(res.data.current_page, res.data.last_page, res.data.next_page_url, res.data.prev_page_url)
                    // console.log(res.data.data);

                }).catch(err => console.log(err));
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
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'remember_token': window.Laravel.remember_token
                        }
                }
                if(confirm('Are You Sure ?')){
                    axios.delete(`api/slider/${id}`, config)
                    // .then(res => res.json())
                    .then(res => {
                        // alert('Slide Deleted !');
                        this.getSlides();
                        // console.log(res);

                    });
                }
            },
            // Add Slide
            addSlide(){
                // console.log(this.remember_token);
                if(this.edit === false){
                    // Add
                   let vm = this;

                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data',
                            'remember_token' : window.Laravel.remember_token
                             }
                    }

                    let formData = new FormData();
                    formData.append('sourse', this.image);
                    formData.append('title_ar', this.slide.title_ar);
                    formData.append('title_en', this.slide.title_en);
                    formData.append('desc_en', this.slide.desc_en);
                    formData.append('desc_ar', this.slide.desc_ar);
                    // formData.append('type', this.slide.type);

                    axios.post('/api/slider', formData, config)
                        .then(res => {
                            this.getSlides();
                        }).catch(err => console.log(err));

                }else {
                    // Update
                    let vm = this;

                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data',
                            'remember_token' : window.Laravel.remember_token
                        }
                    }

                    let formData = new FormData();
                    formData.append('id', this.slide.id);
                    formData.append('sourse', this.image);
                    formData.append('title_ar', this.slide.title_ar);
                    formData.append('title_en', this.slide.title_en);
                    formData.append('desc_en', this.slide.desc_en);
                    formData.append('desc_ar', this.slide.desc_ar);
                    formData.append('_method', 'PUT');

                    // console.log(this.image);

                    axios.post('/api/slider', formData, config)
                        .then(res => {
                            // vm.success = res.success;
                            // console.log(res);
                            this.getSlides();

                        })
                        .catch(err => console.log(err));

                    this.edit = false;

                }
                // this.resetModal();

            },
            // Edit Slide
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
            // Show Slide
            showSlide(slide){
                this.slide.title_en = slide.title_en;
                this.slide.title_ar = slide.title_ar;
                this.slide.desc_en = slide.desc_en;
                this.slide.desc_ar = slide.desc_ar;
                this.slide.sourse = slide.sourse;
                this.slide.type = slide.type;
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
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
