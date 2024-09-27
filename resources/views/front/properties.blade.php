@extends('front/layouts.index')
@section('page.title', 'العقارات')
@section('page.description', '')

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0" data-bs-bg="img/bg/14.jpg">
        <div class="container text-right">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">العقارات</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>جميع العقارات</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CAR DEALER FORM AREA START -->
    <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
        <div class="container">
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
                        <div class="tab-content bg-white box-shadow-1 ltn__border position-relative pb-10 text-center" style="z-index: 10000">
                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                <div class="car-dealer-form-inner">
                                    <form action="{{ route('properties.filter') }}" method="GET" class="ltn__car-dealer-form-box row">
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
                                            <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">بحث</button>
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

    <div class="widget ltn__tagcloud-widget text-right m-5">
        <h4 class="ltn__widget-title ltn__widget-title-border-2"> الكلمات المفتاحية</h4>
        <ul>
            @if ($tags->isNotEmpty())
                <ul>
                    @foreach ($tags as $tag)
                        <li><a href="{{ route('properties.filterByTag', $tag->name) }}">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            @else
                <p>لا توجد وسوم</p>
            @endif


        </ul>
    </div>

    {{--  properties --}}

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color"> جميع العقارات
                            </h6>
                        {{-- <h1 class="section-title">Featured Listings</h1> --}}
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
                                            {{ $property->property_type == 'rent' ? 'متاح للايجار' : 'متاح للبيع' }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i>
                                                    {{ $property->city }},
                                                    {{ $property->area }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="tel:+{{ $property->phone }}"><i
                                                        class="fas fa-phone"></i>
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
@endsection
