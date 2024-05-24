<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milk Berry</title>

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" type="text/css" rel="stylesheet">
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <link href='https://fonts.googleapis.com/css?family=Arapey:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <style>


        .modal-backdrop.in {
            filter: alpha(opacity=50);
            opacity: .5;
            z-index: 1;
        }

        .btns {
            background: #0072ce;
            color: #fff;
            font-size: 1.4rem;
            line-height: 1;
            /* text-transform: uppercase; */
            padding: 1rem;
            outline: none;
            border: none;
            margin-left: 3rem
        }

        .boilerplate-text {
            width: 100%;
            background: rgba(38, 187, 255, 0.1);
            border: none;
            border-bottom: 1px solid #0072ce;
            padding: 0.5vw;
            height: 5rem;
            font-size: 2rem;
            color: #00316f;
        }

        .modal-content {
            /*background: rgb(157, 207, 247);*/
            /*background: linear-gradient(90deg, rgba(157, 207, 247, 1) 5%, rgba(186, 224, 255, 1) 30%, rgba(157, 207, 247, 1) 100%);*/
        }



        @media (min-width: 640px) {


            .btns {
            background: #0072ce;
            color: #fff;
            font-size: 1.4rem;
            line-height: 1;
            /* text-transform: uppercase; */
            padding: 1rem;
            outline: none;
            border: none;
            margin-left: 0rem
        }
            .logo_desktop {
                display: none;
            }

            .mobile_logo {
                display: block;
            }

            .navbar-default .navbar-nav>li>a {
                color: black
            }
        }



        .logo_desktop {
            display: none;
        }

        @media (min-width: 768px) {
            .d_n{
                display: block !important;
            }
            .btns {
            background: #0072ce;
            color: #fff;
            font-size: 1.4rem;
            line-height: 1;
            /* text-transform: uppercase; */
            padding: 1rem;
            outline: none;
            border: none;
            margin-left: 0rem
        }
            .logo_desktop {
                display: block;
            }

            .mobile_logo {
                display: none;
            }

            .navbar-default .navbar-nav>li>a {
                color: white;
            }
        }
        .dropdown .dropdown-menu {
            background-color: #0060AD;
        }
        .dropdown-menu {
            list-style-type: none;
            padding: 0;
        }

        .dropdown-item {
            position: relative;
        }

        .dropdown-item a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
        }

        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #333;
            padding: 10px 0;
        }

        .dropdown-item:hover .submenu {
            display: block;
        }

        .submenu li {
            padding: 8px 20px;
        }

        .submenu li a {
            color: #fff;
            text-decoration: none;
        }

        .submenu li a:hover {
            background-color: #555;
        }
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
        .dropdown-menu li a{
            color: #fff;
            font-size: 14px;
            padding:1rem;

        }
        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
            color: #fff !important;
        }
        .dropdown-menu li a:hover{
            color: #ec1165 !important;
            font-size: 15px;
            background:#fff;
            /*margin-left:2rem;*/

        }

        @media (max-width: 767px) {
            /*.toggle-submenu{*/
            /*    display: none;*/
            /*}*/
            .nav.navbar-nav.main-menu.fix-menu li a{
                color:#fff !important;
            }
            .active{
                color:#000;
            }
    .nav.main-menu.fix-menu {
        background: #0060AD;
        text-align: left;
        margin-left: 1rem !important;
    }
}
.btns{
    margin-left:0px !important;
}



#loading {
  position: fixed;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
 display: grid;
 place-items: center;
  /* opacity: 0.7; */
  background-color: blue;
  z-index: 99;
}

#loading-image {
  position: absolute;
  top: 100px;
  left: 240px;
  z-index: 100;
}
.loader {
      	height: 150px;
	width: 100px;
	border-radius: 55px 55px 10px 10px;
	position: relative;
  background: #FF3D00;

background-image: linear-gradient(0deg,
    #f63a99 25%,
    #30dcf6 25%,
    #30dcf6 25%,
    #30dcf6 50%,
    #f2d200 50%,
    #f2d200 50%,
    #f2d200 75%,
    #70ca5c 75%);
	background-position: 0px 0px;
  background-size: auto 175px;
	background-repeat: repeat-y;
  animation: colorShift 6s linear infinite;

}
.loader:before {
    content: '';
    position: absolute;
    left: 10px;
    bottom: 15px;
    width: 15px;
    height: 100px;
    border-radius: 50px;
    background: rgba(255, 255, 255, 0.5);

  }

.loader:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 100%;
  transform: translate(-50% , 0);
  box-shadow: 0 15px 2px rgba(0, 0, 0, 0.25) inset;
	width: 32px;
  height: 45px;
  background: #E09C5F;
  border-radius: 0 0 12px 12px;
}

@keyframes colorShift {
  to {    background-position: 0 175px}
}

    </style>
</head>

<body>
    <div id="loading">
       <div class="loader"></div>
      </div>
