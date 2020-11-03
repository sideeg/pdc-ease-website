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
                            <h1 class="service-header">{{$service->title_en}}</h1>
                            <div class="row ">
                                <div class="col-sm-12">
                                    <a href="{{route('serviceOrderForm',$service->id )}}" id="submit" name="send" class="btn btn-buttons btn-radius">@lang('content.orderNow')</a>
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
<section class="section" id="service-cute">
    <div class="container"> 
        
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title text-center">
                    <h3 class="color-blue">Select Single Service</h3>
                    <div class="spacer-15"></div>
                        <p class="mb-0 color-dark">
                            We at EASE offer you a wide range of digital transformation solutions.
                            Don't stay behind, move digital at ease
                        </p>
                    <div class="spacer-30"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="onepage-services mt-4">
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        @php
                            $active = true;
                        @endphp
                        @forelse ($service->tag as $item)
                            @if ($active)
                                <li class="nav-item">
                                    <a class="nav-link active show" id="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}-tab" data-toggle="tab" href="#{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}" role="tab" aria-controls="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}" aria-selected="false">
                                        <p class="mb-0 text-uppercase mt-3">{{$item->name_en}}</p>
                                    </a>
                                </li>
                                @php
                                    $active = false;
                                 @endphp
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" id="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}-tab" data-toggle="tab" href="#{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}" role="tab" aria-controls="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}" aria-selected="false">
                                        <p class="mb-0 text-uppercase mt-3">{{$item->name_en}}</p>
                                    </a>
                                </li>
                            @endif
                            
                        @empty

                        @endforelse
                       
                        
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        @php
                            $active = true;
                        @endphp
                        @forelse ($service->tag as $item)
                            @if ($active)
                                <div class="tab-pane fade bg-dark text-white pb-3 active show" id="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}" role="tabpanel" aria-labelledby="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}-tab">
                                    <div class="row justify-content-center p-3">
                                        <div class="col-lg-6">
                                            <div class="interior-services-info mt-4">
                                                <h4>{{$item->name_en}}</h4>
                                                <p class=" mt-4">{{$item->desc_en}}</p>
                                                <div class="mt-4">
                                                <a href="{{route('showTagForm', $item->id)}}" class="btn btn-custom">@lang('content.orderNow')</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $active = false;
                                @endphp
                            @else
                                <div class="tab-pane fade bg-dark text-white pb-3" id="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}" role="tabpanel" aria-labelledby="{{str_replace(' ', '_',  str_replace('&', '_',  $item->name_en)) }}-tab">
                                    <div class="row justify-content-center p-3">
                                        <div class="col-lg-6">
                                            <div class="interior-services-info mt-4">
                                                <h4>{{$item->name_en}}</h4>
                                                <p class=" mt-4">{{$item->desc_en}}</p>
                                                <div class="mt-4">
                                                <a href="{{route('showTagForm', $item->id)}}" class="btn btn-custom">@lang('content.orderNow')</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        @empty

                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICE END -->


@endsection
