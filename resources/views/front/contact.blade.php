@extends('front/layouts.index')
@section('page.title', 'تواصل معنا')
@section('page.description', '')

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
        data-bs-bg="{{ asset('front/assets/img/bg/14.jpeg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">تواصل معنا</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>تواصل معنا</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    @if (session('success'))
        <div class="alert alert-success text-center m-auto mb-4" style="width: 50%">
            {{ session('success') }}
        </div>
    @endif




    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container text-right">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src=" {{ asset('front/assets/img/icons/10.png') }}" alt="Icon Image">
                        </div>
                        <h3>عنوان البريد الالكتروني</h3>
                        <p><a href="mailto:info@alhodarealestate.com">info@alhodarealestate.com</a></p>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src=" {{ asset('front/assets/img/icons/11.png') }}" alt="Icon Image">
                        </div>
                        <h3>أرقام التواصل</h3>
                        <p>

                            <a href="tel:+201003362896">+201003362896</a>

                            <a href="tel:+201095000384">+201095000384</a>
                            <br>
                            <a href="tel:+201033874584">+201033874584</a>

                            <a href="tel:+201111186708">+201111186708</a>
                        </p>


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('front/assets/img/icons/12.png') }}" alt="Icon Image">
                        </div>
                        <h3>عنوان المقر</h3>
                        <p>حدائق اكتوبر شارع المنتزه <br> كمبوند الصناعات عمارة رقم 29 شقة رقم 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container text-right">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">سعداء بتواصلك معنا</h4>
                        <form id="contact-form" action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" placeholder="من فضلك ادخل اسمك" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="ادخل عنوان بريدك الالكتروني" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="ادخل رقم هاتفك" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item">
                                        <input type="text" name="title" placeholder="ادخل عنوان الرسالة" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="رسالتك .  ." required></textarea>
                            </div>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">ارسال</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    {{-- <!-- GOOGLE MAP AREA START -->
    <div class="google-map ">

        <iframe src="" width="100%" height="100px" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
    <!-- GOOGLE MAP AREA END --> --}}

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
