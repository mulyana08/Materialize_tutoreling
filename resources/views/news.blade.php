@extends('layouts.app')

@section('content')

<!-- APP MOBILE COMINGSOON -->
<section>
  <div class="bg-news1">
    <div class="wadah-news1">
      <div class="row">

        <div class="col m7 s12">

          <div class="judul-bg-news1">
            <p class="grey-text text-lighten-4">NEWS <span class="orange-text text-darken-2"> Tutor Eling</span></p>
          </div>

          <div class="icon-bg-news2">
            <img src="{{asset('img/icon/jasbiru.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>

          <div class="imgline-1">
            <img src="{{asset('img/portfolio/line1.png')}}" alt="Cinque Terre" width="1000" height="300">
              <span><h5 class="grey-text text-lighten-4">
                Judul ini digunakan ketika ada sebuah nama untuk judul ini</h5>
              </span>
          </div>
        </div>

        <div class="col m5 s12">
          <div class="icon-bg-news1">
            <img src="{{asset('img/icon/komputer-eling.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-news2">
    <div class="wadah-news2">
      <div class="row">

        <div class="col s10">
          <div class="icon-bg2-news2">
            <img class="responsive-img" src="{{asset('img/icon/main-hp.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>

          <div class="img-1">
            <img src="{{asset('img/portfolio/bg-txt1.png')}}" alt="Cinque Terre" width="1000" height="300">
            <div class="text-center1">
              <span class="teal-text">NEWs Pertama</span>
            </div>

            <div class="text-center2">
              <span>
                ini adalah isian News pertama dan ini nanti bisa di klik
                ini adalah isian News pertama dan ini nanti bisa di klik
              </span>
            </div>

            <div class="kunjungi">
              <button type="submit" class="waves-effect waves-light btn-large">
              Kunjungi</button>
            </div>


          </div>

          <div class="imgline-2">
            <img src="{{asset('img/portfolio/line2.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>

        </div>


      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-news3">
    <div class="wadah-news1">
      <div class="row">

        <div class="col s10">
          <div class="icon-bg-news2">
            <!-- <img src="{{asset('img/icon/jasbiru.png')}}" alt="Cinque Terre" width="1000" height="300"> -->
          </div>

          <div class="imgline-3">
            <img src="{{asset('img/portfolio/line3.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>
        </div>


      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-news4">
    <div class="wadah-news1">
      <div class="row">



      </div>
    </div>
  </div>
</section>


@endsection
