<template>
    <div class="row justify-content-center">
        <!-- Modal -->
            <div class="row justify-content-center">
                    <div class="col-lg-10 mt-3 d-flex justify-content-between">       
                        <!-- <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-plus"></i> New Article</button> -->
                        <div class="modal fade bd-example-modal-lg">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">New Slide</h5>
                                        <button type="button" class="close" data-dismiss="modal"><code>&times;</code></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!-- Textual inputs start -->
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="text-muted font-14 mb-3">The <code>*</code> endicates an optional input</p>
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="col-form-label">Title ar <code>*</code></label>
                                                            <input class="form-control" type="text" value="" id="example-text-input1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="col-form-label">Title en <code>*</code></label>
                                                            <input class="form-control" type="text" value="" id="example-text-input2">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-email-input" class="col-form-label">Description ar <code>*</code></label>
                                                            <textarea name="" id="example-email-input" class="form-control" cols="30" rows="4"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-email-input" class="col-form-label">Description en <code>*</code></label>
                                                            <textarea name="" id="example-email-input" class="form-control" cols="30" rows="4"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-email-input" class="col-form-label d-block">Video or Image</label>
                                                            <input type="file" class="col-form-label">
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
                        <div class="d-flex justify-content-between">
                        <h4 class="header-title">Sliders</h4>
                        <button class="btn btn-rounded btn-primary my-3 py-2 pr-4 pl-3" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class="ti-plus mr-1"></i> Add Slider</button>
                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <!-- <th scope="col">ID</th> -->
                                            <th scope="col">Title</th>
                                            <!-- <th scope="col">Description</th> -->
                                            <!-- <th scope="col">Image</th> -->
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>Mark</td>
                                            <!-- <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis autem debitis deserunt quidem repellendus maiores, error molestias quasi blanditiis?</td> -->
                                            <!-- <td><img src="./assets/images/bg/singin-bg.jpg" class="table-img" alt=""></td> -->
                                            <td>
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" class="text-primary" data-toggle="modal" data-target=".show-slide-details-modal"><i class="ti-eye"></i></a></li>
                                                    <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>Mark</td>
                                            <!-- <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis autem debitis deserunt quidem repellendus maiores, error molestias quasi blanditiis?</td> -->
                                            <!-- <td><img src="./assets/images/bg/singin-bg.jpg" class="table-img" alt=""></td> -->
                                            <td>
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>Mark</td>
                                            <!-- <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis autem debitis deserunt quidem repellendus maiores, error molestias quasi blanditiis?</td> -->
                                            <!-- <td><video src="./assets/images/video/video.mp4" controls  class="table-img"></video></td> -->
                                            <td>
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr v-for="slide in slides" :key="slide.id" >
                                            <td >{{slide.title_en}}</td>
                                            <td>
                                                <ul class="d-flex justify-content-center align-items-center">
                                                    <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
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
                slides: [],
                slide: {
                    id: '',
                    title_en: '',
                    title_ar: '',
                    desc_en: '',
                    desc_ar: '',
                    sourse: '',
                    type: 0,
                },
                slide_id: '',
                pagination: {},
                edit: false,
            }
        },

        created() {
            this.getSlides()
        },

        methods: {
            getSlides() {
                fetch('api/slider')
                .then(res => res.json())
                .then(res => {
                    this.slides = res.data
                }
                    // console.log(res.data)
                )
                .catch(err => console.log(err));
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
