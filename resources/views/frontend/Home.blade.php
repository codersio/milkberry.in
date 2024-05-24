@extends('frontend.layout.Header')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .categories>*{
        margin:30px 0px;
    }
    /* CSS */
.button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;

  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}
.card img {
            width: 143px;
            /* Ensure the image takes up the entire width of the card */
            height: 176px;
            /* Maintain the aspect ratio of the image */
            border-radius:5px;
            /* Optional: Apply border radius to the image */
        }
        .card{
            text-align: center;
            margin-top: 3rem
        }
        .pro-title:hover{
            color: #ff91a4;

        }
        .about:before{

    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-image: url('https://restroking.dexignzone.com/xhtml/images/bg1.png');
    height: 20px;
    background-position: top;
    background-repeat: repeat-x;
    background-size: 80px;

        }
       .about{
        position: relative;
       }
       .wdc{
        width: 100%;
       }
       .category{
        justify-content: space-around; align-items: center;display: flex;flex-direction: column
       }
       .bg{
        background:#f3b8cbd2;color:#fff;display:grid;place-items:center;padding:1rem
       }
       
        .swiper-button-next-2,
  .swiper-button-prev-2 {
    /* Initial visibility for larger screens */
    display: none;
  }
       @media (min-width: 640px) {
            .swiper-button-next-2,
  .swiper-button-prev-2 {
    /* Initial visibility for larger screens */
    display: block;
  }
        .wdc{
        width: 900px;;
       }
       .category{
        justify-content: space-around; align-items: center;display: flex;flex-direction: row
       }
       .bg{
        background:#f3b8cbd2;color:#fff;display:grid;place-items:center;padding:10rem
       }
       }





</style>

<div class="sliders" style="margin-top:-1%">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($media as $image)
            <div class="swiper-slide"> <img src="{{ asset('uploads/' . $image->media) }}" alt=""></div>
        @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
</div>

<div class="heading">
    <h1>Our Specialties</h1>
</div>

<div class="container" style="display: grid;place-items: center;">
    <div class="row wdc" >
        <div class="categories">
            <div class="category space-x-6" style="">

                @foreach ($category->slice(0, 3) as $categories)
                    <div style="display: grid;place-items: center">
                        <div class="item-image-box" style="margin-top: 2rem; overflow: hidden;border-radius: 9999px;width:122px">
                            <a href="{{ url('/category/sub-category', $categories->cat_slug) }}">
                                <img class="imnages" src="{{ asset('uploads/' . $categories->cat_file) }}" style="width:122px">
                            </a>

                        </div>
                        <h1 style="font-size: 18px; font-family: 'Merienda One', cursive;">{{$categories->cat_title}}</h1>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

  <div class="about" style="background-image:url('https://www.kamalsicecream.com/images/background/2.jpg')">
    <div class="bg" style="">
    <div class="" style=" font-family: 'Merienda One', cursive;">
      <h1 style="font-size: 61px;">Welcome</h1>
    </div>
    <div class="ab" style="width:74%;margin-top:2rem">

        @forelse ($about as $abouts )
             <p style="color: #fff; text-align:center">
        {{ strlen($abouts->description) > 300 ? substr($abouts->description, 0, 300) . '...' : $abouts->description }}
    </p>
        @empty

        @endforelse


    </div>
    <a href="about-us" class="button-89">
        Discover Now
    </a>
  </div>
</div>

<div class="products">
    <div class="heading">
        <h1>Impending Products</h1>
    </div>

    <div class="container " style="margin-top:4rem">
        <div class="swiper mySwipercarosul">
    <div class="swiper-wrapper">
     
            
            @forelse ($products->slice(0,10) as $products)
               <div class="swiper-slide">
                    <div class="card" style="display:grid;place-items:center">
                    <img src="{{ $products->image ? asset('uploads/' . $products->image) : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg' }}" alt="">

                    <div class="pro-title" style="margin-top: 1.5rem;  text-transform: lowercase;text-align:center;font-weight:600;font-family: 'Merienda One', cursive;font-size:24px">{{ $products->title }}</div>

                    <div style="font-size:14px">{{$products->description}}</div>
                </div>

                </div>
            @empty
                <h1>no product found</h1>
            @endforelse

       
      </div>
   <div class="swiper-button-next swiper-button-next-2"></div>
  <div class="swiper-button-prev swiper-button-prev-2"></div>
    </div>
    <!--<div class="swiper-pagination"></div>-->
  </div>

     
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Initialize the first swiper
    var swiper1 = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    // Initialize the second swiper
   var swiper2 = new Swiper(".mySwipercarosul", {
    slidesPerView: 4,
    spaceBetween: 30,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next-2",
      prevEl: ".swiper-button-prev-2",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 4,
        spaceBetween: 50
      }
    }
  });
  });
</script>

@endsection
