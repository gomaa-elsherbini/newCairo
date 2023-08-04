<div class="footer">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-2">
                <div class="element-footer">
                    <h2>{{__('translate.AboutUs')}} </h2>
                    <ul>
                        <li><a href="{{url('/aboutus')}}">  {{__('translate.AboutUs')}} </a></li>
                        <li><a href="{{url('/solutions')}}"> {{__('translate.Solutions')}} </a></li>
                        <li><a href="{{url('/partners')}}"> {{__('translate.Partners')}} </a></li>
                        <li><a href="{{url('/clients')}}"> {{__('translate.Clients')}} </a></li>
                        <li><a href="{{url('/jobs')}}"> {{__('translate.Jobs')}} </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="element-footer">
                    <h2> {{__('translate.ContactUs')}}</h2>
                    <ul>
                        <li><a href=""> <i class="bi bi-geo-alt"></i> القاهرة زهراء المعادي شارع كارفور
                                الرئيسي عمارة البنك االهلي الدور السابع</a></li>
                        <li><a href=""> <i class="bi bi-telephone"></i> +20224476876 </a></li>
                        <li><a href=""> <i class="bi bi-telephone"></i> +20224476876 </a></li>
                        <li><a href=""> <i class="bi bi-whatsapp"></i> +20224476876 </a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-4">
                @include('subscription-form')
            </div>
        </div>



        <div class="end-page">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="logo-footer">
                        <a href="{{url('/index')}}">
                            <img src="{{asset('frontend/assets/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p>كل الحقوق محفوظة 2018 &copy; لشركة new cairo</p>
                </div>
                <div class="col-lg-4">
                    <div class="meida-footer">
                        <ul>
                            <li><a href="https://www.instgram.com"> <i class="bi bi-instagram"></i></a></li>
                            <li><a href="https://www.twitter.com"> <i class="bi bi-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com"> <i class="bi bi-facebook"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
