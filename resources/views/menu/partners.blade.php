@extends('layout')
@section('title', 'Partners')


@section('content')
    <section class="partners">
        <div class="main-container">
            <h2 class="title-start1">شركاؤنا </h2>
            <div class="sub-partners mr-section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text-partners">
                            <div class="logo-partners">
                                <img src="{{asset('frontend/assets/images/logo2.png')}}" alt="">
                            </div>
                            <p> هي شركة أنظمة متكاملة توفر الحل الكامل لمجال التيار الخفيف Construction Cairo New .
                                نحن واحدة من أوائل الشركات في مصر التي تقدم خدمات تكامل األنظمة. نحن نقدم
                                المشروع علي تسليم المفتاح. من خالل إضافة المزيد من العالمات التجارية ا لمحفظتنا
                                ، و هذا سيقودنا نحو الريادة في السوق عالية الجودة بنا .</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="video-partners">
                            <video controls width="100%">
                                <source src="{{asset('frontend/assets/images/v2.mp4')}}" type="video/webm">

                                <source src="{{asset('frontend/assets/images/v2.mp4')}}" type="video/mp4">

                                Download the
                                <a href="{{asset('frontend/assets/images/v2.mp4')}}">WEBM</a>
                                or
                                <a href="{{asset('frontend/assets/images/v2.mp4')}}">MP4</a>
                                video.
                            </video>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
