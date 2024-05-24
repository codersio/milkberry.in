
<style>
/* .bg-shape::before{

} */
.bg-shape:before{
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
    .bg-shape{
        /* background: blue;
         */
         background-image: url('https://www.kamalsicecream.com/images/background/5.jpg');
        position: relative;

    }
    .bg-cl{
        padding:1rem;height:100%;
    }
    @media (min-width: 640px) {
        .bg-cl{
            padding:5rem;height:60vh
}
    }
</style>

<footer style="margin-top:5rem">
   <div class="container-fluid bg-shape">



   <div class="bg-cl" style="background-color: rgba(75,67,66,0.9);">
   <div class="container">
    <div class="row">
        <div class="col-md-4" style="text-align: center">
            <h1 style="font-family: 'Merienda One', cursive;font-size: 30px;color:#fff">Quick Links </h1>
            <hr style="width: 50px">
            <?php

      $cat = App\Models\Category::all();
      ?>
      @foreach ($cat as $category)
          <ul style="margin-left:-12%">
              <li style="list-style: none;color:#fff;text-transform: lowercase"><a href="">
                  {{ $category->cat_title }}
              </a></li>
          </ul>
      @endforeach

        </div>
        <div class="col-md-4 " style="text-align: center">
            <img src="{{ asset('/images/Untitled design (2).png') }}" style="width: 86%;margin-top:-7rem" alt="">
        </div>
        <div class="col-md-4" >
            <h1 style="font-family: 'Merienda One', cursive;font-size: 30px;color:#fff">Social Links</h1>
            <hr style="width: 50px">
            <div style="display:grid;place-items:center">
                <div style="display:flex;">
                @foreach ($social as $s)
                        <li style="margin-left: 1rem;list-style:none">
                            <a href="{{ $s->link }}">
                                <img src="{{ asset('uploads/' . $s->image) }}" width="30px" />
                            </a>
                        </li>

                        </li>
                    @endforeach
            </div>
            <p style="    color: white;
    font-size: 13px;
    text-align: center;
    margin-top: 2rem;">HATSUN AGRO PRODUCT LTD Plot No. 14,s <br>
Telephone Number: 044-24501622s.<br>
Fax Number: 044-24501422.<br>
Mail ID: mailto:info@hap.ins</p>
            </div>
        </div>
    </div>
   </div>
   <div class="" style="text-align: center;color:#fff;margin-top:5rem">
<p style="color: #fff">© 2024 Milkberry | <a style="color: #fff" href="https://www.ecspvt.com/">Powered by Equiconsultings</a> </p>
   </div>
   </div>
   </div>

    <div class="ffoter" style="position:fixed;bottom: 3rem;right:2rem;z-index: 10;">
        <a href="https://wa.me/+918017242275" target="_blank">
            <img src="https://create.wa.link/static/WhatsApp-0e878a0fa68c61b06e781cee2e6bc71f.svg"
                 alt="WhatsApp Button" style="width: 50px">
        </a>
        {{-- <h1>footer</h1> --}}
    </div>
</footer>
