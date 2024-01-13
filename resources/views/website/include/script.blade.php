<script src="{{ asset('website') }}/asset/js/jquery-1.12.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>

<script
    src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-44fe83e49b63affec96918c9af88c0d80b209a862cf87ac46bc933074b8c557d.js">
</script>



<script src="{{ asset('website') }}/asset/js/all.min.js"></script>
<script src="{{ asset('website') }}/asset/js/slick.min.js"></script>
<script src="{{ asset('website') }}/asset/js/venobox.min.js"></script>
<script src="{{ asset('website') }}/asset/js/script.js"></script>

<script>
    ScrollTrigger.create({
        animation: gsap.from(".logo", {
            y: "50vh",
            scale: 4,
            yPercent: -50
        }),
        scrub: true,
        trigger: ".twocontainer",
        start: "top bottom",
        endTrigger: '.twocontainer',
        end: 'top center',
        markers: false,
        pin: false,
        pinSpacing: false
    });
</script>

{{-- <script>
    $(document).ready(function() {
        $('.close_btn, .cart_overlay').on('click', function() {
            $('.cart_sidebar').removeClass('active');
            $('.cart_overlay').removeClass('active');
        });

        $('.cart_btn').on('click', function() {
            $('.cart_sidebar').addClass('active');
            $('.cart_overlay').addClass('active');
        });
    });

    $(document).ready(function() {
        $('.offcanvas_close, .offcanvas_overlay').on('click', function() {
            $('.main_menu_inner').removeClass('show');
            $('.offcanvas_overlay').removeClass('active');
        });
        $('.mobile_menu_btn').on('click', function() {
            $('.offcanvas_overlay').addClass('active');
        });
        $('.mobile_menu_btn2').on('click', function() {
            $('.offcanvas_overlay').addClass('active');
        });
    });
    // offcanvas - end
    $('.close').on('click', function() {
        $('.popup').fadeOut();
    });

    $('.review_slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,

        responsive: [{
                breakpoint: 885,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 430,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 393,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]

    });
</script> --}}
<script>
    $('.increment-btn').click(function(e) {
        e.preventDefault();

        var qty = $('.input-qty').val();

        var value = parseInt(qty, );
        value = isNaN(value) ? 0 : value;
        if (value < 1000) {
            value++
            $('.input-qty').val(value);
        }

    });

    $('.decrement-btn').click(function(e) {
        e.preventDefault();

        var qty = $('.input-qty').val();

        var value = parseInt(qty);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--
            $('.input-qty').val(value);
        }

    });
</script>

{{-- Password show script start --}}
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        var y = document.getElementById("myInput1");
        var z = document.getElementById("myInput2");
        if (x.type === "password") {
            x.type = "text";
            y.type = "text";
            z.type = "text";
        } else {
            x.type = "password";
            y.type = "password";
            z.type = "password";
        }
    }
</script>
{{-- Password show script end --}}



<script>
    function producthandlechange(product, increace) {
        const productinput = document.getElementById(product);
        const productcount = parseInt(productinput.value);
        if (increace == true) {
            productinput.value = productcount + 1;
        } else if (increace == false && productcount > 1) {
            productinput.value = productcount - 1;
        }
    }

    function producthandlechange_2(product, increace) {
        const productinput = document.getElementById(product);
        const productcount = parseInt(productinput.value);
        if (increace == true) {
            productinput.value = productcount + 1;
        } else if (increace == false && productcount > 1) {
            productinput.value = productcount - 1;
        }
    }
</script>
{{-- <script>
    function producthandlechange_2(product, increace) {
        const productinput = document.getElementById(product);
        const productcount = parseInt(productinput.value);
        if (increace == true) {
            productinput.value = productcount + 1;
        } else if (increace == false && productcount > 1) {
            productinput.value = productcount - 1;
        }
    }
</script> --}}

























<script>
    


    // offcanvas - start
    // --------------------------------------------------
    $(document).ready(function() {
        $('.close_btn, .cart_overlay').on('click', function() {
            $('.cart_sidebar').removeClass('active');
            $('.cart_overlay').removeClass('active');
        });

        $('.cart_btn').on('click', function() {
            $('.cart_sidebar').addClass('active');
            $('.cart_overlay').addClass('active');
        });
    });

    $(document).ready(function() {
        $('.offcanvas_close, .offcanvas_overlay').on('click', function() {
            $('.main_menu_inner').removeClass('show');
            $('.offcanvas_overlay').removeClass('active');
        });
        $('.mobile_menu_btn').on('click', function() {
            $('.offcanvas_overlay').addClass('active');
        });
        $('.mobile_menu_btn2').on('click', function() {
            $('.offcanvas_overlay').addClass('active');
        });
    });
    // offcanvas - end
    $('.close').on('click', function() {
        $('.popup').fadeOut();
    });

    $('.review_slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,

        responsive: [{
                breakpoint: 885,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 430,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 393,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]

    });

    $('.venobox').venobox();

    $('.res_main_slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>


{{--                   popup time Set                --}}


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var popupLink = document.querySelector('.popup');
        var popupShown = localStorage.getItem('popupShown');

        function showPopup() {
            popupLink.style.display = 'block';
            // Set the flag to indicate that the popup has been shown
            localStorage.setItem('popupShown', 'true');
        }

        if (!popupShown) {
            // Show popup after 5 seconds on initial load
            setTimeout(showPopup, 5000);
        }
        setInterval(function() {
            if (popupShown) {
                showPopup();
            }
        }, 900000);

    });
</script>




<script>
    document.getElementById('openPopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    });

    document.getElementById('closePopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    });
</script>
