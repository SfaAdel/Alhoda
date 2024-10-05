@extends('front/layouts.index')
@section('page.title', 'الرئيسية')
@section('page.description', '')

@section('content')

    <!-- Body main wrapper start -->

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                                href="https://www.youtube.com/embed/tlThdr3O5Qo"
                                                data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated text-right"><span><i
                                                    class="fas fa-home"></i></span> الهدي للتسويق العقارى</h6>
                                        <h1 class="slide-title animated text-right"> شريكك الأمثل<br> لاستثمارك العقاري
                                        </h1>
                                        <div class="slide-brief animated text-right">
                                            <p>
                                                الهدى للتسويق العقارى بتقدملك كل اللى تحتاجه فى العقارات بخبرة اكتر من 20
                                                سنة مهما كانت ميزانيتك هتلاقى اللى يناسبك
                                            </p>
                                        </div>
                                        {{-- <div class="btn-wrapper animated text-right">
                                            <a href="about.html" class="theme-btn-1 btn btn-effect-1">استفسر</a>
                                            <a class="ltn__video-play-btn bg-white"
                                                href="https://www.youtube.com/embed/HnbMYzdjuBs?autoplay=1&amp;showinfo=0"
                                                data-rel="lightcase">
                                                <i class="icon-play  ltn__secondary-color"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('front/assets/img/slider/121.jpeg') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ltn__slide-item -->
            {{-- <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal ltn__slide-item-3">
                <div class="ltn__slide-item-inner  text-right text-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-img slide-img-right">
                                    <img src="{{ asset('front/assets/img/slider/21.png ') }}" alt="#">
                                </div>
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation text-right">
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> وكالة عقارات</h6>
                                        <h1 class="slide-title animated ">المكان الصحيح <br>العثور على المنزل</h1>
                                        <div class="slide-brief animated">
                                            <p>لوريم إيبسوم جزر معزز الخصومات. النوم والألم؟لوريم إيبسوم جزر معزز الخصومات. النوم والألم؟</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="service.html" class="theme-btn-1 btn btn-effect-1">خدماتنا</a>
                                            <a href="about.html" class="btn btn-transparent btn-effect-3">يتعلم أكثر</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- CAR DEALER FORM AREA START -->
    <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__car-dealer-form-tab">
                        {{-- <div class="ltn__tab-menu  text-uppercase d-none">
                            <div class="nav">
                                <a class="active show" data-bs-toggle="tab" href="#ltn__form_tab_1_1"><i
                                        class="fas fa-car"></i>Find A Car</a>
                                <a data-bs-toggle="tab" href="#ltn__form_tab_1_2" class=""><i
                                        class="far fa-user"></i>Get a Dealer</a>
                            </div>
                        </div> --}}
                        <div class="tab-content bg-white box-shadow-1 ltn__border position-relative pb-10">
                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                <div class="car-dealer-form-inner">
                                    <form action="{{ route('properties.filter') }}" method="GET"
                                        class="ltn__car-dealer-form-box row">
                                        <div class="ltn__car-dealer-form-item col-lg-3 col-md-6">
                                            <select name="city" class="nice-select">
                                                <option value="">اختر المنطقة</option>
                                                <option value="القاهرة">القاهرة</option>
                                                <option value="الجيزة">الجيزة</option>
                                                <option value="الإسكندرية">الإسكندرية</option>
                                                <option value="الأقصر">الأقصر</option>
                                                <option value="أسوان">أسوان</option>
                                                <option value="شرم الشيخ">شرم الشيخ</option>
                                                <option value="الغردقة">الغردقة</option>
                                                <option value="المنصورة">المنصورة</option>
                                                <option value="دمياط">دمياط</option>
                                                <option value="السويس">السويس</option>
                                                <option value="بورسعيد">بورسعيد</option>
                                                <option value="الإسماعيلية">الإسماعيلية</option>
                                                <option value="العريش">العريش</option>
                                                <option value="طنطا">طنطا</option>
                                                <option value="بني سويف">بني سويف</option>
                                                <option value="المنيا">المنيا</option>
                                                <option value="الفيوم">الفيوم</option>
                                                <option value="سوهاج">سوهاج</option>
                                                <option value="قنا">قنا</option>
                                                <option value="مرسى مطروح">مرسى مطروح</option>
                                                <option value="دمنهور">دمنهور</option>
                                                <option value="الزقازيق">الزقازيق</option>
                                                <option value="حلوان">حلوان</option>
                                                <option value="أسيوط">أسيوط</option>
                                                <option value="مطروح">مطروح</option>
                                                <option value="كفر الشيخ">كفر الشيخ</option>
                                                <option value="السادات">السادات</option>
                                                <option value="الشيخ زايد">الشيخ زايد</option>
                                                <option value="السادس من أكتوبر">السادس من أكتوبر</option>
                                                <option value="العاشر من رمضان">العاشر من رمضان</option>
                                                <!-- Add more cities if required -->
                                            </select>
                                        </div>
                                        <div class="ltn__car-dealer-form-item col-lg-3 col-md-6">
                                            <select name="property_type" class="nice-select">
                                                <option value="">نوع العقار</option>
                                                <option value="sale">بيع</option>
                                                <option value="rent">ايجار</option>
                                            </select>
                                        </div>
                                        <div class="ltn__car-dealer-form-item col-lg-3 col-md-6">
                                            <button type="submit"
                                                class="btn theme-btn-1 btn-effect-1 text-uppercase">بحث</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CAR DEALER FORM AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120 pb-90 text-right">
        <div class="container">
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
                                في الهدى، نلتزم بتقديم حلول عقارية متكاملة ومخصصة تلبي طموحات عملائنا وتوفر لهم أفضل الفرص
                                العقارية في السوق، بفضل خبراتنا المتراكمة ومعرفتنا العميقة باحتياجات السوق. </p>
                        </div>
                        <div class="btn-wrapper animated">
                            <a href="{{ route('about') }}" class="theme-btn-1 btn btn-effect-1">اقرأ المزيد . . .</a>
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

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">العقارات</h6>
                        <h1 class="section-title">أحدث العقارات</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1 text-right">
                @foreach ($properties as $property)
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="{{ route('property.details', $property->id) }}">
                                    <img src="{{ asset('images/Property_bannars/' . $property->banner) }}"
                                        alt="{{ $property->name }}">
                                </a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">
                                            {{ $property->property_type == 'rent' ? 'متاح للايجار' : 'متاح للبيع' }}</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> {{ $property->city }},
                                                    {{ $property->area }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="tel:+{{ $property->phone }}"><i class="fas fa-phone"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('property.details', $property->id) }}"><i
                                                        class="fas fa-camera"></i>
                                                    {{ count(json_decode($property->images, true)) }}</a>
                                            </li>
                                            @if ($property->video !== null)
                                                <li>
                                                    <a href="{{ route('property.details', $property->id) }}"><i
                                                            class="fas fa-film"></i> 1</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    @if ($property->property_type == 'rent')
                                        <span> Egy {{ $property->price }} <label>/شهر</label></span>
                                    @else
                                        <span> Egy {{ $property->price }} </span>
                                    @endif
                                </div>
                                <h2 class="product-title">
                                    <a href="{{ route('property.details', $property->id) }}">{{ $property->name }}</a>
                                </h2>
                                <div class="product-description">
                                    <p>{{ $property->short_description }}</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li>
                                        <i class="fa-solid fa-layer-group"></i> عددالأدوار
                                        <span>{{ $property->number_of_floors }}</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-square-shape-design-interface-tool-symbol"></i>
                                        مساحةالعقار
                                        <span>{{ $property->property_space }} متر مربع</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    @if (!$blogs->isEmpty())

        <!-- BLOG AREA START (blog-3) -->
        <div class="ltn__blog-area pt-115--- pb-70 text-right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center mt-3">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">المدونات</h6>
                            <h1 class="section-title">أحدث المقالات</h1>
                        </div>
                    </div>
                </div>
                <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                    <!-- Blog Item -->
                    @foreach ($blogs as $blog)
                        <div class="col-lg-12">
                            <div class="ltn__blog-item ltn__blog-item-3">
                                <div class="ltn__blog-img">
                                    <a href="{{ route('blog.details', $blog->id) }}"><img
                                            src="{{ asset('images/blogs/' . $blog->icon) }}"alt="#"></a>
                                </div>
                                <div class="ltn__blog-brief">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-author">
                                                <a href="#"><i class="far fa-user"></i>تم النشر بواسطة: مدير</a>
                                            </li>
                                            <li class="ltn__blog-tags">
                                                <a href="#"><i
                                                        class="fas fa-tags"></i>{{ $property->tags->first()->name }}</a>


                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="ltn__blog-title"><a
                                            href="{{ route('blog.details', $blog->id) }}">{{ $blog->short_description }}</a>
                                    </h3>
                                    <div class="ltn__blog-meta-btn">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date"><i
                                                        class="far fa-calendar-alt"></i>{{ $blog->created_at }}</li>
                                            </ul>
                                        </div>
                                        <div class="ltn__blog-btn">
                                            <a href="{{ route('blog.details', $blog->id) }}">قراءة المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- BLOG AREA END -->
    @endif

@endsection
