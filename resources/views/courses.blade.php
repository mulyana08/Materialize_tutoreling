@extends('layouts.app')

@section('content')

<!-- APP MOBILE COMINGSOON -->
<section>

<div class="container">
  <div class="row page">
    <div class="col s12 l9">
        <div class="card horizontal materialboxed">
          <div class="card-image">
            <img src="{{asset('img/course/course-page1.png')}}">
          </div>
          <div class="card-stacked">
            <div class="card-content program">
              <div class="indate">
                <span class="brown-text text-lighten-2">
                  <i class="material-icons Small left">access_time</i>1 week, 3 Days
                </span>
              </div><br>
              <div class="judul-Page">
                <span>English for Customer Care</span>
              </div>
              <div class="rate">
                <i class="material-icons Tiny left">star star star</i>
              </div><br>
              <p align="justify">Program ini diselenggarakan dalam 1.000-1.200
              jam @ 120 menit per hari pada kategori B1-C2 level.
              Program TOEFL ITP Preparation B1-C2</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="container">
  <div class="row center">
    <div class="col l9 s12">

      <a href="{{route("chart")}}" class="waves-effect waves-light btn-large"><i class="material-icons right">add_shopping_cart</i>Berlangganan</a>

    </div>
  </div>

</div>

<div class="container">
  <div class="row">
    <div class="col l9 s12">
      <div class="curriculum">
        <ul id="tabs-swipe-demo" class="tabs">
          <li class="tab col s3">
            <a href="#test-swipe-1" class="active">Home</a>
          </li>
          <li class="tab col s3"><a href="#test-swipe-2">Curriculum</a></li>
          <li class="tab col s3"><a href="#test-swipe-3">Reviews</a></li>
        </ul>
        <div id="test-swipe-1" class="col m12 s12">
          <span>
            <p align="justify">Program ini diselenggarakan dalam 1.000-1.200 jam @ 120 menit per hari pada kategori B1-C2 level.
            Program TOEFL ITP Preparation B1-C2 level berfokus pada pemahaman materi TOEFL ITP dan mampu
            mengerjakan soal-soal TOEFL ITP.</p>
          </span>
          <span>
            <p align="justify">Dengan aktivitas belajar melalui pembelajaran berbasis situs Web, Learning Management System (LMS),
            teks, gambar, audio, video dan/atau animasi (e-learning), ruang lingkup yang dibahas meliputi
            kemampuan mengerjakan materi Listening Comprehension, Structure and Written Expression dan
            Reading Comprehension. Pada akhirnya, siswa diharapkan dapat meningkatkan nilai atau skor
            TOEFL ITP sesuai yang diharapkan. Bahasa pengantar yang digunakan dalam program ini adalah
            Bahasa Indonesia dan Bahasa Inggris.</p></span>
        </div>
        <div id="test-swipe-2" class="col s12">
          <span>
            <p align="justify"> <h5>Curriculum Course</h5>

              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header">
                    <i class="material-icons">insert_drive_file</i>
                    Curriculum First
                    <span class="new badge">4</span></div>
                  <div class="collapsible-body">
                    <div class="collection">
                        <a href="#!" class="collection-item">
                          <i class="material-icons left">label</i>
                          Alan
                          <span class="badge">1</span>
                        </a>
                        <a href="#!" class="collection-item">
                          <i class="material-icons left">label</i>
                          Alan
                          <span class="badge">1</span>
                        </a>
                        <a href="#!" class="collection-item">
                          <i class="material-icons left">label</i>
                          Alan
                          <span class="badge">1</span>
                        </a>
                        <a href="#!" class="collection-item">
                          <i class="material-icons left">label</i>
                          Alan
                          <span class="badge">1</span>
                        </a>

                      </div>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header">
                    <i class="material-icons">insert_drive_file</i>
                    Curriculum Second
                    <span class="badge">1</span></div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
              </ul>
        </div>
        <div id="test-swipe-3" class="col s12">
          <span><p align="justify"> <h5>Course Review</h5> </p></span>
          <div class="col l5 s12">
            <div class="review center">
              <h1>N.A</h1>
              <div class="star-review">
                <i class="material-icons Tiny">star star star</i> <br>
                <span>ratings</span>
              </div>
            </div>
          </div>
          <div class="col l7 s12">
            <div class="review-jumlah">
              <div class="collection">
                  <a href="#!" class="collection-item"><span class="badge">0</span>5 Star</a>
                  <a href="#!" class="collection-item"><span class="badge">1</span>4 Star</a>
                  <a href="#!" class="collection-item"><span class="badge">1</span>3 Star</a>
                  <a href="#!" class="collection-item"><span class="badge">1</span>2 Star</a>
                  <a href="#!" class="collection-item"><span class="badge">0</span>1 Star</a>
                </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>

</div>





</section>

@endsection
