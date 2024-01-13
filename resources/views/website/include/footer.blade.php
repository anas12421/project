<footer id="footer-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="social_icon_f">
                    {{-- <ul class="d-flex">
                        <li><a href="{{$media->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="{{$media->youtube}}"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#!"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href="{{$media->fb}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                    </ul> --}}
                </div>
                <div class="footer-icon-b">
                    <p>@IFindMyselfHere</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h3>MAIN MENUE</h3>
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">STORE</a></li>
                                <li><a href="#">CONTECT</a></li>
                                <li><a href="#">ABOUT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-content">
                            <h3>SUPPORT</h3>
                            <ul>
                                <li><a href="#">RETURNS</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h3>BORING STUFF</h3>
                            <ul>
                                <li><a href="#">LEGAL NOTICE</a></li>
                                <li><a href="#">PRIVACY POLICY</a></li>
                                <li><a href="#">TERMS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-img">
                    <img src="{{ asset('website') }}/asset/images/footer-card-img/footer-logo.png" alt="">
                    <div class="dropdown  text-center">
                        {{-- <a style="background: #000;" class="btn btn-dark dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            USD $
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-center" href="#">EUR</a></li>
                            <li><a class="dropdown-item text-center" href="#">GEP</a></li>
                            <li><a class="dropdown-item text-center" href="#">AUD</a></li>
                        </ul> --}}
                        <form action="{{ route('exchangeCurrency') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden name="currency_form" value="USD">
                            <select name="currency_to" onchange="this.form.submit()"
                                style="background: #000; color:white ;padding:5px 15px;border-radius:5px
                            ">
                                <option value="USD" {{ Session::get('currency') == 'USD' ? 'selected' : '' }}>USD $
                                </option>
                                <option value="EUR" {{ Session::get('currency') == 'EUR' ? 'selected' : '' }}>EUR €
                                </option>
                                <option value="GEP" {{ Session::get('currency') == 'GEP' ? 'selected' : '' }}>GEP E£
                                </option>
                                <option value="AUD" {{ Session::get('currency') == 'AUD' ? 'selected' : '' }}>AUD A$
                                </option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-input">
                    <h4>JOIN THE IFMH DELEGATION</h4>
                    <p>SIGN UP TO OUR EMAIL LIST AND GET 10% OFF YOUR FIRST ORDER</p>
                    <form action="{{ route('subscribe') }}" method="POST" enctype="multipart/form-data"
                        class="input-wrapper input-wrapper-inline input-wrapper-round">
                        @csrf
                        <input type="email"
                            class="form-control email font-size-md @error('email') is-invalid @enderror" name="email"
                            id="email2" placeholder="Email Address">
                        <button class="btn btn-dark" type="submit">Join</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="out-con">
            <div class="row">
                <div class="col-lg-4">
                    <div class="buttom-con-1">
                        <p>&copy;I Find Myself Here. All Rights Reserved 2023</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buttom-con-1">
                        <p>Thank you for choosing IFMH | Tag us in your #IFMH reels!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
