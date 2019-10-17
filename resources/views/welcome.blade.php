@extends('layouts.app')

@section('content')

<!-- SLIDER -->
<div id="slides" class="slider scrollSpy">
  <ul class="slides">

    <!-- SLIDER PERTAMA -->
    <li>
      <img src="{{asset('img/slider/3.png')}}">
      <div class="caption right-align"><br>
        <h4 class="">Belajar.Berbahasa Inggris.Lebih Interaktif</h4>
        <div class="row">
          <div class="right col s12 m6">
            <nav class="cari hoverable">
              <div class="nav-wrapper">
                <form class="cari">
                <div class="input-field">
                  <input id="serach" type="search" placeholder="Apa yang Ingin Kamu Pelajari">
                    <label class="label-icon" for="search">
                      <i class="material-icons">search</i>
                    </label>
                </div>
                </form>
              </div>
            </nav>
          </div>
        </div>

        <!-- DROPDOWN -->
        <div class="row">
          <div class="right col s12 m6">
            <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn' href='#' data-target='mydrop'>Pilih Kelas Terbaikmu

            <i class="material-icons right">arrow_drop_down</i></a>

            <!-- Dropdown Structure -->
            <ul id='mydrop' class='dropdown-content'>
              <li><a><i class="material-icons">view_module</i>English Conversation</a></li>
                <li><a href="#!">1. Speak First Naturally</a></li>
                <li><a href="#!">2. Speak with Confidence</a></li>
                <li><a href="#!">3. Public Speaking</a></li>
              <li class="divider"></li>
              <li><a><i class="material-icons">cloud</i>English Test Preparation</a></li>
                <li><a href="#!">1. TOEFL ITP</a></li>
            </ul>
          </div>
        </div>
        <!--END DROPDOWN -->

        <!-- TOMBOL REGISTRASI -->
        <div class="row">
          <div class="right col s12 m6">
          <div class="register">
            <button type="submit" class="waves-effect waves-light btn-large">
            <i class="material-icons right">perm_contact_calendar</i>Register Disini</button>
          </div>
          </div>
        </div>
        <!-- END TOMBOL REGISTRASI -->


      <!-- SLIDER KEDUA -->
        <li>
        <img src="{{asset('img/slider/2.png')}}">
          <div class="caption left-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>

      </div>
    </li>
  </ul>
</div>
<!-- ENDSLIDER -->

