<template>
    <div>
    <!-- Modal -->
        <div class="row justify-content-center">
            <div class="modal fade bd-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Article</h5>
                            <button type="button" class="close" data-dismiss="modal" @click="resetModal()"><code>&times;</code></button>
                        </div>
                        <form @submit.prevent="addArticle" enctype="multipart/form-data">

                        <div class="modal-body">
                            <div class="row">
                                <!-- Textual inputs start -->
                                <div class="col-12">
                                    <!-- <div class="card  p-0"> -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Article Title <b>( ar )</b></label>
                                                <input class="form-control" type="text" v-model="article.title_ar">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Article Title <b>( en )</b></label>
                                                <input class="form-control" type="text" v-model="article.title_en">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label">Article <b>( ar )</b></label>
                                                <textarea name=""  class="form-control" cols="30" rows="4" v-model="article.desc_ar"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label">Article <b>( en )</b></label>
                                                <textarea name=""  class="form-control" cols="30" rows="4" v-model="article.desc_en"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label d-block">Article Image</label>
                                                <input type="file" class="col-form-label" @change="selectFile">
                                            </div>
                                            <input type="text" hidden :value="article.edit ? article.created_at : ''">
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label d-block">Article Tag</label>
                                                <select id="example-email-input" class="form-control" v-model='article.tag_id'>
                                                
                                                    <option v-for="tag in tags" :key="tag.id" v-bind:value="tag.id">{{tag.name_en}}</option>
                                                </select>
                                            </div>

                                        </div>
                                    <!-- </div> -->
                                </div>
                                <!-- Textual inputs end -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning mt-4 py-2 px-4" data-dismiss="modal" @click="resetModal()">Close</button>
                            <button type="submit" class="btn btn-primary mt-4 py-2 px-4">Submit</button>
                        </div>

                        </form>
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
            <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" @click="getSetTags()"><i class="ti-plus"></i> New Article</button>
        </div>
    </div>
    <div class="row justify-content-center" v-for="article in articles" :key="article.id">
        <div class="col-lg-10 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-2">
                        <img class="img-card mr-md-4" :src="article.image" alt="image">
                        <div class="media-body">
                            <h4 class="mb-2 md-mt-2">{{article.title_en}}</h4>
                            <div class="row mb-3">
                                <span class="col-lg-3 col-sm-6 font-italic">
                                    <b>Tag: &ThickSpace;</b >
                                    <span class="badge badge-pill badge-info p-1"> {{article.tag.name_en}}</span>
                                </span> 
                                <span class="col-lg-3 col-sm-6 font-italic">
                                    <b>Date:&ThickSpace; </b> ${{article.created_at }}
                                    <!-- {{Carbon:parse(article->created_at)->format('M  d,yy') }} -->
                                </span>
                            </div>
                            <p>{{article.desc_en}}</p>
                            <div class="row mt-3 ml-1">
                                <a href="#" class="btn btn-rounded btn-outline-warning py-1 px-4 mr-4" data-toggle="modal" data-target=".bd-example-modal-lg" @click="editArticle(article)"><i  class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-rounded btn-outline-danger py-1 px-4" @click="deleteArticle(article.id)"><i  class="ti-trash"></i></a>
                            </div>
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
                articles: [],
                article: {
                    // id: '',
                    title_en: '',
                    title_ar: '',
                    desc_en: '',
                    desc_ar: '',
                    image: null,
                    created_at: '',
                    tag_id: '',
                },
                tags: [],
                tag: {
                    id: '',
                    name_en: '',
                },
                // selected_tags: [],
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
                    this.articles = res.data;
                    vm.makePagination(res.current_page, res.last_page, res.next_page_url, res.prev_page_url)
                    console.log(res.data);

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
            // Delete Article
            deleteArticle(id){
                if(confirm('Are You Sure ?')){
                    fetch(`api/blog/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(res => {
                        alert('Article Deleted !');
                        this.getArticles();
                        // console.log(res);

                    });
                }
            },
            // Add Article
            addArticle(){
                if(this.edit === false){
                    // Add 
                    let vm = this;
 
                    const config = {
                        headers: { 'content-type': 'multipart/form-data' }
                    }
    
                    let formData = new FormData();
                    formData.append('image', this.image);
                    formData.append('title_ar', this.article.title_ar);
                    formData.append('title_en', this.article.title_en);
                    formData.append('desc_en', this.article.desc_en);
                    formData.append('desc_ar', this.article.desc_ar);
                    formData.append('tag_id', this.article.tag_id);
    
                    axios.post('/api/blog', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getArticles();

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
                    formData.append('title_ar', this.article.title_ar);
                    formData.append('title_en', this.article.title_en);
                    formData.append('desc_en', this.article.desc_en);
                    formData.append('desc_ar', this.article.desc_ar);
                    // formData.append('type', this.article.type);
    
                    axios.put('/api/blog', formData, config)
                        .then(res => {
                            vm.success = res.success;
                            // console.log(res);
                            this.getArticles();

                        })
                        .catch(err => console.log(err));
                    
                    this.edit = false;
                }
                // this.resetModal();                        

            },
            // Edit Article
            editArticle(article){
                this.edit = true;
                this.article.id = article.id;
                this.article.article_id = article.id;
                this.article.title_en = article.title_en;
                this.article.title_ar = article.title_ar;
                this.article.desc_en = article.desc_en;
                this.article.desc_ar = article.desc_ar;
                this.article.image = article.image;
                this.article.tag_id = article.tag_id;
                this.article.created_at = article.created_at;
                this.getSetTags();
            },
            // Get and Set Tags
            getSetTags(){
                fetch('api/tag-names')
                .then(res => res.json())
                .then(res => {
                    console.log(res);

                    this.tags = res;
                })
                
            },

            // File Handle
            selectFile(event) {
                // `files` is always an array because the file input may be in multiple mode
                this.image = event.target.files[0];
            },

            resetModal() {
                this.article.title_en = '';
                this.article.title_ar = '';
                this.article.desc_en = '';
                this.article.desc_ar = '';
                this.article.image = null;
                this.article.tag_id = '';
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
