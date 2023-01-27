@extends('shop::layouts.master')
@section('title')
    پروفایل کاربری | باشگاه ورزشی پارس برازجان
@endsection
@section('content')

    <section class="inner-page" id="profile-page">
        <div class="container-fluid" id="page-hero">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 px-0">
                                <h1>ناحیه کاربری</h1>
                                <p>به ناحیه کاربری روبیک مارکت خوش آمدید.</p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">صفحه نخست</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('profile') }}">ناحیه کاربری</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">پروفایل</li>
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
                            <div class="col-12 col-lg-3">
                                <!-- Side Panel -->
                                <div class="accordion" id="side-panel">
                                    <div class="accordion-item menu-container">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            <span class="row">
                                                <span class="col-3 col-sm-2 col-lg-3">
                                                    <img src="{{ $user->profile_photo_path == null ? asset('modules/shop/assets/images/user-no-image.jpg') : asset($user->profile_photo_path) }}" class="rounded-circle">
                                                </span>
                                                <span class="col-7 col-sm-8 col-lg-7 pt-0 pt-sm-2 pt-md-3 pt-lg-0 align-self-center">
                                                    <div id="full-name">{{ $user->fullname ?? $user->name ?? '-' }}</div>
                                                    <div class="mt-2" id="email-mobile">{{ $user->mobile ?? '-' }}</div>
                                                </span>
                                            </span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('profile') }}" class="active">
                                                            <div>
                                                                <div class="icon d-inline-block">
                                                                    <img src="{{ asset('modules/shop/assets/images/icons/profile-menu/profile.webp') }}" class="pl-2">
                                                                </div>
                                                                اطلاعات حساب
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('profile.orders') }}">
                                                            <div>
                                                                <div class="icon d-inline-block">
                                                                    <img src="{{ asset('modules/shop/assets/images/icons/profile-menu/orders.webp') }}" class="pl-2">
                                                                </div>
                                                                سفارش های من
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('profile.favorites') }}">
                                                            <div>
                                                                <div class="icon d-inline-block">
                                                                    <img src="{{ asset('modules/shop/assets/images/icons/profile-menu/favorites.webp') }}" class="pl-2">
                                                                </div>
                                                                علاقه مندی ها
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('profile.addresses') }}">
                                                            <div>
                                                                <div class="icon d-inline-block">
                                                                    <img src="{{ asset('modules/shop/assets/images/icons/profile-menu/addresses.webp') }}" class="pl-2">
                                                                </div>
                                                                آدرس های من
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('auth.logout') }}">
                                                            <div>
                                                                <div class="icon d-inline-block">
                                                                    <img src="{{ asset('modules/shop/assets/images/icons/profile-menu/exit.webp') }}" class="pl-2">
                                                                </div>
                                                                خروج از حساب
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Side Panel -->
                            </div>
                            <div class="col-12 col-lg-9 pl-lg-0 pr-lg-2 mt-2 mt-lg-0">
                                <!-- Profile Fields -->
                                <div class="custom-container bg-light" id="profile-fields">
                                    <div class="row pt-2 px-3 ">
                                        <div class="col-12"><h1>اطلاعات شخصی</h1></div>
                                    </div>
                                    <hr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 profile-field py-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="title">نام و نام خانوادگی</div>
                                                        <div class="value">{{ $user->fullname ?? $user->name ?? '-' }}</div>
                                                    </div>
                                                    <div class="col-2">
                                                        <a href="#" class="float-left" data-toggle="modal" data-target="#fullNameModal">
                                                            <i class="fa-duotone fa-edit"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 profile-field py-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="title">کدملی</div>
                                                        <div class="value">{{ $user->national_code ?? '-' }}</div>
                                                    </div>
                                                    <div class="col-2">
                                                        <a href="#" class="float-left" data-toggle="modal" data-target="#nationalCodeModal">
                                                            <i class="fa-duotone fa-edit"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 profile-field py-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="title">شماره تلفن همراه</div>
                                                        <div class="value">{{ $user->mobile ?? '-' }}</div>
                                                    </div>
                                                    <div class="col-2">
                                                        <a href="#" class="float-left" data-toggle="modal" data-target="#mobileModal">
                                                           <i class="fa-duotone fa-edit"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 profile-field py-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="title">ایمیل</div>
                                                        <div class="value">{{ $user->email ?? '-' }}</div>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="fa-duotone fa-edit"></i>
                                                    </div>
                                                </div>
                                            </div>

{{--                                            <div class="col-12 col-sm-6 profile-field py-2">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-10">--}}
{{--                                                        <div class="title">شماره کارت جهت مرجوع وجه</div>--}}
{{--                                                        <div class="value" dir="ltr">1234-4321-1234-4321</div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-2">--}}
{{--                                                        <a href="#" class="float-left" data-toggle="modal" data-target="#cardNumberModal">--}}
{{--                                                           <i class="fa-duotone fa-edit"></i>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- /Profile Fields -->

                                <!-- Latest Orders -->
                                <div class="mt-2 order">
                                    <div class="row pt-2 px-3">
                                        <div class="col-12"><h2>آخرین سفارش ها</h2></div>
                                    </div>
                                </div>
                                @forelse($orders as $order)
                                    <div class="custom-container mt-2 order">
                                        <div class="row pt-2 px-3">
                                            <div class="col-12 col-sm-6"><h2>سفارش شماره #{{ $order->id }}</h2></div>
                                            <div class="col-12 col-sm-6 text-sm-end"><span>{{ jalaliDate($order->updated_at ?? $order->created_at) }}</span> -
                                                <span>{{ $order->orderStatusValue }}</span></div>
                                        </div>
                                        <hr>
                                        <div class="container">
                                            <div class="row py-2">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="header">
                                                            <div class="total py-1">
                                                                <span>مبلغ کل:</span> {{ priceFormat($order->order_final_amount) }}
                                                            </div>
                                                        </div>
                                                        <div class="container products px-0">
                                                            <div class="row">
                                                                @forelse($order->orderItems as $items)
                                                                    <!-- Order Record -->

                                                                    <span class="col-12 col-sm-6 col-lg-4 col-xl-3 px-1">
                                                                    <a href="{{ route('product.show', $items->singleProduct) }}" target="_blank">
                                                                        <div class="encode4326654321vfb">
                                                                            <div class="image" style="background-image: url({{ asset(str_replace('\\', '/', $items->singleProduct->image)) }})"></div>
                                                                            <div class="text-center px-1 px-sm-3">
                                                                                <h2>{{ $items->singleProduct->name ?? '-' }}</h2>
                                                                                <div class="number">تعداد: {{ $items->number }} عدد</div>
                                                                                <div class="encode4365gbf265g43d">مبلغ: {{ priceFormat($items->final_product_price) }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </span>
                                                                    <!-- /Order Record -->
                                                                @empty
                                                                @endforelse

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Latest Orders -->
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
