@extends('layout.main')

@section('content')




<!--  -->
<section class="section mt-5">
    <div class="container">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-lg-4 col-md-4">

                <!-- Categories widget-->
                <!-- <div class="sidebar p-30">
                    <div class="widget widget_categories">
                        <h4 class="text-uppercase text-center">Categories</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#">Consulting</a> <span class="float-right">(40)</span></li>
                            <li class="mb-2"><a href="#">Finance</a> <span class="float-right">(08)</span></li>
                            <li class="mb-2"><a href="#">Marketing</a> <span class="float-right">(11)</span></li>
                            <li><a href="#">Services</a> <span class="float-right">(21)</span></li>
                        </ul>
                    </div>
                </div> -->
                <!-- Categories widget-->
                <div class="post-preview sidebar my-30">
                    <a href="single-post.html"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                </div>

                
                <div class="m-sidebar">
                    <!-- TAG -->
                    <div class="sidebar p-30">
                        <div class="widget">
                            <h4 class="text-uppercase text-center">Tags</h4>
                            <div class="text-center tagcloud">
                                <a href="#">Consulting</a>
                                <a href="#">Finance</a>
                                <a href="#">Marketing</a>
                                <a href="#">Services</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Fashion</a>
                                <a href="#">Lifestyle</a>
                                <a href="#">Travel</a>
                                <a href="#">Blog</a>
                                <a href="#">Video</a>
                                <a href="#">Audio</a>
                            </div>
                        </div>
                    </div>
                    <!-- TAG -->

                    <!-- Recent Post -->
                    <div class="sidebar p-30">
                        <div class="widget">
                            <h4 class="text-uppercase text-center">Recent Post</h4>
                            <div class="slider single">
                                <div>
                                    <a href="#"><img src="images/blog/blog-1.jpg" class="mx-auto d-block img-fluid" alt="img-missing"></a>
                                    <div class="spacer-15"></div>
                                    <a href="#"><h4 class="pr-2 pl-2">The business woman hard work</h4></a>
                                </div>
                                <div>
                                    <a href="#"><img src="images/blog/blog-2.jpg" class="mx-auto d-block img-fluid" alt="img-missing"></a>
                                    <div class="spacer-15"></div>
                                    <a href="#"><h4 class="pr-2 pl-2">Business adviser analyzing financial</h4></a>
                                </div>
                                <div>
                                    <a href="#"><img src="images/blog/blog-3.jpg" class="mx-auto d-block img-fluid" alt="img-missing"></a>
                                    <div class="spacer-15"></div>
                                    <a href="#"><h4 class="pr-2 pl-2">The progress work of the company</h4></a>
                                </div>
                                <div>
                                    <a href="#"><img src="images/blog/blog-4.jpg" class="mx-auto d-block img-fluid" alt="img-missing"></a>
                                    <div class="spacer-15"></div>
                                    <a href="#"><h4 class="pr-2 pl-2">Various Sources of Expand Business</h4></a>
                                </div>
                                <div>
                                    <a href="#"><img src="images/blog/blog-5.jpg" class="mx-auto d-block img-fluid" alt="img-missing"></a>
                                    <div class="spacer-15"></div>
                                    <a href="#"><h4 class="pr-2 pl-2">How to Maintain Your Business?</h4></a>
                                </div>
                                <div>
                                    <a href="#"><img src="images/blog/blog-6.jpg" class="mx-auto d-block img-fluid" alt="img-missing"></a>
                                    <div class="spacer-15"></div>
                                    <a href="#"><h4 class="pr-2 pl-2">Discussion Business Meeting</h4></a>
                                </div>
                                <div>
                                    <a href="#"><img src="images/blog/blog-7.jpg" class="mx-auto d-block img-fluid" alt="img-missing"></a>
                                    <div class="spacer-15"></div>
                                    <a href="#"><h4 class="pr-2 pl-2">Analysis of Last Year Financial Report</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>                                
                    <!-- Recent Post -->
                </div>

            </div>
            <!-- SIDEBAR -->

            <!-- BLOG POST START -->
            <div class="col-md-8">
                <!-- Post Start -->
                <article class="post m-0">
                    <!-- <div class="post-preview">
                        <a href="single-post.html"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div> -->

                    <div class="post-header">
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Photography</small></a></li>
                        </ul>
                        
                        <div class="post-content">
                            <p class="mb-0">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. </p>
                        </div>

                        <div class="post-content">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment.</p>
                        </div>

                        <div class="post-content">                                
                            <blockquote class="font-italic">I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam</blockquote>
                        </div>
                        
                        <div class="post-content">
                            <p>The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds contains a series of real Latin words. </p>
                        </div>
                    </div>
                </article>                                              
                <!-- Post End -->
            </div>
        </div>
    </div>
</section>
<!--  -->

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

@endsection