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
          <div class="news1-img-1">
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

          <div class="news2-img-2">
            <img src="{{asset('img/portfolio/bg-txt1.png')}}" alt="Cinque Terre" width="1000" height="300">

            <div class="isi-img-2">
              <div class="col s12 m7">
                <div class="card grey lighten-3">
                  <div class="card-content white-text">
                    <span class="card-title teal-text">NEWs Pertama</span>
                      <p class="black-text">I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <button type="submit" class="waves-effect waves-light btn-large right">Kunjungi</button>
                  </div>
                </div>
              </div>
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
    <div class="wadah-news3">
      <div class="row">

        <div class="col s10">
          <div class="icon-bg3-news3 right">
            <img src="{{asset('img/icon/komunikasi.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>

          <div class="news3-img-3">
            <img src="{{asset('img/portfolio/bg-txt2.png')}}" alt="Cinque Terre" width="1000" height="300">

            <div class="isi-img-3">
              <div class="col s12 m5">
                <div class="card lime lighten-4">
                  <div class="card-content white-text">
                    <span class="card-title teal-text">NEWs Kedua</span>
                      <p class="black-text">I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <button type="submit" class="waves-effect waves-light btn-large right">Kunjungi</button>
                  </div>
                </div>
              </div>
            </div>

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
    <div class="wadah-news4">
      <div class="row">

        <div class="col s10">
          <div class="icon-bg4-news4">
            <img class="responsive-img" src="{{asset('img/icon/bingung.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>

          <div class="news4-img-4">
            <img src="{{asset('img/portfolio/bg-txt3.png')}}" alt="Cinque Terre" width="1000" height="300">

            <div class="isi-img-4">
              <div class="col s12 m8">
                <div class="card white">
                  <div class="card-content white-text">
                    <span class="card-title teal-text">NEWs Ketiga</span>
                      <p class="black-text">I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <button type="submit" class="waves-effect waves-light btn-large right">Kunjungi</button>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="imgline-4">
            <img src="{{asset('img/portfolio/line4.png')}}" alt="Cinque Terre" width="1000" height="300">
          </div>

        </div>


      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="testimon scrollspy">
  <div class="container">
    <h3 class="light center grey-text text-darken-3">News Lainnya</h3><br>
    <div class="row">
      <div class="col s12">

        <div class="row">
          <div class="col s12 m4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Judul News</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <button type="submit" class="waves-effect waves-light btn-large">Kunjungi</button><br>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Judul News</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <button type="submit" class="waves-effect waves-light btn-large">Kunjungi</button><br>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Judul News</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <button type="submit" class="waves-effect waves-light btn-large">Kunjungi</button><br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 m4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Judul News</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <button type="submit" class="waves-effect waves-light btn-large">Kunjungi</button><br>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Judul News</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <button type="submit" class="waves-effect waves-light btn-large">Kunjungi</button><br>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Judul News</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <button type="submit" class="waves-effect waves-light btn-large">Kunjungi</button><br>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- ENDTESTIMON -->

@endsection
