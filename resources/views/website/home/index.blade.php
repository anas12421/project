@extends('website.master_home')
@section('body')
    @include('sweetalert::alert')
    <section id="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_img">
                        <div class="banner-img-slider W">
                            <img class="w-100 img-fluid" src="{{ asset($banner->image) }}" alt="">
                        </div>
                        <div class="overly">
                            <a href="#" class="extra">{{ $banner->banner_text }}</a>
                            <a href="{{ route('store') }}">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="product-part">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                        {{-- <div class="products"> --}}
                        {{-- <div class="product-img text-center"> --}}
                        <a href="{{ route('details', ['id' => $product->id]) }}">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset($product->image) }}" alt="Error" height="220px"
                                            width="200px">
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
                @endforeach
                {{-- @foreach ($products as $product)
                    <div class="col-lg-3">
                        <div class="products">
                            <div class="product-img text-center">
                                <a href="{{ route('details', ['id' => $product->id]) }}"><img
                                        src="{{ asset($product->image) }}" alt="Error">
                                    <div class="aria col-lg-10">
                                        <p>IFMH 2 Red - Raw Neck Tee</p>
                                        <ul class="d-flex">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <span>${{ $product->price }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}

                <div class="product-but">
                    <a href="{{ route('store') }}">View All Products</a>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section id="mission_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mission_text">
                        <h2>Our Mission</h2>
                        {{-- <p>May all your experiences, passions, and procrastinations with resilience and patience, backed
                            by a prolific village lead you to declare – I Find Myself Here.
                            <span>I Find Myself Here is the story of the journey of life. Here is what you made it and
                                what you make it. Harvest “Here” is the manifestation of your seed “I Find” and time
                                “Myself”. Like the seasons for a farmer – Seed, Time, Harvest; our unique circumstances
                                and journeys will always lead us here – at our current location and state of mind. If
                                you feel lost, being found is a easy as planting new seeds. These seeds can be positive
                                conversations and declarations or new routines and expectations. Then, give yourself
                                time to adapt and grow. I Find Myself Here is for everyone who desires to live their
                                best life in every season.</span>
                        </p> --}}
                        @foreach ($missions as $mission)
                            <p>{!! $mission->mission_text !!}</p>
                        @endforeach


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-img">
                        @foreach ($missions as $mission)
                            <img class="img-fluid w-100" src="{{ asset($mission->image) }}" alt="" height="100">
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="review_part">
        <div class="container">
            <div class="row review_slider">
                @foreach ($customers as $customer)
                    <div class="col-lg-3">
                        <div class="review-contents">
                            <img class="img-fluid w-100" src="{{ asset($customer->image) }}" alt="">
                            <div class="overly">
                                <?php
                                $first = mb_strimwidth($customer->first_name, 0, 1, '');
                                $last = mb_strimwidth($customer->last_name, 0, 1, '');
                                ?></p>
                                <h5>{{ $first }}{{ $last }}</h5>
                            </div>
                        </div>
                        <div class="review-text">
                            <h4>{{ $customer->first_name }} {{ $customer->last_name }}</h4>
                            <p>Love the quality of this shirt, it feels amazing!</p>
                            <ul class="d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-3">
                    <div class="review-contents">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/asset/images/review-img/review-2.png"
                            alt="">
                        <div class="overly">
                            <h5>MJ</h5>
                        </div>
                    </div>
                    <div class="review-text">
                        <h4>Marlon Jake</h4>
                        <p>Love the quality of this shirt, it feels amazing!</p>
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="review-contents">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/asset/images/review-img/review-4.png"
                            alt="">
                        <div class="overly">
                            <h5>MJ</h5>
                        </div>
                    </div>
                    <div class="review-text">
                        <h4>Marlon Jake</h4>
                        <p>Love the quality of this shirt, it feels amazing!</p>
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="review-contents">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/asset/images/review-img/review-2.png"
                            alt="">
                        <div class="overly">
                            <h5>MJ</h5>
                        </div>
                    </div>
                    <div class="review-text">
                        <h4>Nemma Miller</h4>
                        <p>Feels like luxury, the unboxing was a pleasantly surprising experience!</p>
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="review-contents">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/asset/images/review-img/review-3.png"
                            alt="">
                        <div class="overly">
                            <h5>SB</h5>
                        </div>
                    </div>
                    <div class="review-text">
                        <h4>Sean Brooks</h4>
                        <p>I love this boxy tee, it was a statement piece. I got so many complements.</p>
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="review-contents">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/asset/images/review-img/review-4.png"
                            alt="">
                        <div class="overly">
                            <h5>JB</h5>
                        </div>
                    </div>
                    <div class="review-text">
                        <h4>Jane Beckham</h4>
                        <p>Drip, drip, drip, drip! Love the quality, the look, its perfect!</p>
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- New Journy Start -->

    <section id="journey_part" class="d-none d-lg-block">
        <div class="container">
            <style>
                #container_cus {
                    position: relative;
                    width: 100%;
                    height: 450px;
                    aspect-ratio: 2/1;
                    margin: auto;
                    overflow-x: scroll;
                    overflow-y: hidden;
                    white-space: nowrap;
                    scroll-snap-type: x mandatory;
                }

                .blue {
                    /* background-color: lightblue; */
                    height: 400px;
                    width: 25%;
                    aspect-ratio: 4/3;
                    margin-top: -150px;
                }


                .blue,
                .green {
                    margin: 2px;
                    display: inline-block;
                    scroll-snap-align: start;
                    scroll-margin-left: 20px;
                }
            </style>


            <h3 class="text-center mb-3">Journey to IFMH</h3>


            <div id="container_cus">
                @foreach ($jounreys as $jounrey)
                    <div class="blue">
                        <div class="text-center">
                            <span class="text-center">{{ $jounrey->date }}</span>
                        </div>
                        <div class="samer-line  d-none d-md-block">
                            <div class="all-mini-dot">
                            </div>
                        </div>
                        <div class="jor_img_and_video">
                            {{-- <span class="d-block d-md-none">November 2017</span> --}}
                            <div class="col-lg-4">
                                <img src="{{ asset($jounrey->image) }}">
                            </div>
                            <div class="overly_jor">
                                <a class="venobox" data-autoplay="true" data-vbtype="video"
                                    href="{{ $jounrey->link }}"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div>

                                <p class="text-wrap text-center">
                                    <?php
                                    echo mb_strimwidth($jounrey->journey_text, 0, 135, '...');
                                    ?></p>
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach

                <div class="blue">
                    <div class="text-center">
                        <span class="text-center">November 2017</span>
                    </div>
                    <div class="samer-line  d-none d-md-block">
                        <div class="all-mini-dot">
                        </div>
                    </div>
                    <div class="jor_img_and_video">
                        {{-- <span class="d-block d-md-none">November 2017</span> --}}
                        <div class="col-lg-4">
                            <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png" alt="">
                        </div>
                        <div class="overly_jor">
                            <a class="venobox" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div>
                            <?php
                            // echo mb_strimwidth($product->name, 0, 18, '...');
                            ?></p>
                            <p class="text-wrap text-center">IFMH Logo Made for My Youtube Banner
                                I made IFMH logo and vlog intro video then changed all my social media handles to
                                @ifindmyselfhere</p>
                        </div>

                    </div>
                </div>
                <div class="blue">
                    <div class="text-center">
                        <span class="text-center">November 2017</span>
                    </div>
                    <div class="samer-line  d-none d-md-block">
                        <div class="all-mini-dot">
                        </div>
                    </div>
                    <div class="jor_img_and_video">
                        {{-- <span class="d-block d-md-none">November 2017</span> --}}
                        <div class="col-lg-4">
                            <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png" alt="">
                        </div>
                        <div class="overly_jor">
                            <a class="venobox" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div>
                            <?php
                            // echo mb_strimwidth($product->name, 0, 18, '...');
                            ?></p>
                            <p class="text-wrap text-center">IFMH Logo Made for My Youtube Banner
                                I made IFMH logo and vlog intro video then changed all my social media handles to
                                @ifindmyselfhere</p>
                        </div>

                    </div>
                </div>
                <div class="blue">
                    <div class="text-center">
                        <span class="text-center">November 2017</span>
                    </div>
                    <div class="samer-line  d-none d-md-block">
                        <div class="all-mini-dot">
                        </div>
                    </div>
                    <div class="jor_img_and_video">
                        {{-- <span class="d-block d-md-none">November 2017</span> --}}
                        <div class="col-lg-4">
                            <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png" alt="">
                        </div>
                        <div class="overly_jor">
                            <a class="venobox" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div>
                            <?php
                            // echo mb_strimwidth($product->name, 0, 18, '...');
                            ?></p>
                            <p class="text-wrap text-center">IFMH Logo Made for My Youtube Banner
                                I made IFMH logo and vlog intro video then changed all my social media handles to
                                @ifindmyselfhere</p>
                        </div>

                    </div>
                </div>
                <div class="blue">
                    <div class="text-center">
                        <span class="text-center">November 2017</span>
                    </div>
                    <div class="samer-line  d-none d-md-block">
                        <div class="all-mini-dot">
                        </div>
                    </div>
                    <div class="jor_img_and_video">
                        {{-- <span class="d-block d-md-none">November 2017</span> --}}
                        <div class="col-lg-4">
                            <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png" alt="">
                        </div>
                        <div class="overly_jor">
                            <a class="venobox" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div>
                            <?php
                            // echo mb_strimwidth($product->name, 0, 18, '...');
                            ?></p>
                            <p class="text-wrap text-center">IFMH Logo Made for My Youtube Banner
                                I made IFMH logo and vlog intro video then changed all my social media handles to
                                @ifindmyselfhere</p>
                        </div>

                    </div>
                </div>
                <div class="blue">
                    <div class="text-center">
                        <span class="text-center">November 2017</span>
                    </div>
                    <div class="samer-line  d-none d-md-block">
                        <div class="all-mini-dot">
                        </div>
                    </div>
                    <div class="jor_img_and_video">
                        {{-- <span class="d-block d-md-none">November 2017</span> --}}
                        <div class="col-lg-4">
                            <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png" alt="">
                        </div>
                        <div class="overly_jor">
                            <a class="venobox" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div>
                            <?php
                            // echo mb_strimwidth($product->name, 0, 18, '...');
                            ?></p>
                            <p class="text-wrap text-center">IFMH Logo Made for My Youtube Banner
                                I made IFMH logo and vlog intro video then changed all my social media handles to
                                @ifindmyselfhere</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>


    </section>


    <!-- New Journy End -->




    <!-- Journey Start -->
    {{-- <section id="journey_part" class="d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="jur-heaer text-center">
                    <h2>Journey to IFMH</h2>
                </div>
                <div class="jor_main">
                    <div class="row  ">
                        <div class="col-lg-12">
                            <div class="date text-center d-none d-md-block">
                                <span>November 2017</span>
                                <span>November 2017</span>
                                <span>November 2017</span>
                                <span>November 2017</span>
                                <span>November 2017</span>
                            </div>
                            <div class="samer-line  d-none d-md-block">
                                <div class="right-dot"></div>
                                <div class="all-mini-dot">
                                    <div class="right-all">
                                        <div class="last-r"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="journey_img">
                            <div class="jor_img_and_video">
                                <span class="d-block d-md-none">November 2017</span>
                                <div class="col-lg-4">
                                    <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png"
                                        alt="">
                                </div>
                                <div class="overly_jor">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i
                                            class="fa-solid fa-play"></i></a>
                                </div>
                                <p class="oioo">First Time Saying I Find Myself Here While doing a photography BTS
                                    reel
                                    for instagram, I said that faithful phrase, and never looked back! </p>
                            </div>
                            <div class="jor_img_and_video">
                                <span class="d-block d-md-none">November 2017</span>
                                <div class="col-lg-4">
                                    <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png"
                                        alt="">
                                </div>
                                <div class="overly_jor">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i
                                            class="fa-solid fa-play"></i></a>
                                </div>
                                <p class="oioo">IFMH Logo Made for My Youtube Banner

                                    I made IFMH logo and vlog intro video then changed all my social media handles to
                                    @ifindmyselfhere</p>
                            </div>
                            <div class="jor_img_and_video">
                                <span class="d-block d-md-none">November 2017</span>
                                <div class="col-lg-4">
                                    <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png"
                                        alt="">
                                </div>
                                <div class="overly_jor">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i
                                            class="fa-solid fa-play"></i></a>
                                </div>
                                <p class="oioo">First Time Saying I Find Myself Here While doing a photography BTS
                                    reel
                                    for
                                    instagram, I said that faithful phrase, and never looked back!</p>
                            </div>
                            <div class="jor_img_and_video">
                                <span class="d-block d-md-none">November 2017</span>
                                <div class="col-lg-4">
                                    <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png"
                                        alt="">
                                </div>
                                <div class="overly_jor">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i
                                            class="fa-solid fa-play"></i></a>
                                </div>
                                <p class="oioo">First Time Saying I Find Myself Here While doing a photography BTS
                                    reel
                                    for
                                    instagram, I said that faithful phrase, and never looked back!</p>
                            </div>
                            <div class="jor_img_and_video">
                                <span class="d-block d-md-none">November 2017</span>
                                <div class="col-lg-4">
                                    <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png"
                                        alt="">
                                </div>
                                <div class="overly_jor">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i
                                            class="fa-solid fa-play"></i></a>
                                </div>
                                <p class="oioo">First Time Saying I Find Myself Here While doing a photography BTS
                                    reel
                                    for
                                    instagram, I said that faithful phrase, and never looked back!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> --}}
    <!-- Journey End -->


    <!-- Responsive Journey Start -->
    <section id="res_journey" class="d-lg-none">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Journey to IFMH
                    </h2>
                </div>
            </div>
            <div class="res_main_slider">
                @foreach ($jounreys as $jounrey)
                    <div class="res_slider">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="jor_img_and_video res_img_and_video text-center">
                                    <span class="text-center">{{ $jounrey->date }}</span>
                                    <div class="ms-0">
                                        <img src="{{ asset($jounrey->image) }}" alt="">
                                    </div>
                                    <div class="overly_jor">
                                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                                            href="{{ $jounrey->link }}"><i class="fa-solid fa-play"></i></a>
                                    </div>
                                    <p class="oioo"><?php
                                    echo mb_strimwidth($jounrey->journey_text, 0, 135, '...');
                                    ?></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="res_slider">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="jor_img_and_video res_img_and_video text-center">
                                <span class="text-center">November 2017</span>
                                <div class="ms-0">
                                    <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png"
                                        alt="">
                                </div>
                                <div class="overly_jor">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i
                                            class="fa-solid fa-play"></i></a>
                                </div>
                                <p class="oioo">IFMH Logo Made for My Youtube Banner I made IFMH logo and vlog intro
                                    video then changed all my social media handles to @ifindmyselfhere</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="res_slider">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="jor_img_and_video res_img_and_video text-center">
                                <span class="text-center">November 2017</span>
                                <div class="ms-0">
                                    <img src="{{ asset('website') }}/asset/images/journey-img/journey 1.png"
                                        alt="">
                                </div>
                                <div class="overly_jor">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=HE9JioDuXkQ"><i
                                            class="fa-solid fa-play"></i></a>
                                </div>
                                <p class="oioo">First Time Saying I Find Myself Here While doing a photography BTS
                                    reel
                                    for instagram, I said that faithful phrase, and never looked back!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Responsive Journey End -->
@endsection
