@extends('layout.main')

@section('content')

<!-- ORDER FORM -->
<section class="section bg-light mt-3" >
    <div class="row d-flex aligm-items-center justify-content-center">
        {{-- <div class="bg-overlay"></div> --}}

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
                                    <input name="name" id="name" type="text" class="form-control" placeholder="@lang('content.yourName')" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="@lang('content.yourEmail')" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="phone" id="phone" class="form-control" placeholder="@lang('content.yourPhone')" required>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label">
                                    <input name="tags" hidden  value="{{$tag_id}}">
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

        {{-- <div class="col-md-6 col-sm-12 m-auto">
            <h3 class="slogan"></h3>
        </div> --}}
        
    </div>
</section>

<!-- ORDER FORM END -->


@endsection