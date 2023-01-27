@extends('shop::layouts.master')
@section('head-tag')
    <link rel="stylesheet" href="{{ asset('modules/shop/assets/css/owl.carousel.min.css') }}">
@endsection
@section('title')
    پروفایل کاربری | باشگاه ورزشی پارس برازجان
@endsection
@section('content')

    <section class="inner-page" id="cart-page">
        <div class="container-fluid" id="page-hero">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 px-0">
                                <h1>سبد خرید</h1>
                                <p>مدیریت و خرید همزمان چند محصول</p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('shop') }}">صفحه نخست</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">تکمیل حساب کاربری</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">

                        <div class="row">
                            <form id="profile_completion" action="{{ route('profile-completion.completion') }}" method="post" class="content-wrapper bg-white p-3 rounded-2 mb-4">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-9 pl-lg-0 pr-lg-2 mt-2 mt-lg-0">
                                        <!-- New Address Form -->
                                        <div class="custom-container mb-2 pb-4" id="new-address">
                                            <div class="row pt-2 px-3">
                                                <div class="col-12"><h1>تکمیل اطلاعات حساب کاربری</h1></div>
                                            </div>
                                            <hr>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 pt-3">
                                                        <div class="row">
                                                            <div class="payment-alert alert alert-primary d-flex align-items-center p-2" role="alert">
                                                                <i class="fa-duotone fa-info-circle flex-shrink-0 me-2"></i>
                                                                <div class="small">اطلاعات حساب کاربری خود را (فقط یک بار، برای همیشه) وارد کنید. از این پس کالاها برای شخصی با این مشخصات ارسال می شود.</div>
                                                            </div>

                                                            @if ($errors->any())
                                                                <section class="payment-alert alert alert-danger align-items-center p-2" role="alert">
                                                                    @foreach ($errors->all() as $error)
                                                                        <section class="d-flex">
                                                                            <i class="fa-duotone fa-exclamation-triangle flex-shrink-0 me-2"></i>
                                                                            <section>{{ $error }}</section>
                                                                        </section>
                                                                    @endforeach
                                                                </section>
                                                            @endif

                                                            @if(empty($user->first_name))
                                                                <div class="col-12 col-md-6 pl-2">
                                                                    <div class="form-group m-1">
                                                                        <label for="first_name">نام</label>
                                                                        <input type="text" class="form-control form-control-sm" name="first_name" id="first_name" value="{{ old('first_name') }}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if(empty($user->last_name))
                                                                <div class="col-12 col-md-6 pl-2">
                                                                    <div class="form-group">
                                                                        <label for="last_name">نام خانوادگی</label>
                                                                        <input type="text" class="form-control form-control-sm" name="last_name" id="last_name" value="{{ old('last_name') }}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if(empty($user->email))
                                                                <div class="col-12 col-md-6 pl-2">
                                                                    <div class="form-group">
                                                                        <label for="email">ایمیل (اختیاری)</label>
                                                                        <input type="text" class="form-control form-control-sm" name="email" id="email" value="{{ old('email') }}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if(empty($user->mobile))
                                                                <div class="col-12 col-md-6 pl-2">
                                                                    <div class="form-group">
                                                                        <label for="mobile">موبایل</label>
                                                                        <input type="text" class="form-control form-control-sm" name="mobile" id="mobile" value="{{ old('mobile') }}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if(empty($user->national_code))
                                                                <div class="col-12 col-md-6 pl-2">
                                                                    <div class="form-group">
                                                                        <label for="national_code">کد ملی</label>
                                                                        <input type="text" class="form-control form-control-sm" name="national_code" id="national_code" value="{{ old('national_code') }}">
                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /New Address Form -->
                                    </div>
                                    <div class="col-12 col-lg-3 mt-2 mt-lg-0 pr-3 pr-lg-0">
                                        <div id="factor">

                                            @php
                                                $totalProductPrice = 0;
                                                $totalDiscount = 0;
                                            @endphp
                                            @foreach($cartItems as $item)
                                                @php
                                                    $totalProductPrice += $item->cartItemProductPrice() * $item->number;
                                                    $totalDiscount += $item->cartItemProductDiscount() * $item->number;
                                                @endphp
                                            @endforeach
                                            <div class="container small">
                                                <div class="row py-2">
                                                    <div class="col-6">
                                                        <div>جمع کل فاکتور:</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <span id="factor-total-encode4365gbf265g43d">{{ priceFormat($totalProductPrice) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-2 bg-light">
                                                    <div class="col-6">
                                                        <div>جمع تخفیف:</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <span id="factor-total-discount" class="text-danger">{{ priceFormat($totalDiscount) }} - </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-2" id="total">
                                                    <div class="col-6">
                                                        <div>مبلغ قابل پرداخت:</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <span id="factor-total">{{ priceFormat($totalProductPrice - $totalDiscount) }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-2 small text-black-50">
                                                    <i class="fa-duotone fa-info-circle me-1"></i>کاربر گرامی خرید شما هنوز نهایی نشده است. برای ثبت سفارش و تکمیل خرید باید ابتدا آدرس خود را انتخاب کنید و سپس نحوه ارسال را انتخاب کنید. نحوه ارسال انتخابی شما محاسبه و به این مبلغ اضافه شده خواهد شد. و در نهایت پرداخت این سفارش صورت میگیرد.
                                                </div>

                                                <div class="row py-2">
                                                    <div class="col-12">
                                                        <a onclick="document.getElementById('cart_items').submit();"><input type="submit" value="ادامه ثبت سفارش" class="btn btn-danger w-100"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="{{ asset('modules/shop/assets/js/owl.carousel.min.js') }}"></script>
@endsection
