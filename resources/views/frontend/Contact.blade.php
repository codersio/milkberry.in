@extends('frontend.layout.Header')
@section('content')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <style>
        /*.cnt-content {*/
        /*    position: relative;*/
        /*    width: 100%;*/
        /*    height: 100vh;*/
            /* opacity: 0.7; */
        /*    overflow-y: scroll;*/
        /*    padding-bottom: 5rem;*/
            /*background: rgb(157, 207, 247);*/
            /*background: linear-gradient(90deg, rgba(157, 207, 247, 1) 5%, rgba(186, 224, 255, 1) 30%, rgba(157, 207, 247, 1) 100%);*/
        /*}*/





      hr {
            /*border: none;*/
            /*background: url("/hro.svg") no-repeat center;*/
            /*background-size: contain;*/
            /*height: 1vw;*/
            /*margin: 0;*/
            margin-top:8px;
            border-color:#0060AD;
            width:50px;
        }

        .boilerplate-text {
            width: 100%;
            background: rgba(38, 187, 255, 0.1);
            border: none;
            border-bottom: 1px solid #0072ce;
            padding: 0.5vw;
            font-size: 2rem;
            color: #00316f;

        }

        .btnss {
            background: #0072ce;
            color: #fff;
            font-size: 2rem;
            line-height: 1;
            /* text-transform: uppercase; */
            padding: 1rem;
            outline: none;
            border: none;
        }

        p {
            color: #00316f;
            font-size: 1.1vw;
            font-weight: 400;
            margin: 1.5vw 0;
        }
        .btns{
            margin-left:0px !important;
        }
    </style>
    <div class=" cnt-content">

        <div class="container">
            {{-- <video autoplay loop muted>
                <source src="https://www.creambell.com/wp-content/themes/creambell/video/bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video> --}}
            <div class="content-overlay"></div>
            <div class="container">
                <div style="font-size: 33px;color:#0072ce;font-weight: 900;text-align: center;font-family: 'Merienda One', cursive;">Contact </div>
                <hr class="swoosh">
                <div class="row">
                    <div class="col-md-2">
                        <div class="">





                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row" style="color: #00316f;margin-top: 5rem">
                            @foreach ($contact as $contacts)
                                <div class="col-md-6">
                                    <p style="color: #00316f;font-size: 15px;text-align: center">
                                        <strong>{{ $contacts->address }}</strong><br>
                                        Telephone Number: {{ $contacts->phone }}.<br>
                                        Fax Number: 044-24501422.<br>
                                        Mail ID: <a style="color: #00316f"
                                            href="{{ $contacts->email }}">{{ $contacts->email }}</a><br>
                                    </p>
                                </div>
                                {{-- <div class="col-md-6">
                                    <p>{{ $contacts->address }}<br>
                                        Telephone Number: {{ $contacts->phone }}.<br>
                                        Fax Number: 044-24501422.<br>
                                        Mail ID: <a href="{{ $contacts->email }}">{{ $contacts->email }}</a><br></p>
                                </div> --}}
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 5rem">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div style="font-size:35px;color:#0072ce;font-weight: 900;text-align: center;font-family: 'Merienda One', cursive;">We are here for you.
                            Let's talk!</div>
                        <hr class="swoosh">
                        <!--@if ($errors->any())-->
                        <!--    <div class="alert alert-danger">-->
                        <!--        <ul>-->
                        <!--            @foreach ($errors->all() as $error)-->
                        <!--                <li>{{ $error }}</li>-->
                        <!--            @endforeach-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--@endif-->
                        <div >


                            <form id="subs"  action="{{ url('contactform') }}"
                                method="post" style="color: #00316f;margin-top: 5rem">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input style="height: 5rem" type="text" class="boilerplate-text"
                                                placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input style="height: 5rem" id="emails" type="text"
                                                class="boilerplate-text" placeholder="Email" name="email">
                                            <p id="emails-error" style="color: rgb(228, 51, 51)"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input style="height: 5rem" id="phones" type="text"
                                                class="boilerplate-text" placeholder="Phone Number" name="phone">
                                            <p id="phones-error" style="color: rgb(228, 51, 51)"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input style="height: 5rem" type="text" class="boilerplate-text"
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


            {{-- <img src="images/Contact-Us.jpg"> --}}

        </div>
        <!-- Add this form inside your Blade view file -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // Validate email format
                $('#emails').on('input', function() {
                    var email = $(this).val();
                    // Regular expression for email validation
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (!emailRegex.test(email)) {
                        $('#emails-error').text('Please enter a valid email address.');
                        $('#emails-error').show();
                    } else {
                        $('#emails-error').hide();
                    }
                });

                // Validate phone number format
                $('#phones').on('input', function() {
                    var phone = $(this).val();
                    // Regular expression for phone number validation
                    var phoneRegex = /^(\+\d{1,3}[- ]?)?\d{10}$/;

                    if (!phoneRegex.test(phone)) {
                        $('#phones-error').text('Please enter a valid phone number.');
                        $('#phones-error').show();
                    } else {
                        $('#phones-error').hide();
                    }
                });

                $(document).ready(function() {
                    // Function to check if the form inputs are valid
                    function validateForm() {
                        var email = $('#emails').val();
                        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        var phone = $('#phones').val();
                        var phoneRegex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
                        var isValid = true; // Flag to track form validity

                        if (!emailRegex.test(email)) {
                            $('#emails-error').text('Please enter a valid email address.');
                            $('#emails-error').show();
                            isValid = false; // Set flag to false if email is invalid
                        } else {
                            $('#emails-error').hide();
                        }

                        if (!phoneRegex.test(phone)) {
                            $('#phones-error').text('Please enter a valid phone number.');
                            $('#phones-error').show();
                            isValid = false; // Set flag to false if phone number is invalid
                        } else {
                            $('#phones-error').hide();
                        }

                        return isValid; // Return flag indicating form validity
                    }

                    // Validate form on submit
                    $('#subs').on('submit', function(event) {
                        if (!validateForm()) {
                            event.preventDefault(); // Prevent form submission if form is invalid
                        }
                    });

                    // Enable/disable submit button based on form validity
                    $('#emails, #phones').on('input', function() {
                        var isValid = validateForm();
                        $('#submit-btn').prop('disabled', !
                            isValid); // Disable button if form is invalid
                    });
                });


            });
        </script>
        

    </div>
@endsection
