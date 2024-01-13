@extends('website.master')
@section('body')
    {{-- <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Checkout</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="checkout-wrapper section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="cart-header">
                        <div class="cart-total"><span>Total item ({{ count(ShoppingCart::all()) }})</span></div>
                    </div>
                    <ul class="cart-list">
                        @php
                            $sum = 0;
                        @endphp
                        @foreach (ShoppingCart::all() as $item)
                            <li class="cart-item">
                                <div class="cart-media"><a href="#"><img src="{{ asset($item->image) }}" alt="product"
                                            height="100px"></a>
                                    {{-- <button>
                                        <a href="{{ route('remove-cart-product', ['id' => $item->__raw_id]) }}"
                                            class="cart-delete" onclick="return confirm('Are you sure?')"><i
                                                class="far fa-trash-alt"></i>
                                        </a></button> --}}
                                </div>
                                <div class="cart-info-group">
                                    <div class="cart-info">
                                        <h6><a href="product-single.html">{{ $item->name }}</a></h6>
                                        <p>Unit Price - {{ $item->price }} </p>
                                        <p style="font-weight: 500">Subtotal({{ $item->price }} X {{ $item->qty }} ) :
                                            {{ $item->price * $item->qty }} </p>
                                    </div>
                                    {{-- <div class="cart-action-group">
                                        <div class="product-action">
                                            <form action="{{ route('uadate-cart-product', ['id' => $item->__raw_id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <button onclick="producthandlechange('{{ $item->name }}',false)"
                                                        class=" btn btn-danger">
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
                                        <h6>৳ {{ $item->qty * $item->price }}</h6>
                                    </div> --}}
                                </div>
                            </li>
                            @php
                                $sum = $sum + $item->qty * $item->price;
                            @endphp
                        @endforeach

                    </ul>
                    @php
                        Session::put('order_total', $sum);
                    @endphp
                    <div class="cart-footer">
                        <a class="cart-checkout-btn" href="#"><span class="checkout-label">Total</span><span
                                class="checkout-price input-group"><input type="text" readonly id="total_tk"
                                    value="{{ $sum }}" name="delivery_cost">.00 $</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-steps-form-style-1">
                        <ul class="nav nav-pills mt-2">
                            <li>
                                <a href="" class="nav-link active" data-bs-target="#cash" data-bs-toggle="pill"
                                    style="background-color: #fd7e14">Delivery </a>
                            </li>
                            {{-- <li>
                                <a href="" class="nav-link disabled" data-bs-target="#online"
                                    data-bs-toggle="pill">SSL Bank(Disabled)</a>
                            </li> --}}
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="cash">
                                <div class="row">
                                    <form action="{{ route('order') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <input type="text" hidden name="id" value="{{ $customer->id }}"> --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form form-default ">
                                                    <label>Firtst Name :</label>
                                                    <div class="form-input form">
                                                        @if (isset($customer->id))
                                                            <input type="text" required
                                                                value="{{ $customer->first_name }}" name="name"
                                                                placeholder="Full Name" readonly>
                                                        @else
                                                            <input class="form-control @error('name') is-invalid @enderror"
                                                                type="text" name="name" value="{{ old('name') }}"
                                                                placeholder="Full Name">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default ">
                                                    <label>Last Name :</label>
                                                    <div class="form-input form">
                                                        @if (isset($customer->id))
                                                            <input type="text" required
                                                                value="{{ $customer->last_name }}" name="last_name"
                                                                placeholder="Full Name" readonly>
                                                        @else
                                                            <input
                                                                class="form-control @error('last_name') is-invalid @enderror"
                                                                type="text" name="last_name"
                                                                value="{{ old('last_name') }}" placeholder="Full Name">
                                                            @error('last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form form-default ">
                                                    <label>Email Address :</label>
                                                    <div class="form-input form">
                                                        @if (isset($customer->id))
                                                            <input type="email" required value="{{ $customer->email }}"
                                                                name="email" placeholder="Email Address" readonly>
                                                        @else
                                                            <input class="form-control @error('email') is-invalid @enderror"
                                                                type="email" name="email" value="{{ old('email') }}"
                                                                placeholder="Email Address">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Phone Number :</label>
                                                    <div class="form-input form">
                                                        @if (isset($customer->id))
                                                            <input type="text" required value="{{ $customer->mobile }}"
                                                                name="mobile" placeholder="Phone Number" readonly>
                                                        @else
                                                            <input
                                                                class="form-control @error('mobile') is-invalid @enderror"
                                                                type="text" name="mobile" value="{{ old('mobile') }}"
                                                                placeholder="Phone Number">
                                                            @error('mobile')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-default ">
                                                <label>Delivery Address :</label>
                                                <div class="form-input form">
                                                    <textarea name="delivery" class="form-control @error('delivery') is-invalid @enderror"
                                                        placeholder="Order delivery Address" style="height: 100px">{{ old('delivery') }}</textarea>
                                                    @error('delivery')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div class="col-md-12">
                                        @if (isset($customer->id))
                                        @else
                                            <div class="single-form ">
                                                <input class="pass_btn @error('password') is-invalid @enderror" required
                                                    name="password" type="password" placeholder="Creat New Password"
                                                    style="text-align: left">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        @endif
                                        {{-- <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Payment Type:</label>
                                                <div>
                                                    <label class="desing">
                                                        <input type="radio" name="payment_type" checked
                                                            value="Cash On Delivery">
                                                        <img src="{{ asset('website') }}/image/pngtree-online-shop-cash-on-delivery-icon-png-image_6364043-removebg-preview.png"
                                                            alt="" style="width: 100px">
                                                    </label>
                                                    <label class="desing">
                                                        <input type="radio" name="payment_type" value="Bkash">
                                                        <img src="{{ asset('website') }}/image/BKash-bKash-Logo.wine.png"
                                                            alt="" style="width: 100px ">
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-12">
                                            <div class="single-form form-default mt-2">
                                                <label>Delivery Charges:</label>
                                                <div>
                                                    <input type="radio" name="delivery_charges" value="60"
                                                        id="match">
                                                    <label for="match">
                                                        <p style="color: black;font-weight:bold">INSIDE DHAKA 60৳</p>
                                                    </label>
                                                    <br>
                                                    <input type="radio" name="delivery_charges" value="120"
                                                        id="match2">
                                                    <label for="match2">
                                                        <p style="color: black;font-weight:bold">OUTSIDE DHAKA 120৳</p>
                                                    </label>
                                                    <br>
                                                    <input type="radio" name="delivery_charges" value="0" checked
                                                        id="match3">
                                                    <label for="match3">
                                                        <p style="color: black;font-weight:bold">PICKUP POINT BASHUNDHARA
                                                            R/A</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div class="single-form button mt-2">
                                                {{-- <button class="btn" id="confirmOrderButton" type="submit">Confirm
                                                    Order</button> --}}
                                                <button class="btn btn-primary m-custom" type="submit"
                                                    style="background-color: #fd7e14;width:100%;border-radius:5px;border:none">Proceed
                                                    To Payment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
