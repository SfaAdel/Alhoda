<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'تعديل بيانات العقار ')
<!-- Start Content Section -->
@section('content')
    <!-- Start Card -->
    <div class="card main-card">
        <!-- Start Card Header -->
        <div class="card-header">
            <a href="{{ route('admin.properties.index') }}" class="button is-success">
        <span class="icon is-small">
            <i class="fa-solid fa-city"></i>
        </span>
                <span>قائمة العقارات</span>
            </a>
        </div><!-- End Card Header -->
        <!-- Start Form -->
        {!! Form::model($property, ['method' => 'PATCH', 'files' => true, 'url' => route('admin.properties.update', $property->id)]) !!}
        @include('admin.properties._form')
    {!! Form::close() !!}
    <!-- End Form -->
    </div><!-- End Card -->
@endsection<!-- End Content Section -->
