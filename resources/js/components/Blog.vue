<template>
    <div>
    <!-- Modal -->
        <div class="row justify-content-center">
            <div class="modal fade bd-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Article</h5>
                            <button type="button" class="close" data-dismiss="modal"><code>&times;</code></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <!-- Textual inputs start -->
                                <div class="col-12">
                                    <div class="card  p-0">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Article Title <b>( ar )</b></label>
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Article Title <b>( en )</b></label>
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label">Article <b>( ar )</b></label>
                                                <textarea name="" id="example-email-input" class="form-control" cols="30" rows="4"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label">Article <b>( en )</b></label>
                                                <textarea name="" id="example-email-input" class="form-control" cols="30" rows="4"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label d-block">Article Image</label>
                                                <input type="file" class="col-form-label">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label d-block">Article Tag</label>
                                                <select name="" id="" class="form-control">
                                                    <optgroup>Web & App Development</optgroup>
                                                    <option value="">Web Development</option>
                                                    <option value="">Android Development</option>
                                                    <option value="">IOS Development</option>
                                                    
                                                    <optgroup>Web & App Development</optgroup>
                                                    <option value="">Web Development</option>
                                                    <option value="">Android Development</option>
                                                    <option value="">IOS Development</option>
                                                    
                                                    <optgroup>Web & App Development</optgroup>
                                                    <option value="">Web Development</option>
                                                    <option value="">Android Development</option>
                                                    <option value="">IOS Development</option>
                                                </select>
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
    <!-- End Modal -->

    <!-- Blog Start -->    
    <div class="row justify-content-center">
        
        <div class="col-lg-10 mt-3 d-flex justify-content-between">
            <h3>Blog Articles</h3>
        </div>
        <div class="col-lg-10 mt-3 d-flex justify-content-between">
            <!-- <h3>Blog Articles</h3> -->
            <nav aria-label="page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]" >
                        <a href="#" class="page-link" @click="getArticles(pagination.prev_page_url)">Previous</a>
                    </li>

                    <li class="page-item disabled">
                        <a href="#" class="page-link text-dark">
                            Page {{pagination.current_page}} of {{pagination.last_page}}
                        </a>
                    </li>

                    <li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]">
                        <a href="#" class="page-link" @click="getArticles(pagination.next_page_url)">Next</a>
                    </li>
                </ul>
            </nav>
            <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-plus"></i> New Article</button>
        </div>
    </div>
    <div class="row justify-content-center" v-for="article in blog" :key="article.id">
        <div class="col-lg-10 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-2">
                        <img class="img-card mr-md-4" :src="article.image_full_path" alt="image">
                        <div class="media-body">
                            <h4 class="mb-2 md-mt-2">{{article.title_en}}</h4>
                            <div class="row mb-3"><span class="col-lg-3 col-sm-6 font-italic"><b>Tag: &ThickSpace;</b ><span class="badge badge-pill badge-info p-1"> {{article.tag.name_en}}</span></span> <span class="col-lg-3 col-sm-6 font-italic"><b>Date:&ThickSpace; </b> {{article.created_at}}</span></div>
                            <p>{{article.desc_en}}</p>
                            <div class="row mt-3 ml-1"><a href="javascript:void(0);" class="btn btn-rounded btn-outline-warning py-1 px-4 mr-4" data-toggle="modal" data-target=".bd-example-modal-lg"><i  class="fa fa-edit"></i></a><a href="javascript:void(0);" class="btn btn-rounded btn-outline-danger py-1 px-4"><i  class="ti-trash"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->    

    </div>
</template>

<script>
    // import 'axios' from axios;
    export default {
        data() {
            return {
                blog: [],
                article: {
                    // id: '',
                    title_en: '',
                    title_ar: '',
                    desc_en: '',
                    desc_ar: '',
                    image_full_path: null,
                    created_at: '',
                    tag: {},
                },
                tag: {
                    id: '',
                    name_en: '',
                },
                article_id: '',
                pagination: {},
                edit: false,
            }
        },

        created() {
            this.getArticles()
        },

        methods: {
            getArticles(page_url) {
                let vm = this;
                page_url = page_url || 'api/blog';
                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.blog = res.data;
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

                console.log(this.pagination);


            },
            // Delete Slide
            deleteSlide(id){
                if(confirm('Are You Sure ?')){
                    fetch(`api/blog/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(res => {
                        alert('Slide Deleted !');
                        this.getArticles();
                        // console.log(res);

                    });
                }
            },
            // Add Slide
            addSlide(){
                if(this.edit === false){
                    // Add 
                    fetch('api/blog', {
                        method: 'post',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(res => {
                        // console.log(res);
                        
                        // this.resetModal();                        
                        // alert('Slide Added !');
                        this.getArticles();
                        // console.log(res);
                    })
                    .catch(err => console.log(err));
                    
                }else {
                    // Update
                    fetch('api/blog', {
                        method: 'put',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(res => {
                        // console.log(res);

                        // this.resetModal();                        
                        // alert('Slide Added !');
                        this.getArticles();
                        // console.log(res);
                    })
                    .catch(err => console.log(err));
                    this.edit = false;

                }
                this.resetModal();                        

            },
            editSlide(article){
                this.edit = true;
                this.article.id = article.id;
                this.article.article_id = article.id;
                this.article.title_en = article.title_en;
                this.article.title_ar = article.title_ar;
                this.article.desc_en = article.desc_en;
                this.article.desc_ar = article.desc_ar;
                this.article.sourse = article.sourse;


            },
            // File Handle
            selectFile(event) {
                // `files` is always an array because the file input may be in multiple mode
                this.sourse = event.target.files[0];
                // console.log(this.sourse);
            },

            resetModal() {
                this.article.title_en = '';
                this.article.title_ar = '';
                this.article.desc_en = '';
                this.article.desc_ar = '';
                this.article.sourse = null;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
