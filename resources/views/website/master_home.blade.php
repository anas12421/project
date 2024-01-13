<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Protfolio-1</title>
    @include('website.include.style')
</head>

<body>
    <!-- ######## POPUP START ######## -->
    <style>
        .popup {
            display: none;
        }
    </style>
    <div class="popup">
        <div class="pop_body">
            <div class="close">
                <i class="fas fa-times"></i>
            </div>
            <div class="popup-img">
                <img src="{{ asset('website') }}/asset/images/popup-img/newsletter-1.jpg" alt="">
            </div>
            <div class="overlyfast">
                <h4>GET UP TO<span>25% OFF</span></h4>
                <h2>Sign up to Find I My Self</h2>
                <P>Subscribe to the Find My Self market newsletter to receive updates on special offers.</P>
                <form action="{{ route('subscribe') }}" method="POST" enctype="multipart/form-data"
                    class="input-wrapper input-wrapper-inline input-wrapper-round">
                    @csrf
                    <input type="email" class="form-control email font-size-md @error('email') is-invalid @enderror"
                        name="email" id="email2" placeholder="Your email address">
                    <button class="btn btn-dark" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <!-- ######## POPUP END ####### -->

    @include('website.include.header_home')

    @yield('body')

    @include('website.include.footer')
    @include('website.include.script')
    
</body>

</html>
