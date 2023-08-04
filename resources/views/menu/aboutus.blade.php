@extends('layout')
@section('title', 'About Us')

@section('content')
    <section class="aboutus">

        <div class="main-container">
            <div class="sub-aboutus">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text-aboutus">
                            <h2 class="title-start1">من نحن </h2>
                            <p> هي شركة أنظمة متكاملة توفر الحل الكامل لمجال التيار Construction Cairo New
                                الخفيف. نحن واحدة من أوائل الشركات في مصر التي تقدم خدمات تكامل األنظمة. نحن
                                نقدم المشروع علي تسليم المفتاح. من خالل إضافة المزيد من العالمات التجارية ا
                                لمحفظتنا ، و هذا سيقودنا نحو الريادة في السوق عالية الجودة بنا . </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="img-aboutus">
                            <object data="{{asset('frontend/assets/svg/v-1.svg')}}" type="">
                                <img src="{{asset('frontend/assets/svg/v-1.svg')}}" alt="">
                            </object>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-aboutus">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text-aboutus">
                            <h2 class="title-start1">ماذا نفعل</h2>
                            <p>"تكامل النظام" يوفر احتياجات العمالء من خالل نقل الصندوق من الموردين إلى العمالء
                                النهائيين بأقل سعر للمنتجات مع تركيب عالي الجودة. نحن ن قدم جميع احتياجات السوق
                                مع حلول مخصصة حسب احتياجات العميل.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="img-aboutus">
                            <object data="{{asset('frontend/assets/svg/v-4.svg')}}" type="">
                                <img src="{{asset('frontend/assets/svg/v-4.svg')}}" alt="">
                            </object>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-aboutus">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text-aboutus">
                            <h2 class="title-start1">كيف نفعل ذلك</h2>
                            <p>نحن نفهم ونستمع إلى كافة شروط العميل قبل أن نصمم ونخطط ونبني حتى نقوم بتشغيل
                                النظام المطلوب لتحقيق نجاح السوق. يمكننا تخصيص الحل الكامل حسب احتياجات عمالئنا.
                                نتعاون مع متخصصي قيادة األعمال والتكنولوجيا الخاصة بالعميل لتنفيذ األنظمة
                                والتطبيقات التي تقدم النتائج المطلوبة لمشاريع العميل. لدينا قسم الصيانة الخاص
                                بنا.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="img-aboutus">
                            <object data="{{asset('frontend/assets/svg/v-3.svg')}}" type="">
                                <img src="{{asset('frontend/assets/svg/v-3.svg')}}" alt="">
                            </object>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-aboutus">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text-aboutus">
                            <h2 class="title-start1">لماذا نقوم بذلك</h2>
                            <p>تزويد السوق بحلول ذات جودة عالية وقيم مضافة حقيقية. لحرصنا على تقديم الخدمة
                                والمشورة للعمالء للحفاظ على مستوى السوق.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="img-aboutus">
                            <object data="{{asset('frontend/assets/svg/v-2.svg')}}" type="">
                                <img src="{{asset('frontend/assets/svg/v-2.svg')}}" alt="">
                            </object>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="aboutus-values mr-section">
            <div class="main-container">
                <div class="title-start">
                    <h2> قيمنا الأساسية </h2>
                </div>
                <div class="owl-carousel owl-theme maincarousel" id="slider-values">
                    <div class="item">
                        <div class="sub-services-index">
                            <div class="img-services-index">
                                <img src="{{asset('frontend/assets/images/s03.png')}}" alt="">
                            </div>
                            <h2>النزاهة</h2>
                            <p>احترام قيم العميل ، وضمان الوفاء بوعودنا في الوقت المحدد وبنهج شفاف وعادل.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-services-index">
                            <div class="img-services-index">
                                <img src="{{asset('frontend/assets/images/s2.png')}}" alt="">
                            </div>
                            <h2>ابتكار</h2>
                            <p>نحن نبحث باستمرار عن طرق أفضل لتقديم الأفضل لعملائنا ومساهمينا وموردينا وزملائنا.
                                نتوقع التغيير ونبتكر الحلول قبل أن يُطلب منا ذلك.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-services-index">
                            <div class="img-services-index">
                                <img src="{{asset('frontend/assets/images/s01.png')}}" alt="">
                            </div>
                            <h2>مسئولية</h2>
                            <p>نقول ما نفعله ونفعل ما نقوله. نحن نحقق باستمرار نتائج تلبي و تتجاوز توقعات
                                عملائنا وموردينا ونتحمل مسؤولية عملنا ونصحح الأخطاء على الفور إلى أقصى حد ممكن
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-services-index">
                            <div class="img-services-index">
                                <img src="{{asset('frontend/assets/images/s03.png')}}" alt="">
                            </div>
                            <h2>النزاهة</h2>
                            <p>احترام قيم العميل ، وضمان الوفاء بوعودنا في الوقت المحدد وبنهج شفاف وعادل.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-services-index">
                            <div class="img-services-index">
                                <img src="{{asset('frontend/assets/images/s2.png')}}" alt="">
                            </div>
                            <h2>ابتكار</h2>
                            <p>نحن نبحث باستمرار عن طرق أفضل لتقديم الأفضل لعملائنا ومساهمينا وموردينا وزملائنا.
                                نتوقع التغيير ونبتكر الحلول قبل أن يُطلب منا ذلك.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-services-index">
                            <div class="img-services-index">
                                <img src="{{asset('frontend/assets/images/s01.png')}}" alt="">
                            </div>
                            <h2>مسئولية</h2>
                            <p>نقول ما نفعله ونفعل ما نقوله. نحن نحقق باستمرار نتائج تلبي و تتجاوز توقعات
                                عملائنا وموردينا ونتحمل مسؤولية عملنا ونصحح الأخطاء على الفور إلى أقصى حد ممكن
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
