@extends('frontend.layout.Header')
@section('content')
    <style>
        .abt-content {
            /* position: relative; */
            width: 100%;
            height: 100vh;
            /* Adjust as needed */
            overflow: hidden;
            /*background: rgb(157, 207, 247);*/
            /*background: linear-gradient(90deg, rgba(157, 207, 247, 1) 5%, rgba(186, 224, 255, 1) 30%, rgba(157, 207, 247, 1) 100%);*/

        }

        .abt-content video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            /* Ensure the video is behind the overlay */
        }

        /* .content-overlay {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    z-index: 1;
                                    /* opacity: 0.7; */
        /* Ensure the overlay is above the video */
        /* You can style the overlay here */
        /* background: rgb(157, 207, 247);
                            background: linear-gradient(90deg, rgba(157, 207, 247, 1) 5%, rgba(186, 224, 255, 1) 30%, rgba(157, 207, 247, 1) 100%);
                            /* Adjust the color and transparency */

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
    </style>
    <div class="abt-content">
        {{-- <video autoplay loop muted>
            <source src="https://www.creambell.com/wp-content/themes/creambell/video/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}
        <div class="content-overlay"></div>
        <div class="container" style="">

            <div class="">

                <div style="font-size:33px;color:#0072ce;font-weight: 900;font-family: 'Merienda One', cursive;text-align:center">About us</div>
                <hr >

                @foreach ($about as $abouts)
                    <p style="color: #00316f;margin-top: 2rem">{{ $abouts->description }}</p>


                    <!--<img src="images/About-Us-Img.jpg">-->
                @endforeach


            </div>
        </div>
    </div>
@endsection
