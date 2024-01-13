<style>
    .input-group .btn {
        position: relative;
        z-index: 0;
        padding: 2px;
        width: 26px;
        /* margin-right: 5px; */
        border: none;
    }

    .product-action input {
        /* width: 45px; */
        /* margin-top: 15px; */
        height: 30px;
        font-size: 14px;
        border-radius: 5px;
        color: var(--primary);
        background: var(--chalk);
    }

    .input-group {
        margin-top: 0px;
    }
</style>
@php
    $sum = 0;
    // Set the time zone to New York
    date_default_timezone_set('America/New_York');
    $dateInNYC = \Carbon\Carbon::now();

    // Format the dates as needed
    $formattedDateNYC = $dateInNYC->format('m/d Y h:i a');
@endphp

<!-- Preloader Start -->
{{-- <div class="preloader d-lg-none">
    <div class="img">

        <img src="{{ asset('website') }}/asset/images/logo/Red-Logo-Transparent-for-Desktop.gif" class="d-block"
            alt="">
    </div>
    <div class="time">

        <p>SEED • TIME • IFMH<span>{{ $formattedDateNYC }} JAM | NYC</span></p>
    </div>
</div> --}}
<!-- Preloader End -->

<div class="onecontainer "></div>
<div class="twocontainer "></div>
<img class="logo threecontainer " src="{{ asset('website') }}/asset/images/logo/Red-Logo-Transparent-for-Desktop.gif" alt="logo">



<section id="navbar_main" class="d-none d-lg-block">

    <nav class="navbar navbar-expand-lg extra_nav pb-3">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active pt-0" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-0" href="{{ route('store') }}">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-0" href="{{ route('contact') }}">Contact</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-0" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-0" href="#journey_part">Journey to IFMH</a>
                    </li>

                </ul>
                <div class="logo_extra me-auto">
                    <a href="index.html">
                        <img src="{{ asset('website') }}/asset/images/logo/Red-Logo-Transparent-for-Desktop.gif"
                            alt="logo">
                    </a>
                    <p>SEED • TIME • IFMH<span>{{ $formattedDateNYC }} JAM | NYC</span></p>
                </div>
                <span class="navbar-text">
                    <div class="social_icon d-none d-sm-block">
                        <ul class="d-flex">
                            <form action="{{ route('search') }}" method="POST" enctype="multipart/form-data"
                                class="search">
                                @csrf
                                <div class="search__wrapper">
                                    <input type="text" name="search" value="" class="search__field">
                                    <button type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                            @if (Session::get('customer_id'))
                                <li class="noi_phone"><a
                                        href="{{ route('customer.profile') }}">{{ Session::get('customer_name') }}</a>
                                </li>
                                <li class="noi_phone"><a href="{{ route('customer.dashboard') }}" class="btn_ds"
                                        style="color: green">Deashboard</a></li>
                                <li class="noi_phone"><a href="{{ route('customer.logout') }}" class="btn_lg"
                                        style="color: red">Log Out</a></li>
                            @else
                                <li class="noi_phone"><a href="{{ route('customer.login') }}"><i
                                            class="fa-regular fa-user"></i></a></li>
                            @endif



                            <li>
                                <button class="btn btn-primary p-0" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                        class="fa-solid fa-cart-shopping"></i></button>

                                <span class="cart_doten">{{ count(ShoppingCart::all()) }}</span>
                            </li>
                        </ul>
                    </div>
                </span>
            </div>
        </div>

    </nav>






    <div class="offcanvas offcanvas-end " style="z-index:99999 ;" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel text-center">YOUR CART |</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <div class="shopoin_cart">
                @foreach (ShoppingCart::all() as $item)
                    <div class="box">
                        <a href="{{ route('remove.cart.product', ['id' => $item->__raw_id]) }}"
                            onclick="return confirm('Are you sure?')"><i class="fa fa-trash"
                                style="margin-top: -15px"></i></a>
                        <img src="{{ asset($item->image) }}" alt="">
                        <div class="content">
                            <h3>{{ $item->name }}</h3>
                            @if (Session::get('currency') == 'EUR')
                                <span>€ {{ $currency->EUR * ($item->qty * $item->price) }}</span>
                            @elseif (Session::get('currency') == 'GEP')
                                <span>E£ {{ $currency->GEP * ($item->qty * $item->price) }}</span>
                            @elseif (Session::get('currency') == 'AUD')
                                <span>A$ {{ $currency->AUD * ($item->qty * $item->price) }}
                                @else
                                    <span class="price">Price : ${{ $item->qty * $item->price }} </span>
                            @endif
                            @php
                                $sum = $sum + $item->qty * $item->price;
                            @endphp

                            <div class="input-group mb-3 st col-lg-8">
                                <div class="product-action">
                                    <form action="{{ route('uadate.cart.product') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" hidden name="id" value="{{ $item->__raw_id }}"
                                            style="margin:0px">
                                        <div class="input-group">
                                            <button onclick="producthandlechange('{{ $item->name }}',false)"
                                                class="btn btn-danger">
                                                -
                                            </button>
                                            <input class="form-control text-center" id="{{ $item->name }}"
                                                value="{{ $item->qty }}" name="qty" readonly min="1"
                                                required />
                                            <button onclick="producthandlechange('{{ $item->name }}',true)"
                                                class="btn btn-success">
                                                +
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


                <div class="total">
                    <ul>
                        @if (Session::get('currency') == 'EUR')
                            <li>Total: <span>€{{ $sum * $currency->EUR }}</span></li>
                        @elseif (Session::get('currency') == 'GEP')
                            <li>Total: <span>E£{{ $sum * $currency->GEP }}</span></li>
                        @elseif (Session::get('currency') == 'AUD')
                            <li>Total: <span>A${{ $sum * $currency->AUD }}</span></li>
                        @else
                            <li>Total: <span>${{ $sum }}</span></li>
                        @endif

                    </ul>
                    <a href="{{ route('checkout') }}" class="btn-c">Checkout</a>
                    <a href="{{ route('store') }}" class="btn-c">
                        <p>Continue Shopping...</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Navbar End -->




