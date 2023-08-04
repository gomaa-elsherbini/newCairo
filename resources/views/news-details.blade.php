@extends('layout')
@section('title', 'News Details')


@section('content')
<section class="news-details">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sub-news-details">
                    <div class="img-news-details">
                        <img src="{{asset('frontend/assets/images/n1.png')}}" alt="">
                    </div>
                    <div id="search-result">

                        <div class="text-news-details">
                            <h2> {{__('translate.NewsText')}}</h2>
                            <p> يسرنا أن نعلن عن شراكة جديدة بين SMARTTEL و LG Electronics. تعد LG Electronics
                                مزودًا عالميًا للخدمة وتوفر خدمات IPTV واللافتات الرقمية في جميع أنحاء العالم.
                                نحن نفكر في توسيع الخدمات من خلال العمل في شراكة وثيقة. هدفنا هو إرضاء العميل من
                                خلال تقديم أفضل الحلول والخدمات لدينا. ستساعدنا هذه الشراكة بالتأكيد على تعزيز
                                وإثراء أعمالنا وكذلك تقديم خدمات أحدث.
                                إذا كان لديك أي استفسارات بخصوص ذلك ، فلا تتردد في الاتصال بنا على
                                Info@smarttel.com.eg</p>
                        </div>
                        <div id="er"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="search-new">
                    <h2 class="title-news">{{__('translate.Search')}}</h2>
                    <div class="form-search">
                        <input type="text" class="form-control" name="search" required id="search" >
                    {{--    <button type="submit"><i class="bi bi-search"></i></button>--}}
                    </div>


                </div>


                <div class="element-news">
                    <h2 class="title-news">{{__('translate.Categories')}}</h2>
                    <ul>
                        <li><a href=""> {{__('translate.EmploymentNews')}}</a></li>
                        <li><a href=""> {{__('translate.EmploymentNews')}}</a></li>
                        <li><a href=""> {{__('translate.EmploymentNews')}}</a></li>
                        <li><a href=""> {{__('translate.EmploymentNews')}}</a></li>
                        <li><a href=""> {{__('translate.EmploymentNews')}}</a></li>
                    </ul>
                </div>
                <div class="last-news">
                    <h2 class="title-news">{{__('translate.LatestNews')}}</h2>
                    <ul>
                        <li>
                            <a href="">
                                <div class="img-last-news">
                                    <img src="{{asset('frontend/assets/images/n1.png')}}" alt="">
                                </div>
                                <div class="text-last-news">
                                    <h2>{{__('translate.NewsText')}} </h2>
                                    <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحةهذا النص هو مثال
                                        لنص يمكن أن يستبدل في نفس المساحة في مكان واحد،هذا النص هو </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="img-last-news">
                                    <img src="{{asset('frontend/assets/images/n1.png')}}" alt="">
                                </div>
                                <div class="text-last-news">
                                    <h2>{{__('translate.NewsText')}}</h2>
                                    <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحةهذا النص هو مثال
                                        لنص يمكن أن يستبدل في نفس المساحة في مكان واحد،هذا النص هو </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="img-last-news">
                                    <img src="{{asset('frontend/assets/images/n1.png')}}" alt="">
                                </div>
                                <div class="text-last-news">
                                    <h2>{{__('translate.NewsText')}}</h2>
                                    <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحةهذا النص هو مثال
                                        لنص يمكن أن يستبدل في نفس المساحة في مكان واحد،هذا النص هو </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(document).ready(function (){
            $(document).on('input','#search', function (){
                 let search = $(this).val();
                jQuery.ajax({
                    url:'{{url('/search')}}',
                    type:'post',
                    datatype: 'html',
                    cache:false,
                    data:{search:search, '_token':'{{csrf_token()}}'},
                    success:function (data){
                       $('#search-result').html(data)
                    },
                    error:function (XMLHttpRequest, textStatus, errorThrown){
                        // alert('something goes wrong or no connection to database');
                        // alert("Status: " + textStatus); alert("Error: "+errorThrown);
                        $('#er').html( `Status:  ${textStatus}( ${errorThrown})`)
                    }
                })
            })
        })
    </script>
@endsection

