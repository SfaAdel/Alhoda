@extends('front/layouts.index')
@section('page.title', $blog->main_title )
@section('page.description',  $blog->short_description )

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="{{ asset('img/bg/14.jpg') }}">
        <div class="container text-right">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">{{ $blog->main_title }}</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li><a href="{{ route('blogs') }}"><span class="ltn__secondary-color"></span> المدونة</a>
                                </li>
                                <li>{{ $blog->main_title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PAGE DETAILS AREA START (blog-details) -->
    <div class="ltn__page-details-area ltn__blog-details-area mb-120 text-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__blog-details-wrap">
                        <div class="ltn__page-details-inner ltn__blog-details-inner">
                            {{-- <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#"> {{ $blog->tags->first()->name }} </a>
                                    </li>
                                </ul>
                            </div> --}}
                            <h2 class="ltn__blog-title">{{ $blog->main_title }}</h2>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#">تم النشر بواسطة:
                                            {{ $blog->author->name ?? 'مدير' }}</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('F d, Y') }}
                                    </li>

                                </ul>
                            </div>
                            <p>{!! $blog->long_description !!}</p>
                        </div>

                        <!-- Blog tags and social media -->
                        <div class="ltn__blog-tags-social-media mt-80 row">
                            <div class="ltn__tagcloud-widget col-lg-8">
                                <h4>الكلمات المفتاحية</h4>
                                <ul>
                                    @foreach ($blog->tags as $tag)
                                        <li><a href="{{ route('blogs.filterByTag', $tag->name) }}">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="ltn__social-media text-right text-end col-lg-4">
                                <h4>Social Share</h4>
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        @if ($previous || $next)

                            <!-- Prev/Next post links -->
                            <hr>
                            <div class="ltn__prev-next-btn row mb-50">
                                @if ($previous)
                                    <div class="blog-prev col-lg-6">
                                        <h6>المقال السابق</h6>
                                        <h3 class="ltn__blog-title"><a
                                                href="{{ route('blog.details', $previous->id) }}">{{ $previous->main_title }}</a>
                                        </h3>
                                    </div>
                                @endif
                                @if ($next)
                                    <div class="blog-next col-lg-6 text-right">
                                        <h6>المقال التالى</h6>
                                        <h3 class="ltn__blog-title"><a
                                                href="{{ route('blog.details', $next->id) }}">{{ $next->main_title }}</a>
                                        </h3>
                                    </div>
                                @endif
                            </div>
                        @endif

                        @if (!$relatedBlogs->isEmpty())
                        <hr>
                            <!-- Related Posts -->
                            <div class="related-post-area mb-50">
                                <h4 class="title-2">مقالات ذات صلة</h4>
                                <div class="row">
                                    @foreach ($relatedBlogs as $relatedBlog)
                                        <div class="col-md-6">
                                            <div class="ltn__blog-item ltn__blog-item-6">
                                                <div class="ltn__blog-img">
                                                    <a href="{{ route('blog.details', $relatedBlog->id) }}">
                                                        <img src="{{ asset('images/blogs/' . $relatedBlog->icon) }}"
                                                            alt="{{ $relatedBlog->main_title }}">
                                                    </a>
                                                </div>
                                                <div class="ltn__blog-brief">
                                                    <div class="ltn__blog-meta">
                                                        <ul>
                                                            <li class="ltn__blog-date ltn__secondary-color">
                                                                <i
                                                                    class="far fa-calendar-alt"></i>{{ $relatedBlog->created_at->format('F d, Y') }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="ltn__blog-title">
                                                        <a
                                                            href="{{ route('blog.details', $relatedBlog->id) }}">{{ $relatedBlog->main_title }}</a>
                                                    </h3>
                                                    <p>{{ $relatedBlog->short_description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar-area blog-sidebar ltn__right-sidebar">


                        <!-- Related Properties Widget -->
                        <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">عقارات ذات صلة</h4>
                            <ul>
                                @foreach ($relatedProperties as $property)
                                    <li>
                                        <div class="top-rated-product-item clearfix">
                                            <div class="top-rated-product-img">
                                                <a href="{{ route('property.details', $property->id) }}">
                                                    <img src="{{ asset('images/Property_bannars/' . $property->banner) }}" alt="{{ $property->name }}">
                                                </a>
                                            </div>
                                            <div class="top-rated-product-info">
                                                <h6><a href="{{ route('property.details', $property->id) }}">{{ $property->name }}</a></h6>
                                                <div class="product-price">
                                                    <span>${{ number_format($property->price, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Latest Blogs Widget -->
                        <div class="widget ltn__popular-post-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">احدث المقالات</h4>
                            <ul>
                                @foreach ($latestBlogs as $latestBlog)
                                    <li>
                                        <div class="popular-post-widget-item clearfix">
                                            <div class="popular-post-widget-img">
                                                <a href="{{ route('blog.details', $latestBlog->id) }}">
                                                    <img src="{{ asset('images/blogs/' . $latestBlog->icon) }}" alt="{{ $latestBlog->main_title }}">
                                                </a>
                                            </div>
                                            <div class="popular-post-widget-brief">
                                                <h6><a href="{{ route('blog.details', $latestBlog->id) }}">{{ $latestBlog->main_title }}</a></h6>
                                                <div class="ltn__blog-meta">
                                                    <ul>
                                                        <li class="ltn__blog-date">
                                                            <a href="#"><i class="far fa-calendar-alt"></i>{{ $latestBlog->created_at->format('F d, Y') }}</a>
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
    <!-- PAGE DETAILS AREA END -->



@endsection
