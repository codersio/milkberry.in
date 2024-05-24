@extends('frontend.layout.Header')

@section('content')
    <style>
        .card {
            margin: 0 auto;
            text-align: center;
            display: -webkit-flex;
            display: flex;
            border-radius: 10px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 15px;
            width: 250px;
            padding: 1.5%;
            box-sizing: border-box;
            /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.16), 0 4px 10px rgba(0, 0, 0, 0.23); */
        }

        .card img {
            width: 204px;
            /* Ensure the image takes up the entire width of the card */
            height: 204px;
            /* Maintain the aspect ratio of the image */
            border-radius:5px;
            /* Optional: Apply border radius to the image */
        }

        .abt-content {
            width: 100%;
            height: 100vh;
            /*background: rgb(157, 207, 247);*/
            /*background: linear-gradient(90deg, rgba(157, 207, 247, 1) 5%, rgba(186, 224, 255, 1) 30%, rgba(157, 207, 247, 1) 100%);*/
        }
        .abt-content img{
            margin-top:0px !important;

        }
        hr{
            margin-top:8px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #0060AD;
    width: 50px;
        }
    </style>
    <div class="abt-content" style="overflow-y:scroll;height:100vh; ">
           <h1 style="font-size:24px;font-family:'Merienda One', cursive !important;">{{$catesl->cat_title}}</h1>
        <h3 style="font-size:18px;font-family:'Merienda One', cursive !important;">{{$catesl->type_title}}</h3>
        <hr/>
        <div class="container ">

            <div class="row" >
                @forelse ($sub as $subs)
                    <a href="{{url('category/sub-category/product/'.$subs->category_id.'/'.$subs->sub_slug)}}">
                    <div class="col-md-3">
                        <div class="card" style="">
                            <img src="{{ $subs->type_file ? asset('uploads/' . $subs->type_file) : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg' }}" alt="">

                            <div style="margin-top: 1.5rem;  text-transform: capitalize;text-align:center;font-weight:bold;color:#4b4342;font-family:'Merienda One', cursive !important;">{{ $subs->type_title }}</div>
                        </div></a>

                    </div>
                @empty
                    <h1>no category found</h1>
                @endforelse

            </div>
        </div>
    </div>
@endsection