<div class="container-fluid fix-height arun-index">
{{--    <div class="loader"></div>--}}

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="mobile_logo" style="font-size: 30px;font-weight: 900;color:#fff;margin-left:4rem;position: absolute">
                 <img src="{{ asset('/images/Untitled design (2).png') }}" alt="" style="width:44%;margin-top:-13%;margin-left:-20%">
            </div>
            <div class="navbar-header whats-header">
                <button style="" type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main-menu fix-menu">
                    <a class="navbar-brand" href="/" style="width:30%">
                        <div class="logo_desktop" style="font-size: 30px;font-weight: 900;color:#fff;margin-left:4rem ">
                            <img src="{{ asset('/images/Untitled design (2).png') }}" alt="" style="width: 86%;margin-top:-42%">
                        </div>
                    </a>
                    {{-- Home --}}
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="/">
                            <i style="font-size: 24px;margin-top: -1rem;" class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </li>
                    {{-- About Us --}}
                    <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                        <a href="/about-us">About Us</a>
                    </li>
                    {{-- Products --}}
                    <li class="dropdown {{ request()->is('product-category/*') ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">




                               @foreach($cate as $category)
<li class="dropdown-submenu">
    @if($category->subcategories->isNotEmpty())
        <a class="test toggle-submenu d_n" tabindex="-1" href="{{ url('/category/sub-category/'.$category->cat_slug) }}" >
            {{ $category->cat_title }}
        </a>
    @else
        <a class="test toggle-submenu" tabindex="-1" href="{{ url('/category/product/'.$category->cat_slug) }}">
            {{ $category->cat_title }}
        </a>
    @endif

    @if($category->subcategories->isNotEmpty())
        <ul class="dropdown-menu">
            @foreach ($category->subcategories as $subcategory)
                <li class="dropdown-submenu">
                    <a class="test " href="{{ url('category/sub-category/product/'.$subcategory->id.'/'.$subcategory->sub_slug) }}" tabindex="-1">
                        {{ $subcategory->type_title }}
                    </a>
                    @if($subcategory->subsubcategories->isNotEmpty())
                        <ul class="dropdown-menu">
                            @foreach($subcategory->subsubcategories as $sub)
                                <li>
                                    <a href="{{ url('category/sub-category/sub/product/' . $sub->slug) }}">
                                        {{ $sub->sub_title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</li>
@endforeach

                            </li>




                        </ul>

                    </li>
                    {{-- Media --}}
                    <li class="{{ request()->is('media') ? 'active' : '' }}">
                        <a href="/media">Media</a>
                    </li>
                    {{-- Contact Us --}}
                    <li class="{{ request()->is('cantact-us') ? 'active' : '' }}">
                        <a href="/cantact-us">Contact Us</a>
                    </li>
                </ul>

                <!-- <ul class="nav navbar-nav whatsnew">
<li><a href="whats-new.html">what's new <span>1</span></a></li>
</ul>	 -->
                <ul class="nav navbar-nav navbar-right whats-right"
                    style="background: transparent;margin-top:-1rem">
                    <li>
                        <button data-toggle="modal" data-target="#myModal" type="button" class="btns " style="margin-left:2rem !important">Get
                            Quote</button>
                    </li>
                    @foreach ($social as $s)
                        <li style="margin-left: 1rem">
                            <a href="{{ $s->link }}">
                                <img src="{{ asset('uploads/' . $s->image) }}" width="20px" />
                            </a>
                        </li>

                        </li>
                    @endforeach
                    {{-- <li class="" style="margin-left:1rem">
                        <a href="">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li> --}}


                    <div class="modal" id="myModal" style="style="z-index: 10; display: none; justify-content:
                         center; align-items: center;"">
                    <div class="modal-dialog">
                        <div class="modal-content" style="padding:1rem">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                {{-- <h4 class="modal-title" style="color: #0072ce;font-weight: 600">Request A Quote
                                </h4> --}}
                                <button type="button" class="close" data-dismiss="modal"
                                        style="font-size: 2rem">&times;</button>
                            </div>

                            <!-- Modal Body -->
                            <div id="sub" class="modal-body">
                                <div class="row">
                                    <form action="{{ url('contactform') }}" method="post"
                                          style="color: #00316f;margin-top: 5rem">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <input type="text" class="boilerplate-text"
                                                           placeholder="Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <input type="text" class="boilerplate-text"
                                                           placeholder="Email" name="email" id="email">
                                                    <p id="email-error" style="color: red"></p>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <input type="text" class="boilerplate-text"
                                                           placeholder="Phone Number" name="phone"
                                                           id="phone">
                                                    <p id="phone-error" style="color: red"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <input type="text" class="boilerplate-text"
                                                           placeholder="Subject" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <textarea name="" id="" cols="10" rows="2" class="boilerplate-text"></textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <input type="submit" class="btns form-control"
                                                       style="font-size: 1.8rem;
                                    height: 4.5rem;
                                    margin-top: 2rem;"
                                                       value="submit">
                                            </div>
                                        </div>


                                    </form>
                                </div>





                            </div>



                        </div>
                    </div>
            </div>

            </ul>

        </div><!--/.nav-collapse -->
</div><!--/.container-fluid -->
</nav>

</div>
{{-- dd --}}
<div>
    @yield('content')

</div>
@include('/frontend/layout/Footer')


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/res/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="js/res/hammer.min.js"></script>

<script src="js/velocity.min.js"></script>
<script src="js/velocity.ui.min.js"></script>
<script src="js/vertical-slider.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script>
   $(window).on('load', function () {
    setTimeout(function () {
        $('#loading').hide();
    }, 1000); // 30000 milliseconds = 30 seconds
});

  </script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var dropdowns = document.querySelectorAll('.dropdown-submenu');

        dropdowns.forEach(function(dropdown) {
            var timer; // Variable to store the timer ID
            var isTouchDevice = 'ontouchstart' in document.documentElement; // Check if the device supports touch

            // Function to show the submenu
            function showSubmenu(submenu) {
                clearTimeout(timer); // Clear any existing timer
                submenu.style.display = 'block';
            }

            // Function to hide the submenu
            function hideSubmenu(submenu) {
                // Set a timer to hide the submenu after a short delay (e.g., 200ms)
                timer = setTimeout(function() {
                    submenu.style.display = 'none';
                }, 200); // Adjust the delay as needed
            }

            // Desktop (mouse) events
            dropdown.addEventListener('mouseenter', function() {
                if (!isTouchDevice) {
                    var submenu = this.querySelector('.dropdown-menu');
                    showSubmenu(submenu);
                }
            });

            dropdown.addEventListener('mouseleave', function() {
                if (!isTouchDevice) {
                    var submenu = this.querySelector('.dropdown-menu');
                    hideSubmenu(submenu);
                }
            });

            // Handle touch events for mobile devices
            dropdown.addEventListener('touchstart', function(event) {
                if (isTouchDevice) {
                    var submenu = this.querySelector('.dropdown-menu');
                    if (submenu.style.display === 'block') {
                        hideSubmenu(submenu);
                    } else {
                        event.preventDefault(); // Prevent default only when showing the submenu
                        showSubmenu(submenu);
                    }
                }
            });

            // Close submenu when touching outside of it
            document.addEventListener('touchstart', function(event) {
                if (isTouchDevice && !dropdown.contains(event.target)) {
                    var submenu = dropdown.querySelector('.dropdown-menu');
                    hideSubmenu(submenu);
                }
            });

            // Prevent submenu from opening when clicking on submenu items
            var submenuItems = dropdown.querySelectorAll('.dropdown-menu .dropdown-item');
            submenuItems.forEach(function(item) {
                item.addEventListener('click', function(event) {
                    event.stopPropagation(); // Prevent event propagation to parent dropdown
                });
            });
        });
    });





