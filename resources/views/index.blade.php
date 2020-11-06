@extends('layout.main')

@section('content')




<section class="bg-dark" id="home">
    <div class=" bg-banner" style="background-image: url({{asset('images/svg/banner-01.svg')}});"> 
        <div class="owl-carousel text-white " id="owl-demo">
            @forelse ($slider as $item)
                <div class="item" >
                    <div class="banner-img">
                        <img src="{{ asset($item->sourse)}}" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="banner-text">
                        <!-- <div class="bg-svg" style="background-image: url('images/svg/banner-bg.svg');"></div> -->
                        <div class="banner-content p-4">
                            <h4 class="color-blue font-22">{{ $item->title_en}}</h4>
                            <p  class="mx-3">{{ $item->desc_en}}</p>
                        </div>
                    </div>

                </div>
            @empty

            @endforelse

            {{-- <div class="item">
                <div class="banner-img">
                    <img src="./images/client/img-6.jpg" class="img-fluid" alt="" srcset="">
                </div>
                <div class="banner-text bg-svg">
                    <!-- <div class="bg-svg" style="background-image: url('images/svg/banner-bg.svg');"></div> -->
                    <div class="banner-content p-4">
                        <h2 class="color-blue">Move Digatal At Ease</h2>
                        <p  class="mx-3">Lorem ipsum dolor sit, amet consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque neque porro corporis debitis deserunt voluptates excepturi quod eos repellat natus eum, tempore sit! Excepturi rem consequuntur veniam aliquid placeat.</p>
                    </div>
                </div>

            </div>
            <div class="item">
                <div class="banner-img">
                    <img src="./images/about/about-two-img.jpg" class="img-fluid" alt="" srcset="">
                </div>
                <div class="banner-text p-2">
                    <h2>title</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur.</p>
                </div>
            </div>
            <div class="item">
                <div class="banner-img">
                    <img src="./images/about/about-img-three.jpg" class="item img-fluid" alt="" srcset="">
                </div>
                <div class="banner-text p-2">
                    <h2>title</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur.</p>
                </div>
            </div>
            <div class="item">
                <img src="./images/about/about-pic.jpg" class="item img-fluid one-slide" alt="" srcset="">
            </div>

            <div class="item">
                <div class="banner-img">
                    <video class="item" autoplay loop muted >
                        <source src="./images/videos/video.mp4"
                                type="video/mp4">
                    </video>
                </div>
                <div class="banner-text p-2">
                    <h2>title</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur.</p>
                </div>
            </div>

            <div class="item">
                <video class="one-slide" autoplay loop muted>

                    <!-- <source src="/media/cc0-videos/flower.webm"
                            type="video/webm"> -->

                    <source src="./images/videos/video.mp4"
                            type="video/mp4" >

                </video>
            </div> --}}

        </div>
    </div> 
</section>

