<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'اضافة حي جديد')
<!-- Start Content Section -->
@section('content')
  <!-- Start Card -->
  <div class="card main-card">
    <!-- Start Card Header -->
    <div class="card-header">
        <a href="{{ route('admin.districts.index') }}" class="button is-success">
          <span class="icon is-small">
            <i class="fa-solid fa-list"></i>
          </span>
          <span>قائمة الأحياء</span>
        </a>
    </div><!-- End Card Header -->
    <!-- Start Form -->
    {!! Form::open(['method' => 'POST','files' => true, 'route' => ['admin.districts.store']]) !!}
      @include('admin.districts._form')
    {!! Form::close() !!}<!-- End Form -->
  </div><!-- End Card -->
@endsection<!-- End Content Section -->
