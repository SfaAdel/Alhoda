@extends('admin.layouts.app')

@section('page.title', 'تفاصيل العقار')

@section('content')
    <div class="card">
        <section class="section main-block">
            <h1 class="title">
                <a href="{{ route('admin.properties.index') }}" class="button">
                    <span class="icon is-small"><i class="fa fa-home"></i></span>
                    <span>قائمة العقارات</span>
                </a>
            </h1>

            <!-- Start Card Content -->
            <div class="card-content">

                {{-- Property Name --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">اسم العقار</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- City --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">المدينة</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->city }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Area --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">المنطقة</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->area }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Sector --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">القطاع</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->sector }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Phone --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">رقم الهاتف</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Tags --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">الوسوم</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                @if ($property->tags->isNotEmpty())
                                    <ul>
                                        @foreach ($property->tags as $tag)
                                            <li>{{ $tag->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>لا توجد وسوم</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Short Description --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">وصف قصير</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->short_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <hr />

                {{-- Active --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">الحالة</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->active ? 'موجود' : 'تم البيع' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Price --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">سعر العقار</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Property Space --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">مساحة العقار</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->property_space }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Number of Floors --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">عدد الادوار</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->number_of_floors }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Garden --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">يوجد حديقة؟</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->garden ? 'نعم' : 'لا' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Garden Space --}}
                @if ($property->garden)
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">مساحة الحديقة</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <p>{{ $property->garden_space }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                @endif

                {{-- Property Type --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">نوع العقار</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>{{ $property->property_type == 'sale' ? 'بيع' : 'ايجار' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Finishing Type --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">نوع التشطيب</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>
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

                                        @default
                                            غير محدد
                                    @endswitch
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Facade Finishing --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">نوع تشطيب الواجهة</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <p>
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

                                        @default
                                            غير محدد
                                    @endswitch
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />


                {{-- Images --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">صور العقار</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <div id="imagePreview" style="display: flex; gap: 10px;">
                                    @foreach (json_decode($property->images) as $image)
                                        <img src="{{ asset('images/Properties/' . $image) }}" style="width: 100px;"
                                            alt="Property Image">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                {{-- Video --}}
                @if ($property->video)
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">فيديو العقار</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <video width="320" height="240" controls>
                                        <source src="{{ asset('images/Property_videos/' . $property->video) }}"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <hr>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">صورة البانر</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <img src="{{ asset('images/Property_bannars/' . $property->banner) }}" alt="Banner Image"
                                    style="max-width: 20rem;">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                {{-- Long Description --}}

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">وصف طويل</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <div>{!! $property->long_description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Content -->
        </section>
    </div>
@endsection