<!-- ABOUT US START -->
<section class="section bg-white pt-5" id="service"
{{-- data-aos="fade-up-right"
data-aos-duration="1000"
data-aos-delay="100" --}}
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3 class="sliding-line">@lang('content.whatWeDo') <span class="color-blue font-30">?</span></h3>
                    <div class="spacer-15"></div>
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($service as $item)
            <div class="sm-my-3 col-lg-4 col-md-6 col-sm-12 py-2 service radius d-flex justify-content-center align-items-center">
                <div class="my-2">
                    <a href="{{ route('service', $item->id)}}">
                        <div class="service-img text-center" >
                            <img src="{{asset($item->image)}}" class="img-fluid" alt="sevice img" srcset="">
                        </div>
                    </a>
                    <div class="service-text">
                        <a href="{{ route('service', $item->id)}}"><h2 class="text-center color-dark font-22 my-2">{{ $item->title_en}}</h2></a>
                        <p class="two-lines">{{ $item->desc_en}}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('serviceOrderForm',$item->id )}}" class="btn-service">@lang('content.orderNow')</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

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
                    @forelse ($clint as $item)
                <div><img src="{{asset($item->logo)}}" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    @empty

                    @endforelse
                    {{-- <div><img src="images/client/partner-1.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-2.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-3.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-4.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-5.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-1.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-2.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-3.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-4.png" class="mx-auto d-block img-fluid" alt="img-missing"></div>
                    <div><img src="images/client/partner-5.png" class="mx-auto d-block img-fluid" alt="img-missing"></div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CLIENTS END -->

<!-- BLOG START -->
<section class="section bg-light" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3 class="sliding-line">@lang('content.blog')</h3>
                    {{-- <div class="spacer-15"></div> --}}
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($blogs as $item)
            <div class="col-md-4">
                <article class="post bg-white mt-30">
                    <div class="post-preview">
                        <a href="{{route('article', $item->id)}}"><img src="images/blog/blog-1.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                    </div>

                    <div class="post-header">
                        <h4 class="post-title"><a href="{{route('article', $item->id)}}"> {{$item->title_en}}</a></h4>
                        <ul class="post-meta">
                            <li><i class="mdi mdi-calendar"></i> <small>{{\Carbon\Carbon::parse($item->created_at)->format('M  d,yy') }}</small></li>
                            <li><i class="mdi mdi-tag-text-outline"></i>
                                <a href="{{route('blogByTag',$item->tag->id )}}"> <small>{{$item->tag->name_en}}</small></a></li>
                        </ul>

                        <div class="post-content">
                            <p class="two-lines">{{$item->desc_en }}</p>
                        </div>

                        <span class="bar"></span>

                        <div class="post-footer text-center">
                            <div class="post-more"><a href="{{ route('article', $item->id) }}">@lang('content.readMore')</a></div>
                        </div>
                    </div>
                </article>
            </div>
            @empty

            @endforelse

        </div>

        <div class="row justify-content-center mt-5">
            <a href="{{ route('blog') }}" class="btn btn-buttons btn-radius btn-visit-blog">@lang('content.visitBlog')</a>
        </div>
    </div>

</section>
<!-- BLOG END -->

<!-- ORDER FORM -->
<section class="section bg-light pt-0" >
    <div class="row d-flex aligm-items-center justify-content-center mx-0 w-100" data-jarallax='{"speed": 0.2}' style="background-image: url('images/blog/blog-4.jpg');width:100vw;">
        <div class="bg-overlay"></div>

        <div class="col-md-6 col-sm-12 px-0 bg-dark">
            <div class="call-back-cta mt-sm-30">
                <h3 class="text-white mx-4 my-3">Move Digital At Ease</h3>
                <div class="p-30 m-4" id="contact-form">

                    {{-- <div id="message"></div> --}}
                    <form method="post" action="{{route('serviceRequest')}}" name="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="@lang('content.yourName')">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="@lang('content.yourEmail')">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="phone" id="phone" class="form-control" placeholder="@lang('content.yourPhone')">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <label for="" class=" text-white">@lang('content.chooseService')</label>
                                    <select class="order-multiple-services form-control" id="id_label_single" name="tags[]" multiple="multiple">
                                        @forelse ($service as $item)
                                            <optgroup label="{{$item->title_en}}">
                                                @forelse ($item->tag as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name_en}}</option>
                                                @empty

                                                @endforelse

                                            </optgroup>
                                        @empty

                                        @endforelse

                                      </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <input type="submit" id="submit" name="send" class="btn btn-buttons btn-radius" value="@lang('content.orderNow')">
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
                    <h3>@lang('content.getInTouch')</h3>
                    <div class="spacer-15"></div>
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="m-auto mt-30 ">
                    <p class="text-center">
                        Khartoum, Arkaweet, Eastern Child City
                    </p>
                    <div class="map-icon-container">
                        <div class="map-icon text-center mt-30">
                            <a href="http://maps.google.com/?q=EASE group، أركويت، الخرطوم،، Sudan" target="_blank">
                                <i class="fas fa-map-marker-alt" style="color: red;"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="custom-form mt-30">
                    <div id="message"></div>
                    <form method="post" action="{{route('contactForm')}}" name="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="@lang('content.yourName') :">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="@lang('content.yourEmail') :">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="subject" id="subject" class="form-control" placeholder="@lang('content.subject') :">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <textarea name="message" id="comments" rows="3" class="form-control" placeholder="@lang('content.message') :"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <input type="submit" id="submit" name="send" class="btn btn-buttons btn-radius" value="@lang('content.sendMessage')">
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

<!-- SCRIPTS -->
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
        });
    });
</script>

@endsection
