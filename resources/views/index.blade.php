@extends('layout.main')

@section('content')



<section class="bg-dark" id="home">
    <!-- <h2 class="text-center mb-4">
        Slider Test
    </h2> -->
    <!-- <div class="container"> -->
        <div class="owl-carousel text-white" id="owl-demo">
            <div class="item">
                <div class="banner-img">
                    <img src="./images/about/about-pic.jpg" class="img-fluid" style="width: 100%;height:90vh;" alt="" srcset="">
                </div>
                <div class="banner-text">
                    <div class="bg-svg" style="background-image: url('images/svg/svg2.svg');"></div>
                    <div class="banner-content p-4">
                        <h2>Move Digatal At Ease</h2>
                        <p  class="mx-3">Lorem ipsum dolor sit, amet consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque neque porro corporis debitis deserunt voluptates excepturi quod eos repellat natus eum, tempore sit! Excepturi rem consequuntur veniam aliquid placeat.</p>
                    </div>
                </div>
                
            </div>
            <div class="item">
                <div class="banner-img">
                    <img src="./images/about/about-two-img.jpg" class="img-fluid" style="width: 100%;height:90vh;" alt="" srcset="">
                </div>
                <div class="banner-text p-2">
                    <h2>title</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur.</p>
                </div>
            </div>
            <div class="item">
                <div class="banner-img">
                    <img src="./images/about/about-img-three.jpg" class="item img-fluid" style="width: 100%;height:90vh;" alt="" srcset="">
                </div>
                <div class="banner-text p-2">
                    <h2>title</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur.</p>
                </div>
            </div>
            <div class="item">
                <img src="./images/about/about-pic.jpg" class="item img-fluid" style="width: 100%;height:90vh;" alt="" srcset="">
            </div>

            <div class="item">
                <div class="banner-img">
                    <video class="item" autoplay loop muted style="width: 50vw;height:90vh;">
                        <source src="./images/videos/video.mp4"
                                type="video/mp4" style="width: 100%;height:90vh;">
                    </video>
                </div>
                <div class="banner-text p-2">
                    <h2>title</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur.</p>
                </div>
            </div>
            
            <div class="item">
                <video autoplay loop muted style="width: 100vw;height:90vh;">

                    <!-- <source src="/media/cc0-videos/flower.webm"
                            type="video/webm"> -->
                
                    <source src="./images/videos/video.mp4"
                            type="video/mp4" style="width: 100vw;height:90vh;">
                
                </video>
            </div>

        </div>
    <!-- </div> -->
</section>

<!-- ABOUT US START -->
<section class="section bg-white" id="service" 
{{-- data-aos="fade-up-right"
data-aos-duration="1000" 
data-aos-delay="100" --}}
>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 service d-flex justify-content-center align-items-center">
                <div class="my-2">
                    <div class="service-img text-center" >
                        <!-- <img src="./images/about/about-page.jpg" class="img-fluid" alt="sevice img" srcset=""> -->
                        <!-- <i class=""></i> -->
                        <i class=" fas fa-adjust display-1"></i>
                    </div>
                    <div class="service-text">
                        <a href="\service"><h2 class=" text-center">Service Title</h2></a>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur laboriosam odio doloremque ab sapiente dicta qui ad dolores numquam fugiat.</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn-service">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 service">
                <div class="">
                    <div class="service-img ">
                        <img src="./images/about/about-page.jpg" class="img-fluid" alt="sevice img" srcset="">
                    </div>
                    <div class="service-text">
                        <a href="service.html"><h2 class=" text-center">Service Title</h2></a>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur laboriosam odio doloremque ab sapiente dicta qui ad dolores numquam fugiat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 service">
                <div class="service-img ">
                    <img src="./images/about/about-page.jpg" class="img-fluid" alt="sevice img" srcset="">
                </div>
                <div class="service-text">
                    <a href="service.html"><h2 class=" text-center">Service Title</h2></a>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur laboriosam odio doloremque ab sapiente dicta qui ad dolores numquam fugiat.</p>
                </div>
            </div>
        </div>
    </div>
   
