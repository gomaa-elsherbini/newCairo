@extends('layout')
@section('title', 'Contact Us')



@section('content')
    @if(! session()->has('message'))
        <section class="contactus">
            <div class="main-container">
                <div class="title-start">
                    <h2 class="title-start1"> اتصل بنا </h2>
                </div>

                <div class="main-contactus">
                    <div class="row">
                        <div class="col-lg-6">
                            @include('menu.contactus-form')
                        </div>
                        <div class="col-lg-6">
                            <div class="map" id="map">
                                <a href="https://www.google.com/maps/place/29%C2%B058'26.3%22N+31%C2%B018'55.1%22E/@29.9724467,31.3107691,16.5z/data=!4m4!3m3!8m2!3d29.9739722!4d31.3153056?hl=en"
                                   target="_blank">
                                    <img src="{{asset('frontend/assets/images/map.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@include('menu.contactus-form-script')


