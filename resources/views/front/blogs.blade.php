@extends('front/layouts.index')
@section('page.title', 'المدونة')
@section('page.description', '')

@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="{{ asset('img/bg/14.jpg') }}">
        <div class="container text-right">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">المدونة</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>المدونة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <div class="widget ltn__tagcloud-widget text-right m-5">
        <h4 class="ltn__widget-title ltn__widget-title-border-2"> الكلمات المفتاحية</h4>
        <ul>
            @if ($tags->isNotEmpty())
                <ul>
                    @foreach ($tags as $tag)
                        <li><a href="{{ route('blogs.filterByTag', $tag->name) }}">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            @else
                <p>لا توجد وسوم</p>
            @endif


        </ul>
    </div>


    <!-- BLOG AREA START -->
    <div class="ltn__blog-area mb-120">
        <div class="container">
            <div class="row">
                <!-- Blog Content Area -->
                <div class="col-lg-8 text-right">
                    <div class="ltn__blog-list-wrap">
                        @foreach ($blogs as $blog)
                            <div class="ltn__blog-item ltn__blog-item-5">
                                <div class="ltn__blog-img">
                                    <a href="{{ route('blog.details', $blog->id) }}">
                                        <img src="{{ asset('images/blogs/' . $blog->icon) }}" alt="Image">
                                    </a>
                                </div>
                                <div class="ltn__blog-brief">
                                    <h3 class="ltn__blog-title">
                                        <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->main_title }}</a>
                                    </h3>
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li><a href="#"><i class="far fa-eye"></i>300 مشاهدة</a></li>
                                            <li class="ltn__blog-date"><i
                                                    class="far fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                    <p>{{ $blog->short_description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Pagination Links -->
                            <div class="ltn__pagination-area text-center">
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>

                    {{-- <!-- Pagination -->
<div class="ltn__pagination-area text-center">
    {{ $blogs->links() }}
</div> --}}
                </div>

                <!-- Sidebar Area -->
                <div class="col-lg-4 text-right">
                    <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">ابحث عن مقال</h4>
                            <form action="{{ route('blogs') }}" method="GET">
                                <input type="text" name="search" placeholder="بحث..." value="{{ request('search') }}">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Latest Blogs -->
                        <div class="widget ltn__popular-post-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">احدث المقالات</h4>
                            <ul>
                                @foreach ($latestBlogs as $latest)
                                    <li>
                                        <div class="popular-post-widget-item clearfix">
                                            <div class="popular-post-widget-img">
                                                <a href="{{ route('blog.details', $latest->id) }}">
                                                    <img src="{{ asset('images/blogs/' . $latest->icon) }}"
                                                        alt="{{ $latest->main_title }}">
                                                </a>
                                            </div>
                                            <div class="popular-post-widget-brief">
                                                <h6><a
                                                        href="{{ route('blog.details', $latest->id) }}">{{ $latest->main_title }}</a>
                                                </h6>
                                                <div class="ltn__blog-meta">
                                                    <ul>
                                                        <li class="ltn__blog-date">
                                                            <a href="#"><i
                                                                    class="far fa-calendar-alt"></i>{{ $latest->created_at->format('M d, Y') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Related Properties Widget -->
                        <div class="widget ltn__popular-post-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">عقارات ذات صلة</h4>
                            <ul>
                                @foreach ($sharedTagProperties as $property)
                                    <li>
                                        <div class="popular-post-widget-item clearfix">
                                            <div class="popular-post-widget-img">
                                                <a href="{{ route('property.details', $property->id) }}">
                                                    <img src="{{ asset('images/Property_bannars/' . $property->banner) }}"
                                                        alt="{{ $property->name }}">
                                                </a>
                                            </div>
                                            <div class="popular-post-widget-brief">
                                                <h6><a
                                                        href="{{ route('property.details', $property->id) }}">{{ $property->name }}</a>
                                                </h6>
                                                <div class="ltn__blog-meta">
                                                    <ul>
                                                        <li class="ltn__blog-date">
                                                            <a href="#"><i
                                                                    class="far fa-calendar-alt"></i>{{ $property->created_at->format('M d, Y') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->


@endsection