</script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.flexslider').each(function() {
            var $root = $(this);

            // kill item if no image
            $root.find("li").each(function() {
                var src = $(this).find("img").attr("src");
                if (!src) {
                    $(this).remove();
                }
            });
        });
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 150,
            itemMargin: 10,
            asNavFor: '#slider',
            maxItems: 4,
            touch: true
        });

        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });


    });
</script>

<script>
    $(function() {
        var videos = $(".video-pos");

        videos.on("click", function() {
            var elm = $(this),
                conts = elm.contents(),
                le = conts.length,
                ifr = null;

            for (var i = 0; i < le; i++) {
                if (conts[i].nodeType == 8) ifr = conts[i].textContent;
            }

            elm.addClass("player").html(ifr);
            elm.off("click");
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Validate email format
        $('#email').on('input', function() {
            var email = $(this).val();
            // Regular expression for email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                $('#email-error').text('Please enter a valid email .');
                $('#email-error').show();
            } else {
                $('#email-error').hide();
            }
        });

        // Validate phone number format
        $('#phone').on('input', function() {
            var phone = $(this).val();
            // Regular expression for phone number validation
            var phoneRegex = /^(\+\d{1,3}[- ]?)?\d{10}$/;

            if (!phoneRegex.test(phone)) {
                $('#phone-error').text('Please enter a valid 10 digit number.');
                $('#phone-error').show();
            } else {
                $('#phone-error').hide();
            }
        });

        $(document).ready(function() {
            // Function to check if the form inputs are valid
            function validateForm() {
                var email = $('#email').val();
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                var phone = $('#phone').val();
                var phoneRegex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
                var isValid = true; // Flag to track form validity

                if (!emailRegex.test(email)) {
                    $('#email-error').text('Please enter a valid email address.');
                    $('#email-error').show();
                    isValid = false; // Set flag to false if email is invalid
                } else {
                    $('#email-error').hide();
                }

                if (!phoneRegex.test(phone)) {
                    $('#phone-error').text('Please enter a valid phone number.');
                    $('#phone-error').show();
                    isValid = false; // Set flag to false if phone number is invalid
                } else {
                    $('#phone-error').hide();
                }

                return isValid; // Return flag indicating form validity
            }

            // Validate form on submit
            $('#sub').on('submit', function(event) {
                if (!validateForm()) {
                    event.preventDefault(); // Prevent form submission if form is invalid
                }
            });

            // Enable/disable submit button based on form validity
            $('#email, #phone').on('input', function() {
                var isValid = validateForm();
                $('#submit-btn').prop('disabled', !
                    isValid); // Disable button if form is invalid
            });
        });


    });
</script>
</body>

</html>
