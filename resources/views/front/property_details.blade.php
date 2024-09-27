@extends('front/layouts.index')
@section('page.title',  $property->name)
@section('page.description', $property->short_description)

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0" data-bs-bg="img/bg/14.jpg">
        <div class="container text-right">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">{{ $property->name }}</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> الرئيسية</a></li>
                                                <li><a href="{{ route('properties') }}"><span class="ltn__secondary-color"></span> جميع العقارات</a></li>
                                                <li>{{ $property->name }}</li>
                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- IMAGE SLIDER AREA START -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid text-right">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                @foreach (json_decode($property->images) as $image)
                    <!-- Assuming images is a JSON array -->
                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{ asset('images/Properties/' . $image) }}" data-rel="lightcase:myCollection">
                                <img src="{{ asset('images/Properties/' . $image) }}" alt="Image">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->


    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container text-right">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                {{-- <li class="ltn__blog-category">
                                    <a href="#">Featured</a>
                                </li> --}}
                                <li class="ltn__blog-category">
                                    <a class="bg-orange" href="#">
                                        {{ $property->property_type == 'rent' ? 'ايجار ' : '  بيع' }} </a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i> {{ $property->created_at }}
                                </li>
                                {{-- <li>
                                    <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                </li> --}}
                            </ul>
                        </div>

                        <h1>{{ $property->name }} </h1>
                        <label> <span class="ltn__secondary-color"> <i class="flaticon-pin"></i> {{ $property->city }},
                                {{ $property->area }} </span> </label>
                        <h4 class="title-2">وصف قصير للعقار</h4>
                        <p> {{ $property->short_description }} </p>

                        <h4 class="title-2">تفاصيل العقار</h4>
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">
                            <ul>
                                <li><label>مساحة العقار : </label> <span>{{ $property->property_space }} متر مربع</span>
                                </li>
                                <li><label>عدد الادوار :</label> <span>{{ $property->number_of_floors }}</span></li>
                                <li><label>يوجد حديقة :</label>
                                    <span>{{ $property->garden == 1 ? 'يوجد' : ' لا يوجد' }}</span>
                                </li>
                                {{-- @if ($property->garden == 1)
                                    <li><label> مساحة الحديقة :</label> <span>{{ $property->garden_space }} متر مربع</span>
                                    </li>
                                @else
                                    <li><label> مساحة الحديقة :</label> <span>--</span>
                                    </li>
                                @endif --}}
                                <li><label>نوع العقار :</label>
                                    <span>{{ $property->property_type == 'rent' ? 'ايجار ' : '  بيع' }} </span>
                                </li>
                                <li><label>سعر العقار :</label> <span>
                                        {{ number_format($property->price, 2) }} جنيه مصري</span></li>

                            </ul>
                            <ul>

                                <li><label> المدينة :</label> <span>{{ $property->city }} </span></li>
                                <li><label> المنطقة :</label> <span>{{ $property->area }} </span></li>
                                <li><label> القطاع :</label> <span>{{ $property->sector }} </span></li>
                                <li><label>نوع التشطيب :</label>
                                    <span>
                                        @switch($property->finishing_type)
                                            @case('full')
                                                تشطيب كامل
                                                @break
                                            @case('almost')
                                                3/4 تشطيب
                                                @break
                                            @case('half')
                                                نص تشطيب
                                                @break
                                            @case('without')
                                                بدون تشطيب
                                                @break
                                        @endswitch
                                    </span>
                                </li>

                                <li><label>نوع تشطيب الواجهة :</label>
                                    <span>
                                        @switch($property->facade_finishing)
                                            @case('full')
                                                تشطيب كامل
                                                @break
                                            @case('almost')
                                                3/4 تشطيب
                                                @break
                                            @case('half')
                                                نص تشطيب
                                                @break
                                            @case('without')
                                                بدون تشطيب
                                                @break
                                        @endswitch
                                    </span>
                                </li>

                            </ul>

                        </div>

                        <h4 class="title-2">تفاصيل اخري </h4>
                        <div class="property-detail-feature-list clearfix mb-45">
                            <ul>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="fa-solid fa-layer-group"></i>
                                        <div>
                                            <h6>عدد الطوابق </h6>
                                            <small> {{ $property->number_of_floors }} طابق</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="fa-solid fa-house"></i>
                                        <div>
                                            <h6>عدد الغرف </h6>
                                            <small>{{ $property->number_of_rooms }} غرفة </small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="fa-solid fa-bath"></i>
                                        <div>
                                            <h6>عدد الحمامات </h6>
                                            <small> {{ $property->number_of_bathrooms }} حمام</small>
                                        </div>
                                    </div>
                                </li>
                                @if ($property->garden == 1)
                                    <li>
                                        <div class="property-detail-feature-list-item">
                                            <i class="flaticon-double-bed"></i>
                                            <div>
                                                <h6>مساحة الحديقة</h6>
                                                <small> {{ $property->garden_space }} متر مربع </small>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                                <br>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <a href="tel:+{{ $property->phone }}"> <i class="fa-solid fa-phone-flip"></i> </a>

                                        <div>
                                            <h6>رقم التواصل</h6>
                                            <a href="tel:+{{ $property->phone }}"> <small> {{ $property->phone }} </small>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h4 class="title-2">صور العقار</h4>
                        <div class="ltn__property-details-gallery mb-30">
                            <div class="row">
                                <div class="col-md-6">
                                    @foreach (array_chunk(json_decode($property->images, true), ceil(count(json_decode($property->images)) / 2))[0] as $image)
                                        <a href="{{ asset('images/Properties/' . $image) }}"
                                            data-rel="lightcase:myCollection">
                                            <img class="mb-30" src="{{ asset('images/Properties/' . $image) }}"
                                                alt="Image">
                                        </a>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    @foreach (array_chunk(json_decode($property->images, true), ceil(count(json_decode($property->images)) / 2))[1] as $image)
                                        <a href="{{ asset('images/Properties/' . $image) }}"
                                            data-rel="lightcase:myCollection">
                                            <img class="mb-30" src="{{ asset('images/Properties/' . $image) }}"
                                                alt="Image">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <h4 class="title-2">الموقع علي الخريطة</h4>
                        <div class="property-details-google-map mb-60">
                            <iframe src="{{ $property->location ?? 'null' }} " width="100%" height="100%"
                                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>


                        @if ($property->video)
                            <h4 class="title-2">فيديو للعقار</h4>
                            <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60"
                                data-bs-bg="img/others/5.jpg">
                                <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                                    href="{{ asset('images/Property_videos/' . $property->video) }}"
                                    data-rel="lightcase:myCollection">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        @endif


                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">

                        <!-- Tagcloud Widget -->
                        <div class="widget ltn__tagcloud-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2"> الكلمات المفتاحية</h4>
                            <ul>
                                @if ($property->tags->isNotEmpty())
                                    <ul>
                                        @foreach ($property->tags as $tag)
                                            <li><a href="#">{{ $tag->name }}</a></li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>لا توجد وسوم</p>
                                @endif


                            </ul>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->


    <hr width="70%" class="m-auto">

    {{-- related properties --}}

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">عقارات ذات
                            صلة</h6>
                        {{-- <h1 class="section-title">Featured Listings</h1> --}}
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1 text-right">
                @foreach ($relatedProperties as $property)
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
