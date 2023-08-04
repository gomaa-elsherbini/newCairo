@extends('layout')

@section('content')
<section class="jops-details">
    <div class="main-container">
        <div class="title-center">
            <span></span>
            <h2> مدير إدارة المشاريع الهندسية </h2>
            <span></span>
        </div>

        <div class="sub-jops-details">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-sub-jops-details"  data-aos="fade-left"  data-aos-easing="linear"
                    data-aos-duration="800">
                        <h2>وصف الوظيفة :</h2>
                        <ul>
                            <li>مسؤول عن إدارة وتنفيذ المشاريع بنجاح.</li>
                            <li>إدارة إنشاء وإغلاق جميع أوامر العمل وطلبات العملاء.</li>
                            <li>الالتزام بضمان إنجاز المشروع في الوقت المناسب ضمن الميزانيات المعتمدة على التكلفة والموارد دون المساومة على الجودة والسلامة ومراقبة تخطيط القوى العاملة.</li>
                            <li>تحليل العقود والمطالبات وإدارة التغيير.</li>
                            <li>تأكد من الامتثال الصارم لجميع الجوانب الفنية للمشاريع ومطابقتها لشروط العقد ، وخاصة المواصفات والمواصفات العامة ورسومات العقد وجداول الكميات.</li>
                            <li>إعداد تقارير دورية للإدارة بما في ذلك حالة الميزانيات ومطالبات التباين / التغيير والجداول الزمنية والنزاعات والأنشطة القادمة وسجلات السلامة.</li>
                            <li>مراجعة التصاميم والرسومات الفنية للتأكد من اتباعها بشكل صحيح</li>
                            <li>إدارة مشاريع النظام الحالية المنخفضة ويضمن التحقق والتنفيذ والصيانة بشكل منتظم وسليم.</li>
                            <li>يكتب بيان اقتراح العمل للعميل.</li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img-jops-details"  data-aos="fade-right"  data-aos-easing="linear"
                    data-aos-duration="800">
                        <object data="{{asset('frontend/assets/svg/j-1.svg')}}" type="">
                            <img src="{{asset('frontend/assets/svg/j-1.svg')}}" alt="">
                        </object>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-jops-details">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-sub-jops-details"  data-aos="fade-left"  data-aos-easing="linear"
                    data-aos-duration="800">
                        <h2>متطلبات العمل  :</h2>
                        <ul>
                            <li>بكالوريوس في الهندسة ، أو أي مجال ذي صلة.</li>
                            <li>10 إلى 15 عامًا من الخبرة في مجال التيار الخفيف ، مع خبرة عملية مثبتة في نفس المنصب لا تقل عن 5 سنوات.</li>
                            <li>PMP هو ملف يجب.</li>
                            <li>معتاد على إدارة مشاريع متعددة في وقت واحد.</li>
                            <li>على دراية جيدة بالتكنولوجيا والمعدات والأساليب المتعلقة بإنذار الحريق والأمن بشكل مثالي.</li>
                            <li>قدرات اتصال قوية والتفاعل مع العملاء.</li>
                            <li>مهارات متقدمة مع Excel و Word و Outlook.</li>
                            <li>إدارة الوقت الممتازة والمهارات التنظيمية.</li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img-jops-details"  data-aos="fade-right"  data-aos-easing="linear"
                    data-aos-duration="800">
                        <object data="{{asset('frontend/assets/svg/j-2.svg')}}" type="">
                            <img src="{{asset('frontend/assets/svg/j-2.svg')}}" alt="">
                        </object>
                    </div>
                </div>
            </div>
        </div>


        <div class="btn-jops-details">
            <a href="/job-application" class="ctm-btn"> التقدم لهذه الوظيفة </a>
        </div>
    </div>
</section>

@endsection