<!-- Responsive Navbar Start -->
<section class="nav_ani d-lg-none">
    <div class="extra_nav_items">
        <div class="container px-0">
            <div class="row mx-0">
                <div class="col-lg-12 px-0">
                    <div class="navbar-text">
                        <div class="social_icon">
                            <ul class="d-flex justify-content-end">
                                <form action="{{ route('search') }}" method="POST" enctype="multipart/form-data"
                                    class="search">
                                    @csrf
                                    <div class="search__wrapper">
                                        <input type="text" name="search" value="" class="search__field">
                                        <button type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                                @if (Session::get('customer_id'))
                                @else
                                    <li class="noi_phone"><a href="{{ route('customer.login') }}"><i
                                                class="fa-regular fa-user"></i></a></li>
                                @endif
                                {{-- <li class="noi_phone"><a href="{{ route('customer.login') }}" class="p-0"><i
                                            class="fa-regular fa-user"></i></a>
                                </li> --}}

                                <li class="cart_btn">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                                    <span class="cart_doten">{{ count(ShoppingCart::all()) }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg res_nav">
        <div class="container px-0">
            <img src="{{ asset('website') }}/asset/images/logo/Red-Logo-Transparent-for-Desktop.gif" class="res_logo"
                alt="">
            <button class="navbar-toggler nav_toggle_btn" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('store') }}">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('contact') }}">Contact</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#res_journey">Journey to IFMH</a>
                    </li>
                    @if (Session::get('customer_id'))
                        <li class="noi_phone"><a href="{{ route('customer.dashboard') }}" class="btn_ds"
                                style="color: green">Deashboard</a></li>
                        <li class="noi_phone"><a href="{{ route('customer.logout') }}" class="btn_lg"
                                style="color: red">Log Out</a></li>
                    @endif
                </ul>
            </div>

            <div class="time text-center pt-4">
                <p class="pb-2" style="padding: 0 50px 0 50px">SEED • TIME • IFMH <span>{{ $formattedDateNYC }} JAM | NYC</span></p>
            </div>
        </div>
    </nav>




    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel text-center">YOUR CART |</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="shopoin_cart">
                @foreach (ShoppingCart::all() as $item)
                    <div class="box">
                        <a href="{{ route('remove.cart.product', ['id' => $item->__raw_id]) }}"
                            onclick="return confirm('Are you sure?')"><i class="fa fa-trash"
                                style="margin-top: -15px"></i></a>
                        <img src="{{ asset($item->image) }}" alt="">
                        <div class="content">
                            <h3>{{ $item->name }}</h3>
                            @if (Session::get('currency') == 'EUR')
                                <span>€ {{ $currency->EUR * ($item->qty * $item->price) }}</span>
                            @elseif (Session::get('currency') == 'GEP')
                                <span>E£ {{ $currency->GEP * ($item->qty * $item->price) }}</span>
                            @elseif (Session::get('currency') == 'AUD')
                                <span>A$ {{ $currency->AUD * ($item->qty * $item->price) }}
                                @else
                                    <span class="price">Price : ${{ $item->qty * $item->price }} </span>
                            @endif
                            @php
                                $sum = $sum + $item->qty * $item->price;
                            @endphp

                            <div class="input-group mb-3 st col-lg-8">
                                <div class="product-action">
                                    <form action="{{ route('uadate.cart.product') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" hidden name="id" value="{{ $item->__raw_id }}"
                                            style="margin:0px">
                                        <div class="input-group">
                                            <button onclick="producthandlechange2('{{ $item->name }}',false)"
                                                class=" btn btn-danger">
                                                -
                                            </button>
                                            <input class="form-control text-center" id="{{ $item->name }}"
                                                value="{{ $item->qty }}" name="qty" readonly min="1"
                                                required />
                                            <button onclick="producthandlechange2('{{ $item->name }}',true)"
                                                class="btn btn-success">
                                                +
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


                <div class="total">
                    <ul>
                        @if (Session::get('currency') == 'EUR')
                            <li>Total: <span>€{{ $sum * $currency->EUR }}</span></li>
                        @elseif (Session::get('currency') == 'GEP')
                            <li>Total: <span>E£{{ $sum * $currency->GEP }}</span></li>
                        @elseif (Session::get('currency') == 'AUD')
                            <li>Total: <span>A${{ $sum * $currency->AUD }}</span></li>
                        @else
                            <li>Total: <span>${{ $sum }}</span></li>
                        @endif

                    </ul>
                    <a href="{{ route('checkout') }}" class="btn-c">Checkout</a>
                    <a href="{{ route('store') }}" class="btn-c">
                        <p>Continue Shopping...</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Responsive Navbar End -->
