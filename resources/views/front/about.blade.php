@extends('front/layouts.index')
@section('page.title', 'الرئيسية')
@section('page.description', '')

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
        data-bs-bg="{{ asset('front/assets/img/bg/14.jpeg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">من نحن</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>من نحن</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120--- pb-90 mt--30 text-right">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset('front/assets/img/others/17.jpeg ') }}" alt="About Us Image">
                        <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color"> من نحن </h6>
                            {{-- <h1 class="section-title">سوق تأجير العقارات الرائد<span>.</span></h1> --}}
                            <p>
                                شركة الهدى للتسويق العقاري هي واحدة من الشركات الرائدة في مجال التسويق العقاري في مصر، بخبرة
                                تمتد لأكثر من 20 عامًا في السوق. نعمل على تقديم خدمات متكاملة تشمل شراء وبيع العقارات،
                                بالإضافة إلى تقديم خدمات البناء والتشطيب في مشروع "ابني بيتك" بحدائق أكتوبر.
                            </p>
                        </div>
                        <ul class="ltn__list-item-half clearfix">
                            <li>
                                <i class="flaticon-home-2"></i>
                                منازل حديثة
                            </li>
                            <li>
                                <i class="flaticon-mountain"></i>
                                مشاهد خلابة حولها
                            </li>
                            <li>
                                <i class="flaticon-heart"></i>
                                أسلوب حياة استثنائي
                            </li>
                            <li>
                                <i class="flaticon-secure"></i>
                                نظام امان كامل
                            </li>
                        </ul>
                        <div class="ltn__callout bg-overlay-theme-05  mt-30">
                            <p>
                                نحن متخصصون في تسويق الوحدات السكنية، سواء كانت شققًا أو فيلات، بالإضافة إلى الوحدات
                                الإدارية والتجارية في أهم المشاريع العقارية الكبرى بالقاهرة والجيزة. كما نعمل عن كثب مع أكبر
                                المطورين العقاريين لتقديم مجموعة متنوعة من العقارات التي تناسب احتياجات العملاء المختلفة،
                                سواء كانت للاستثمار أو للسكن.
                                <br>
                                في الهدى، نلتزم بتقديم حلول عقارية متكاملة ومخصصة تلبي طموحات عملائنا وتوفر لهم أفضل الفرص
                                العقارية في السوق، بفضل خبراتنا المتراكمة ومعرفتنا العميقة باحتياجات السوق.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120--- ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">خدماتنا</h6>
                        <h1 class="section-title">أهدافنا الأساسية</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src=" {{ asset('front/assets/img/icons/icon-img/21.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">بيع العقارات</a></h3>
                            <p>
                                نساعدك في بيع عقارك بسرعة وبأفضل سعر من خلال فريقنا المتخصص في التسويق العقاري. نعمل مع شبكة
                                واسعة من العملاء والمطورين العقاريين لتوفير فرص بيع مميزة لجميع أنواع العقارات، سواء كانت
                                سكنية أو تجارية.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src=" {{ asset('front/assets/img/icons/icon-img/22.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">شراء العقارات</a></h3>
                            <p>نقدم لك مجموعة من أفضل العروض العقارية في السوق، سواء كنت تبحث عن شقة، فيلا، أو وحدة تجارية.
                                نساعدك في اختيار العقار الذي يناسب احتياجاتك وميزانيتك، مع تقديم استشارات مهنية لضمان اتخاذ
                                القرار الصحيح.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-deal-1"></i></span> -->
                            <img src=" {{ asset('front/assets/img/icons/icon-img/23.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">البناء والتشطيب</a></h3>
                            <p>مع خدماتنا المتكاملة للبناء والتشطيب، يمكنك تحويل رؤيتك إلى حقيقة. نقدم حلولًا شاملة من تصميم
                                البناء إلى تسليم المفتاح، مع ضمان الجودة العالية والالتزام بالمواعيد النهائية. خبرتنا في
                                مشروع "ابني بيتك" تجعلنا الخيار الأمثل لاحتياجاتك في حدائق أكتوبر.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-deal-1"></i></span> -->
                            <img src=" {{ asset('front/assets/img/icons/icon-img/22.png') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">إيجار العقارات</a></h3>
                            <p>

                                سواء كنت تبحث عن سكن مؤقت أو مساحة عمل تجارية، نقدم لك خيارات تأجير متنوعة تلبي جميع
                                احتياجاتك. نتعامل مع أفضل العقارات المتاحة للإيجار في القاهرة والجيزة لضمان راحتك ورضاك.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->




@endsection
