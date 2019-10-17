@extends('layouts.app')

@section('content')

<section>
  <div class="bg-about1">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="judul-about center">
            <span> <h3 class="grey-text text-lighten-4">Tutor ELING</h3> </span>
          </div>
        </div>

        <div class="col s8 offset-s2">
          <div class="isi-about center">
            <span> <p class="grey-text text-lighten-4">
                Kami menyediakan layanan belajar berbahasa inggris
                tidak hanya dengan membaca, menonton, dan mengerjakan
                materi saja, namun kamu dapat berinteraksi langsung dengan
                tutor yang tersedia selama 24 jam 7 hari tanpa batas agar
                lancar berbahasa inggris
            </p> </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-about2">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="judul-about center"><br>
            <span> <h4 class="grey-text text-lighten-4">VISI MISI DAN TUJUAN</h4> </span>
          </div>
        </div>

        <div class="row">
          <div class="col m6 s12">
            <div class="about-borderr">
              <div class="row">

                <div class="judul-visi center">
                  <h5 class="white-text">Visi</h5>
                </div>

                   <div class="col s12 m5">
                     <div class="card-panel white">
                       <span class="black-text">Melayani Program Praktik Berbahasa Inggris
                          Online 24/7 Tanpa Batas yang Memfokuskan
                          Pada Pemerolehan Kemahiran Berbicara
                          Untuk Berbagai Situasi dan Persiapan Tes
                          Bahasa Inggris Internasional Secara Optimal.
                       </span>
                     </div>
                   </div>
                 </div>
            </div>
          </div>

          <div class="col m6 s12">
            <div class="icon-about-visi">
              <img src="{{asset('img/icon/komunikasi.png')}}" class="responsive-img">
            </div>

          </div>
        </div>

        <div class="row">

          <div class="col m6 s12">
            <div class="icon-about-misi">
              <img src="{{asset('img/icon/jempol.png')}}" class="responsive-img">
            </div>
          </div>

          <div class="col m5 s12">
            <div class="about-bordermisi">
              <div class="row">

                <div class="judul-misi center">
                  <h5 class="white-text">Misi</h5>
                </div>

                   <div class="col s12 m5">
                     <div class="card-panel white">
                       <span class="black-text">Menyediakan Program Praktik Berbahasa
                        Inggris Online dengan Pendampingan
                        PERSONAL TUTOR Selama 24 Jam 7 Hari
                        Tanpa Batas Melalui Web dan Aplikasi Mobile
                        (mudah diakses kapan pun dan di mana pun).
                        </span>
                     </div>
                   </div>
                 </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-about3">
    <div class="container">

      <div class="row">
        <div class="col m6 s12">
          <div class="about1-borderr">
            <div class="row">

              <div class="judul-tujuan center">
                <h5 class="white-text">Tujuan</h5>
              </div>

                 <div class="col s12 m5">
                   <div class="card-panel white">
                     <span class="black-text">Melayani Program Praktik Berbahasa Inggris
                      Online 24/7 Tanpa Batas yang Memfokuskan 
                      Pada Pemerolehan Kemahiran Berbicara
                      Untuk Berbagai Situasi dan Persiapan Tes
                       Bahasa Inggris Internasional Secara Optimal.
                      </span>
                   </div>
                 </div>
               </div>
          </div>
        </div>

        <div class="col m6 s12">
          <div class="icon-about1-visi">
            <img src="{{asset('img/icon/prestasi.png')}}" class="responsive-img">
          </div>

        </div>
      </div>


      </div>
    </div>
  </div>
</section>


@endsection
