@extends('website.master')
@section('body')
<style>
    .message {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
    <section id="product-part">
        <div class="container">
            <div class="row">
                @php
                    $c = true;
                @endphp
                @foreach ($products as $product)
                    <div class="col-lg-2 text-center">
                        {{-- <div class="products"> --}}
                        {{-- <div class="product-img text-center"> --}}
                        <a href="{{ route('details', ['id' => $product->id]) }}">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset($product->image) }}" alt="Error" height="220px" width="200px">
                                    </div>
                                    <div class="flip-card-back">
                                        {{-- <p class="title">BACK</p>
                                        <p>Leave Me</p> --}}
                                        <img src="{{ asset($product->image_back) }}" alt="Error" height="220px"
                                            width="200px">
                                    </div>
                                </div>
                            </div>
                            <div class="products">
                                <div class="product-img text-center">
                                    <div class="aria col-lg-10">
                                        <p style="color: black;width:100%">
                                            <?php
                                            echo mb_strimwidth($product->name, 0, 18, '...');
                                            ?></p>
                                        <ul class="d-flex">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        {{-- <span>${{ $product->price }}</span> --}}
                                        @if (Session::get('currency') == 'EUR')
                                            <span>€ {{ $currency->EUR * $product->price }}</span>
                                        @elseif (Session::get('currency') == 'GEP')
                                            <span>E£ {{ $currency->GEP * $product->price }}

                                            </span>
                                        @elseif (Session::get('currency') == 'AUD')
                                            <span>A$ {{ $currency->AUD * $product->price }}
                                            @else
                                                <span>${{ $product->price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                        {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                    @php
                        $c = false;
                    @endphp
                @endforeach

                @if ($c)
                    <div class="message text-center">
                        <h3>No results could be found</h3>
                    </div>
                @endif

                <!-- <div class="product-but">
                                    <a href="#">View All Products</a>
                                </div> -->
            </div>
        </div>
        </div>
    </section>
@endsection
