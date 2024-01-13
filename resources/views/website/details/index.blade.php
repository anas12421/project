@extends('website.master')
@section('body')
    <style>
        a:hover {
            text-decoration: none;
        }

        /*===================================================
                                                                         Common css End
                                                        ======================================================*/

        /* SOCIAL
                                        .srote_del ul li a {
                                            background: rgb(0, 0, 0) !important;
                                            width: 25px;
                                            height: 25px;
                                            line-height: 25px;
                                            border-radius: 50%;
                                            text-align: center;
                                            color: #ffff;
                                        }
                                        .srote_del {
                                            padding-top: 20px;
                                        }


                                        .srote_del ul {
                                            float: right;
                                        }

                                        .srote_del ul li {
                                            padding: 0 5px;
                                        } */

        /* ############## SHOP DETALIS PART START */











        .size_and-other .btn {
            color: #000000 !important;
            border: 1px solid #000 !important;
            margin: 16px 8px !important;
            border-radius: 0px;
        }

        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            background-color: #000;
            border: 2px solid #000 !important;
            color: #ffff !important;
        }

        .size_and-other span a {
            color: #887f7f;
            font-size: 16px;
            font-weight: 700;
            border-bottom: 1px solid #887f7f;
            letter-spacing: 1px;
            float: right;
        }

        .shop-del p {
            font-size: 13px;
            font-weight: 500;
            color: #222020;
            border-bottom: 1px solid #a49b9b;
            padding: 31px 0 38px 0px;
        }

        .shop-del p em {
            font-weight: 700;
        }

        .shop-del p span {
            font-size: 14px;
            font-weight: 800;
            color: #af00f4;
            font-family: sans-serif;
        }

        .shop-del p a {
            font-size: 16px;
            font-weight: 500;
            margin-left: 10px;
            color: #887f7f;
            border-bottom: 1px solid #887f7f;
        }



        .quantity .input-group {
            width: 162px;
            height: 52px;
            margin-top: 19px;
        }

        .quantity h6 {
            font-size: 19px;
            font-weight: 500;
            color: #222020;
            padding-top: 36px;
        }

        .st input {
            background: #ffffff !important;
            text-align: center;
        }


        .more a {
            text-align: center;
            color: #222020;
            font-size: 16px;
            font-weight: 500;
            padding: 17px 0 0 95px;
        }

        .more p {
            font-size: 15px;
            font-weight: 500;
            color: #222020;
            padding-top: 20px;
        }

        .more p span {
            font-size: 15px;
            font-weight: 700;
            color: #af00f4;
            margin-left: -7px;
            letter-spacing: 0px;
            font-family: sans-serif;
        }

        .vt {
            text-align: center !important;
            font-size: 16px !important;
            font-weight: 500 !important;
            padding: 0px 0 0 1px !important;
            color: #887f7f !important;
            border-bottom: 1px solid #887f7f !important;
        }


        /* FOOTER */
        #footer-part {
            margin-top: 60px;
        }

        /* ############## SHOP DETALIS PART END */



        /* ##############  FOOTER START END ############## */
        .dropdown {
            padding: 18px 0 0 73px;
        }

        .footer-input button {
            margin: -64px 0 0 217px !important;
            color: #ffffff !important;
            border: 1px solid #000 !important;
            border-radius: 0px;
        }

        .form-control {
            width: 79%;
        }

        .footer-input input {
            margin-top: 20px;
        }

        .dropdown {
            padding: 21px 0 0 85px;
        }

        .dropdown-menu {
            --bs-dropdown-min-width: 5rem;
        }

        /* ############## FOOTER START END############## */

        .size_and-other .bt button {
            padding: 9px 111px;
            font-weight: 700;
            font-size: 16px;
            border: 1px solid #222020;
            letter-spacing: 3px;
            transition: all linear .2s;
            background-color: #222020;
            color: white
        }

        .size_and-other .bt button:hover {
            background-color: #545151;
            color: white
        }


        @media (max-width: 393.852px) {
            .size_and-other .bt button {
                padding: 11px 90px !important;
            }
        }


        /* ##############  HOME RESPONSIVE START END ############## */
    </style>
    <section id="shop_del_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shop_del_img">
                        <img width="350" height="350" src="{{ asset($product->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shop-del">
                        <span>Home / T-SHERT / </span>
                        <h3>{{ $product->name }}</h3>
                        <p>Pay in 4 interest-free installments for orders over <em> $50.00</em>
                            with <span>shop Pay</span> <a href="#">Learn more</a></p>
                    </div>
                    <div class="size_and-other">
                        <form id="heatFormSelector" action="{{ route('add.cart') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden name="id" value="{{ $product->id }}">
                            <input type="text" hidden name="color" value="{{ $product->product_color }}">
                            <span style="display: block;font-weight:bold">Color: {{ $product->product_color }}</span>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                @foreach ($anotherProduct as $item)
                                    <a href="{{ route('details', ['id' => $item->id]) }}" class="btn">

                                        {{-- <input style="background-color: #fff;" type="radio" class="btn-check"
                                            name="btnradio_color" value="white" id="btnradio1">
                                        <label style="background-color: #fff;" class="btn btn-outline-primary"
                                            for="btnradio1">
                                            <img width="30" height="30" src="{{ asset($item->image) }}"
                                                alt="">
                                        </label> --}}
                                        <img class="color" width="30" height="30" src="{{ asset($item->image) }}"
                                            alt="">
                                        @if ($product->product_color == $item->product_color)
                                            <i class="fa-solid fa-check"></i>
                                        @endif
                                    </a>
                                @endforeach
                                {{-- <input style="background-color: #fff;" type="radio" class="btn-check"
                                    name="btnradio_color" value="black" id="btnradio2">
                                <label style="background-color: #fff;" class="btn btn-outline-primary" for="btnradio2">
                                    <img width="30" height="30"
                                        src="{{ asset('website') }}/asset/images/store-img/product-5.png" alt="">
                                </label> --}}
                            </div>

                            <span style="display: block;">SIZE <a href="#">Size Card</a></span>
                            <div class="btn-group cen" role="group" aria-label="Basic radio toggle button  group">
                                @if ($product->s == 1)
                                    <input type="radio" class="btn-check" name="size" value="s" id="btnradio3"
                                        autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio3">S</label>
                                @endif

                                @if ($product->m == 1)
                                    <input type="radio" class="btn-check" name="size" value="m" id="btnradio4"
                                        autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio4">M</label>
                                @endif

                                @if ($product->l == 1)
                                    <input type="radio" class="btn-check" name="size" value="l" id="btnradio5"
                                        autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio5">L</label>
                                @endif

                                @if ($product->xl == 1)
                                    <input type="radio" class="btn-check" name="size" value="xl" id="btnradio6"
                                        autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio6">XL</label>
                                @endif

                            </div>
                            <div class="quantity">
                                <h6>Quantity:</h6>
                                <div class="input-group mb-3 st col-lg-8">
                                    <button class="input-group-text decrement-btn"><i
                                            class="fa-solid fa-minus"></i></button>
                                    <input type="text" class="form-control input-qty" name="qty" value="1"
                                        readonly>
                                    <button class="input-group-text increment-btn"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="dot-online">
                                <span>In stock, ready to ship</span>
                            </div>
                            <div class="dot"></div>
                            <div class="form-check ck">
                                <input class="form-check-input" name="check_box" type="checkbox" value="1"
                                    id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Read Product Information Below
                                </label>
                            </div>
                            <div class="mt-3 bt">
                                <button value="cart" name="policy">Add To Card</button>
                            </div>
                            <div class="mt-3 bt">
                                <button name="policy" value="online">
                                    Buy With <img width="25" height="25"
                                        src="{{ asset('website') }}/asset/images/shop_detalis-img/knowledge_graph_logo-removebg-preview.png"
                                        alt="">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