<!-- BG1 -->
<section>
  <div class="bg-1">
    <div class="container">
      <div class="row">
        <div class="col s8">
          <div class="row">
            <div class="col s4">
              <div class="card-panel">
                <p class="card-title">Berkualitas</p>
              </div>
              <div class="konten-panel">
                <p>Materi yang diberikan selalu diperbaharui</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s4 offset-s4">
              <div class="card-panel">
                <p class="card-title">Terjangkau</p>
              </div>
              <div class="konten-panel">
                <p>Banyak kelebihan yang dapat didapatkan</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s4 offset-s8">
              <div class="card-panel">
                <p class="card-title">Mudah</p>
              </div>
              <div class="konten-panel">
                <p>Banyak kelebihan yang dapat didapatkan</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col s4">
          <div class="row">
            <div class="col s12">
              <img src="{{asset('img/icon/prestasi.png')}}" class="responsive-img  z-depth-4 circle">

              <a class='dropdown-trigger btn' href='#' data-target='mydrop'></a>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-2">
    <div class="container">
      <div class="row">
        <br><br>
        <div class="col s12 m4">
          <img src="{{asset('img/icon/bingung.png')}}" class="responsive-img">
        </div>

        <div class="col s12 m7">
          <div class="row">
            <div class="col s12 m7 judull">
              <div class="card-panel">
                <p class="card-title">Kepoin Tutor Eling Yuk!</p>
              </div>
            </div>
            <div class="col s12">
              <p class="konten grey-text text-lighten-4">
              Tutor ELING merupakan wadah yang tepat bagi sobat
              yang bingung mencari tempat belajar berbahasa yang
              praktis, berkualitas dan tidak murahan!</p>
            </div>
            <div class="col s12 ">
              <button class="btn waves-effect waves-light" type="submit" name="action">
                Pelajari lebih lanjut
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-3">
    <div class="container">
      <div class="row">

        <br><br>
        <div class="col s6 offset-s2">
          <div class="row video-belajar">
            <div class="col s12 m8">
              <div class="card-panel">
                <p class="card-title">Video Belajar!</p>
              </div>
            </div>
            <div class="col s12">
              <p class="konten">
                <span>#BelajarKekinian #BelajarMudah</span> <br>
                <span>Media edukasi digital untuk seluruh
                pendaftar Eling</span>
              </p>
            </div>
            <div class="col s12 ">
              <button class="btn waves-effect waves-light" type="submit" name="action">
                Pelajari lebih lanjut
              </button>
            </div>
          </div>
        </div>

        <div class="col  s12 m4">
          <img src="{{asset('img/icon/video.png')}}" class="responsive-img">
        </div>

      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-4">
    <div class="container">
      <div class="row">

        <br><br>
        <div class="col s12 m5">
          <img src="{{asset('img/icon/komunikasi.png')}}" class="responsive-img">
        </div>

        <div class="col s12 m7">
          <div class="row">
            <div class="col s12 m7">
              <div class="card-panel">
                <p class="card-title">English Conversation!</p>
              </div>
            </div>
            <div class="col s12">
              <p class="konten">
                <span>#Public Speacing #Speak First Naturally</span> <br>
                <span>Program ini memiliki fokus terhadap kemahiran
                berbicara dan kemudahan memahami tuturan serta
                mampu berinteraksi dengan penutur bahasa inggris lainnya!</span>
              </p>
            </div>
            <div class="col s12 ">
              <button class="btn waves-effect waves-light" type="submit" name="action">
                Pelajari lebih lanjut
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- TESTIMONI -->
<section class="testimon scrollspy">
  <div class="container">
    <h3 class="light center grey-text text-darken-3">Testimoni</h3>
    <div class="row">
        <div class="col s12">
          <div class="carousel carousel-slider ">
            <a class="carousel-item" href="#one!"><img src="{{asset('img/testimon/1.png')}}"></a>
            <a class="carousel-item" href="#one!"><img src="{{asset('img/testimon/2.png')}}"></a>
            <a class="carousel-item" href="#one!"><img src="{{asset('img/testimon/1.png')}}"></a>
            <a class="carousel-item" href="#one!"><img src="{{asset('img/testimon/2.png')}}"></a>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- ENDTESTIMON -->


<!-- DAFTAR SEKARANG -->

<section>
  <div class="bg-5">
    <div class="container">
      <div class="row"> <br>

        <span class="bg5judul light center white-text"><p>Siap untuk bergabung?</p></span>
        <span class="bg5subjudul light center white-text" font-weight="bold"><p>Rasakan pengalaman belajar yang lebih menjanjikan !!!</p></span> <br>
        <div class="bg5btn center">
          <button type="submit" class="waves-effect waves-light btn-large"><span class="isi">Daftar Sekarang</span></button>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- END DAFTAR SEKARANG  -->


<!-- APP MOBILE COMINGSOON -->
<section>
  <div class="bg-6">
    <div class="container">
      <div class="row">

        <div class="col s3 offset-s2 appmobile"><br>
          <img src="{{asset('img/icon/appmobile.png')}}" class="responsive-img">
        </div>

        <div class="row">
          <div class="col s6">
            <div class="row judul-cominson">
              <span>MOBILE APPS (COMING SOON)</span>
              <div class="col s5 android">
                <img src="{{asset('img/icon/appandroid.png')}}" class="responsive-img">
              </div>
              <div class="col s5 android">
                <img src="{{asset('img/icon/appios.png')}}" class="responsive-img">
              </div>
            </div>
          </div>
        </div>

        <div class="row line">
          <div class="col s10 offset-s1"></div>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection
