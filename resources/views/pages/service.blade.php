@extends('layout.main')

@section('content')



<!-- HOME START-->
<section class="bg-home" style="background-image: url({{asset('images/about/about-pic.jpg')}})" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-heading text-center text-white">
                            <h1 class="">{{$service->title_en}}</h1>
                            {{-- <p class="mx-auto">{{$service->desc_en}}</p> --}}
                            <div class="row ">
                                <div class="col-sm-12">
                                    <a href="{{route('serviceOrderForm',$service->id )}}" id="submit" name="send" class="btn btn-buttons btn-radius">Customize Your Order</a>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME END-->

<!-- SERVICE START -->
<section class="section" id="service">
    <div class="container"> 
        <!-- <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3>Service</h3>
                    <div class="spacer-15"></div>
                    <p class="text-muted mb-0">Donec sodales sagittis magna. Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div> -->

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3>Select Single Service</h3>
                    <div class="spacer-15"></div>
                    <p class="text-muted mb-0">Donec sodales sagittis magna. Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="onepage-services mt-4">
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        @forelse ($service->tag as $item)
                            <li class="nav-item">
                                <a class="nav-link active show" id="{{ explode(' ',trim($item->name_en))[0] }}-tab" data-toggle="tab" href="#{{ explode(' ',trim($item->name_en))[0] }}" role="tab" aria-controls="{{ explode(' ',trim($item->name_en))[0] }}" aria-selected="false">

                                    <!-- <div class="onepage-services-icon">
                                        <i class="pe-7s-rocket"></i>
                                    </div> -->
                                    <p class="mb-0 text-uppercase mt-3">{{$item->name_en}}</p>
                                </a>
                            </li>
                        @empty
                            
                        @endforelse
                        <li class="nav-item">
                            <a class="nav-link" id="interior-tab" data-toggle="tab" href="#interior" role="tab" aria-controls="interior" aria-selected="true">
                                <!-- <div class="onepage-services-icon">
                                    <i class="pe-7s-wallet"></i>
                                </div> -->
                                <p class="mb-0 text-uppercase mt-3">app</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="decoration-tab" data-toggle="tab" href="#decoration" role="tab" aria-controls="decoration" aria-selected="false">
                                <!-- <div class="onepage-services-icon">
                                    <i class="pe-7s-light"></i>
                                </div> -->
                                <p class="mb-0 text-uppercase mt-3">app</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="exclusively-tab" data-toggle="tab" href="#exclusively" role="tab" aria-controls="exclusively" aria-selected="false">
                                <!-- <div class="onepage-services-icon">
                                    <i class="pe-7s-crop"></i>
                                </div> -->
                                <p class="mb-0 text-uppercase mt-3">app</p>
                            </a>
                        </li>
                        
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        @forelse ($service->tag as $item)
                            <div class="tab-pane fade bg-dark text-white pb-3 active show" id="{{ explode(' ',trim($item->name_en))[0] }}" role="tabpanel" aria-labelledby="{{ explode(' ',trim($item->name_en))[0] }}-tab">
                                <div class="row justify-content-center p-3">
                                    <div class="col-lg-6">
                                        <div class="interior-services-info mt-4">
                                            <h4>{{$item->name_en}}</h4>
                                            <p class=" mt-4">{{$item->desc_en}}</p>
                                            {{-- <p class="">Pursues or desires to obtain pain of becaus pain but because occasionally undertakes laborious physical exercise advantage from it?</p> --}}
                                            <div class="mt-4">
                                            <a href="{{route('showTagForm', $item->id)}}" class="btn btn-custom">@lang('content.orderNow')</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <div class="onepage-services-img mt-4">
                                            <img src="images/services/img-3.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        @empty
                            
                        @endforelse

                        {{-- <div class="tab-pane fade bg-dark text-white pb-3 active show" id="planning" role="tabpanel" aria-labelledby="planning-tab">
                            <div class="row justify-content-center p-3">
                                <div class="col-lg-6">
                                    <div class="interior-services-info mt-4">
                                        <h4>Responsive Layout</h4>
                                        <p class=" mt-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <p class="">Pursues or desires to obtain pain of becaus pain but because occasionally undertakes laborious physical exercise advantage from it?</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="onepage-services-img mt-4">
                                        <img src="images/services/img-3.jpg" class="img-fluid" alt="">
                                    </div>
                                </div> -->
                            </div>
                        </div> --}}

                        <div class="tab-pane fade bg-dark text-white pb-3" id="interior" role="tabpanel" aria-labelledby="interior-tab">
                            <div class="row justify-content-center p-3">
                                <div class="col-lg-6">
                                    <div class="interior-services-info mt-4">
                                        <h4>Premium Sliders</h4>
                                        <p class=" mt-4">Teachings of the great explorer the master builder of human happiness rejects dislikes or avoids pleasure itself because pleasur but because those pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or circumstances occur which toil and pain procure him some great pleasure take a trivial example which exercise.</p>
                                        <p class="">Pursues or desires to obtain pain of becaus pain but because occasionally undertakes laborious physical exercise advantage from it?</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Order Now</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-6">
                                    <div class="onepage-services-img mt-4">
                                        <img src="images/services/img-4.jpg" class="img-fluid" alt="">
                                    </div>
                                </div> -->

                            </div>
                        </div>

                        <div class="tab-pane fade bg-dark text-white pb-3" id="decoration" role="tabpanel" aria-labelledby="decoration-tab">
                            <div class="row justify-content-center p-3">
                                <div class="col-lg-6">
                                    <div class="interior-services-info mt-4">
                                        <h4>Clean Modern Code</h4>
                                        <p class=" mt-4">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                        <p class="">Pursues or desires to obtain pain of becaus pain but because occasionally undertakes laborious physical exercise advantage from it?</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="onepage-services-img mt-4">
                                        <img src="images/services/img-5.jpg" class="img-fluid" alt="">
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <div class="tab-pane fade bg-dark text-white pb-3" style="" id="exclusively" role="tabpanel" aria-labelledby="exclusively-tab">
                            <div class="row justify-content-center p-3">
                                <div class="col-lg-6">
                                    <div class="interior-services-info mt-4">
                                        <h4>Fast processing</h4>
                                        <p class="mt-4  text-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        <p class="text-white">Pursues or desires to obtain pain of becaus pain but because occasionally undertakes laborious physical exercise advantage from it?</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Order Now</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-6">
                                    <div class="onepage-services-img mt-4">
                                        <img src="images/services/img-6.jpg" class="img-fluid" alt="">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICE END -->

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