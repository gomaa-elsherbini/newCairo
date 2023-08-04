<div class="top-par">
    <div class="main-container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="{{url('/index')}}">
                        <img src="{{asset('frontend/assets/images/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="element">
                    <ul>
                        <li><a href="{{url('/index')}}"> {{__('translate.Main')}} </a></li>
                        <li><a href="{{url('/aboutus')}}">{{__('translate.AboutUs')}}</a></li>
                        <li><a href="{{url('/solutions')}}">{{__('translate.Solutions')}}</a></li>
                        <li><a href="{{url('/sectors')}}">{{__('translate.Sectors')}}</a></li>
                        <li><a href="{{url('/partners')}}">{{__('translate.Partners')}}</a></li>
                        <li><a href="{{url('/clients')}}">{{__('translate.Clients')}}</a></li>
                        <li><a href="{{url('/jobs')}}">{{__('translate.Jobs')}}</a></li>
                        <li><a href="{{url('/news')}}">{{__('translate.News')}} </a></li>
                        <li><a href="{{url('/contactus')}}">{{__('translate.ContactUs')}}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="col-lg-2">
                    <div class="language">

                        <a href=""> {{App::getLocale()=='ar'?'العربية':'English'}} <i class="bi bi-caret-down-fill"></i></a>
                        <div class="dropdowm-language">
                            <ul>
                                <li> <a href="{{route('lang','ar')}}">عربي</a></li>
                                <li> <a href="{{route('lang','en')}}"> English </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="menu-div">
            <div class="content" id="times-ican">
                <a href="#" title="Navigation menu" class="navicon" aria-label="Navigation">
                    <span class="navicon__item"></span>
                    <span class="navicon__item"></span>
                    <span class="navicon__item"></span>
                    <span class="navicon__item"></span>
                </a>
            </div>
        </div>
    </div>
</div>

