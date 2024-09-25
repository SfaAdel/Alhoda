<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', '  الخدمات')
<!-- Start Content Section -->
@section('content')
    <!-- Start Card -->
    <div class="card main-card">

        @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
        <!-- Start Card Header -->
        <div class="card-header is-justify-content-space-between">
            <a href="{{ route('admin.properties.create') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-plus-circle"></i>
        </span>
                <span>اضافة عقار جديد</span>
            </a>
        </div>
        @endif

        <div class="center">
            @include('admin.partials.search_result', ['data' => $properties])
        </div>

        @if (!$properties->isEmpty())
        <!-- End Card Header -->
        <div class="card-content">
            <div class="table-container">
                <table class="table is-fullwidth">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th> السعر</th>
                        <th> الحديقة</th>
                        <th> المساحة</th>
                        <th> الحالة</th>
                        <th> نوع العقار </th>
                        <th> المدينة </th>
                        @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
                        <th>الاجراءات</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->name }}</td>
                        <td>{{ $property->price }}</td>
                        <td>{{ $property->garden ? 'يوجد' : 'لا يوجد' }}</td>
                        <td>{{ $property->property_space }} متر </td>
                        <td>{{ $property->active ? 'متاح' : 'تم البيع' }}</td>
                        <td>{{ $property->property_type }}</td>
                        <td>{{ $property->city }}</td>

                        @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
                        <td>
                            <div class="buttons has-addons">
                                <a class="button is-warning" href="{{ route('admin.properties.show', $property->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="button is-info" href="{{ route('admin.properties.edit', $property->id) }}">
                                    تعديل
                                </a>
                                <a class="modal-open button is-danger" status-name="تأكيد الحذف"  traget-modal=".delete-modal" data_id="{{ $property->id }}" data_name="{{ $property->name }}" data-url="{{ route('admin.properties.destroy', $property->id) }}">حذف</a>

                            </div>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <!-- Start Card Footer -->
        <div class="center d-flex justify-center align-content-center m-4">
            <div class="card-footer with-pagination ">
                {{ $properties->links() }}
            </div>
        </div>
        <!-- End Card Footer -->
        </div>
        @include('admin.partials.deleteModal')
        @endsection
