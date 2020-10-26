@extends('layout.main')

@section('content')



 <!-- COUNTER START -->
 <section class="bg-counter" style="background-image: url('images/home/bg-home-8.jpg');display:none;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row" id="counter">
            <div class="col-lg-3 col-md-3">
                <div class="text-center counter-funfact p-4 mt-3 text-white">
                    <i class="pe-7s-wristwatch counter-icon"></i>
                    <h2 class="counter-value" data-count="654">4</h2>
                    <p class="counter-name mb-0">Working Hours</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="text-center counter-funfact p-4 mt-3 text-white">
                    <i class="pe-7s-note2 counter-icon"></i>
                    <h2 class="counter-value" data-count="640">10</h2>
                    <p class="counter-name mb-0">Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="text-center counter-funfact p-4 mt-3 text-white">
                    <i class="pe-7s-users counter-icon"></i>
                    <h2 class="counter-value" data-count="238">201</h2>
                    <p class="counter-name mb-0">Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="text-center counter-funfact p-4 mt-3 text-white">
                    <i class="pe-7s-wine counter-icon"></i>                      
                    <h2 class="counter-value" data-count="532">2</h2>
                    <p class="counter-name mb-0">Tea Cup</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COUNTER END -->



<!-- BLOG START -->
<section class="section bg-light" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <!-- <h3>Our Blog</h3> -->
                    <div class="spacer-15"></div>
                    <!-- <p class="text-muted mb-0">Donec sodales sagittis magna. Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p> -->
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($blog as $item)
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-1.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#"> {{$item->title_en}}</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>{{\Carbon\Carbon::parse($item->created_at)->format('M  d,yy') }}</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>{{$item->tag->name_en}}</small></a></li>
                        </ul>

                        <div class="post-content">
                            <p class="two-lines">{{$item->desc_en }}</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="{{ route('article', $item->id) }}">Read More</a></div>
                        </div>
                    </div>
                </article>
            </div>
            @empty
                
            @endforelse
            
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-2.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">Business adviser analyzing financial</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Media</small></a></li>
                        </ul>
                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More 
                                <!-- <i class="mdi mdi-arrow-right"></i> -->
                            </a></div>
                        </div>
                    </div>
                </article>
            </div>
                
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">The progress work of the company</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Tree</small></a></li>
                        </ul>

                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More
                                 <!-- <i class="mdi mdi-arrow-right"></i> -->
                                </a></div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-2.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">Business adviser analyzing financial</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Media</small></a></li>
                        </ul>
                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More 
                                <!-- <i class="mdi mdi-arrow-right"></i> -->
                            </a></div>
                        </div>
                    </div>
                </article>
            </div>
                
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">The progress work of the company</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Tree</small></a></li>
                        </ul>

                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More
                                 <!-- <i class="mdi mdi-arrow-right"></i> -->
                                </a></div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-2.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">Business adviser analyzing financial</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Media</small></a></li>
                        </ul>
                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More 
                                <!-- <i class="mdi mdi-arrow-right"></i> -->
                            </a></div>
                        </div>
                    </div>
                </article>
            </div>
                
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">The progress work of the company</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Tree</small></a></li>
                        </ul>

                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More
                                 <!-- <i class="mdi mdi-arrow-right"></i> -->
                                </a></div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-2.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">Business adviser analyzing financial</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Media</small></a></li>
                        </ul>
                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More 
                                <!-- <i class="mdi mdi-arrow-right"></i> -->
                            </a></div>
                        </div>
                    </div>
                </article>
            </div>
                
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#">The progress work of the company</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Tree</small></a></li>
                        </ul>

                        <div class="post-content">
                            <p class="text-muted two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <!-- <div class="likes">
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-heart mr-1"></i> <small>29</small></a></li>
                                    <li><a href="#"> <i class="far fa-comment mr-1"></i>
                                         <small>40</small></a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="post-more"><a href="#">Read More
                                 <!-- <i class="mdi mdi-arrow-right"></i> -->
                                </a></div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        {{ $blog->links() }}    
        
        <!-- Pagination-->
        <div class="row row-paginate mt-4">
            <div class="col-sm-12">
                <ul class="pagination justify-content-center">
                    <li class="next"><a href="#"><i class="fas fa-caret-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="prev"><a href="#"><i class="fas fa-caret-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Pagination end-->
    </div>
    
</section>
<!-- BLOG END -->


@endsection