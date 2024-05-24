@extends('frontend.layout.Header')

@section('content')
    <style>
      @import url('https://fonts.googleapis.com/css?family=ABeeZee:400,400i|Roboto:300,400,500,700|Leckerli+One|Merienda+One&display=swap');
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
        .pro-title{
            font-family:'Merienda One', cursive !important;
            font-size:19px;
        }
        h1,h3{
            font-family:'Merienda One', cursive !important;
            margin:10px;
        }
        hr{
            margin-top: 5px !important;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #0060AD;
     border-color:#0060AD;
    width: 50px;
        }
        .pro-title{
            color:#4b4342;
        }
        .pro-title:hover{
            color:red;
        }
    </style>
    <div class="abt-content" >
         <h1  style="font-size:24px;color:#0060AD">{{$subsubQuery->cat_title}}</h1>
        <h3 style="font-size:18px;color:#0060AD">{{$subsubQuery->type_title}}</h3>
         <h3 style="font-size:15px;color:#0060AD">{{$subsubQuery->sub_title}}</h3>
        <hr/>
        
        <div class="container " style="margin-top:4rem">

            <div class="row" >
                @forelse ($products as $products)
                    <div class="col-md-3" >
                        <div class="card" style="">
                        <img src="{{ $products->image ? asset('uploads/' . $products->image) : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg' }}" alt="">
                        
                        <div class="pro-title" style="margin-top: 1.5rem;  text-transform: capitalize;text-align:center;font-weight:500;">{{ $products->title }}</div>
                        <br/>
                        <div>{{$products->description}}</div>
                    </div>
                        
                    </div>
                @empty
                    <h1>no product found</h1>
                @endforelse

            </div>
        </div>
    </div>
@endsection
