@extends('frontend.layout.Header')
@section('content')
    <!-- Include Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <style>
        */
        /* Style grid items */

        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        .fancybox-caption {
            display: none !important;
        }

        .media-item {
            width: 100%;
            /* Adjust width as needed */
            height: 100%;
            /* Adjust height as needed */
            object-fit: cover;
            /* Maintain aspect ratio */
        }

        /* .gallery-item {
                                                                                width: 328px;
                                                                                height: 328px;
                                                                            } */

        @media (min-width: 640px) {
            /* .gallery-item {
                                                                                width: 200px;
                                                                                height: 200px;
                                                                            } */

            .media-item {
                width: 100%;
                /* Adjust width as needed */
                height: 100%;
                /* Adjust height as needed */
                object-fit: cover;
                /* Maintain aspect ratio */
            }
        }

        hr.swoosh {
            border: none;
            background: url("/hro.svg") no-repeat center;
            background-size: contain;
            height: 1vw;
            margin: 0;
        }

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

        /*.abt-content {*/
        /*    position: relative;*/
        /*    width: 100%;*/
        /*    height: 100vh;*/
            /* opacity: 0.7; */
        /*    overflow-y: scroll;*/
        /*    padding-bottom: 5rem;*/
            /*background: rgb(157, 207, 247);*/
            /*background: linear-gradient(90deg, rgba(157, 207, 247, 1) 5%, rgba(186, 224, 255, 1) 30%, rgba(157, 207, 247, 1) 100%);*/
        /*}*/



        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            /* Responsive grid columns */
            gap: 10px;
            /* Adjust gap between grid items */
            padding: 10px;
            /* Adjust padding as needed */
            overflow: auto;
            /* Enable scrollbars if needed */
            padding-bottom: 30rem;
            /* Adjust as needed */
        }

        @media (max-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                /* Adjust column width for smaller screens */
            }
        }

        .gallery-item {
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            /* 1:1 aspect ratio (square) */
            overflow: hidden;
            border-radius: 1rem
        }

        .gallery-item img,
        .gallery-item video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 1rem
                /* Ensure the image or video covers the entire container */
        }
    </style>


    <div class="abt-content">
        <div style="font-size: 33px;color:#0072ce;font-weight: 900 ;text-align:center;font-family: 'Merienda One', cursive;">Gallery</div>
        <hr>
        {{-- <div class="abt-content"> --}}
        <div id="gallery" class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-4 px-4  gallery-container">
            <!-- Gallery items will be dynamically added here -->
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch images and videos from the server
            $.getJSON('/Slider', function(data) {
                var galleryHtml = '';
                data.forEach(function(item) {
                    if (item.type === 'image') {
                        galleryHtml += '<div class="gallery-item">';
                        galleryHtml += '<a href="' + '{{ asset('uploads') }}/' + item.media +
                            '" data-fancybox="gallery">';
                        galleryHtml += '<img src="' + '{{ asset('uploads') }}/' + item.media +
                            '" alt="' + item.caption +
                            '" class="media-item img-responsive" style="width: 100%;">';
                        galleryHtml += '</a>';
                        galleryHtml += '</div>';
                    } else if (item.type === 'video') {
                        galleryHtml += '<div class="gallery-item">';
                        galleryHtml += '<a href="' + '{{ asset('uploads') }}/' + item.media +
                            '" data-fancybox="gallery">';
                        galleryHtml +=
                            '<video width="300" height="200" controls class="media-item" style="width: 100%;">';
                        galleryHtml += '<source src="' + '{{ asset('uploads') }}/' + item.media +
                            '" type="video/mp4">';
                        galleryHtml += 'Your browser does not support the video tag.';
                        galleryHtml += '</video>';
                        galleryHtml += '</a>';
                        galleryHtml += '</div>';
                    }
                });
                $('#gallery').html(galleryHtml);

                // Initialize Fancybox
                $('[data-fancybox="gallery"]').fancybox({
                    loop: true,
                    buttons: [
                        'slideShow',
                        'fullScreen',
                        'thumbs',
                        'close'
                    ]
                });
            });
        });
    </script>
@endsection