</section>
<!-- ABOUT US END -->


<!-- CLIENTS START -->
<section class="section bg-dark" id="client"
data-aos="fade-up"
data-aos-anchor-placement="top-bottom"
> 
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="slider autoplay">
                    <div><img src="images/client/partner-1.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-2.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-3.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-4.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-5.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-1.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-2.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-3.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-4.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-5.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CLIENTS END -->


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

<!-- SUBSCRIBE START -->
<section class="">
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <h5 class="text-center text-uppercase">Subscribe To Get In Touch</h5>
                <div class="spacer-15"></div>
                <p class="text-muted text-center">Tell us about your project story and project brief</p>
                <div class="text-center subcribe-form">
                    <form action="#">
                        <input name="email" type="email" placeholder="Email" id="email2" required="">
                        <button type="submit" class="btn btn-custom">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</section>
<!-- SUBSCRIBE END -->

<!-- BLOG START -->
<section class="section bg-light" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3 class="sliding-line">Our Blog</h3>
                    <div class="spacer-15"></div>
                    <!-- <p class="text-muted mb-0">Donec sodales sagittis magna. Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p> -->
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="#"><img src="images/blog/blog-1.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="#"> The business woman hard work</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="#"> <small>Branding</small></a></li>
                        </ul>

                        <div class="post-content">
                            <p class="two-lines">These cases are perfectly simple and easy to distinguish. In a free hour, when nothing prevents our being able to do what we like best.</p>
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
                            <div class="post-more"><a href="#">Read More</a></div>
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

        <div class="row justify-content-center mt-5">
            <a href="\blog" class="btn btn-buttons btn-radius btn-visit-blog">Visit Blog</a>
        </div>
    </div>
    
</section>
<!-- BLOG END -->

<!-- ORDER FORM -->
<section class="section bg-light pt-0" >
    <div class="row d-flex aligm-items-center justify-content-center" data-jarallax='{"speed": 0.2}' style="background-image: url('images/blog/blog-4.jpg');width:100vw;">
        <div class="bg-overlay"></div>

        <div class="col-md-6 col-sm-12 px-0 bg-dark">
            <div class="call-back-cta mt-sm-30">
                <h3 class="text-white mx-4 my-3">Move Digital At Ease</h3>
                <div class="contact-form p-30 m-4">

                    <div id="message"></div>
                    <form method="post" action="" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <label for="" class=" text-white">Choose Service</label>
                                    <select class="order-multiple-services form-control" id="id_label_single" name="states[]" multiple="multiple">
                                        <optgroup label="Web&App">
                                            <option>Web</option>
                                            <option>App</option>
                                        </optgroup>
                                        <optgroup label="Odoo">
                                            <option>odoo</option>
                                            <option>odoo</option>
                                        </optgroup>
                                      </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <input type="submit" id="submit" name="send" class="btn btn-buttons btn-radius" value="Continue">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 m-auto">
            <h3 class="slogan"></h3>
        </div>
        
    </div>
</section>

<!-- ORDER FORM END -->

<!-- CONTACT START -->
<section class="section bg-light pt-0" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3>Get In Touch</h3>
                    <div class="spacer-15"></div>
                    <!-- <p class="text-muted mb-0">Donec sodales sagittis magna. Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p> -->
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="m-auto mt-30 ">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, corporis voluptatibus dolorem a aut nemo quam earum est molestiae! Unde!
                    </p>
                    <div class="map-icon-container">
                        <div class="map-icon text-center mt-30">
                            <a href="http://maps.google.com/?q=1200 Pennsylvania Ave SE, Washington, District of Columbia, 20003" target="_blank">
                                <i class="fas fa-map-marker-alt" style="color: red;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" style="border: 0" allowfullscreen></iframe> -->
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="custom-form mt-30">
                    <div id="message"></div>
                    <form method="post" action="" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name :">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="subject" id="subject" class="form-control" placeholder="Your subject :">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Enter message :"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <input type="submit" id="submit" name="send" class="btn btn-buttons btn-radius" value="Send Message">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

  
    </div>
</section>
<!-- CONTACT END -->


@endsection