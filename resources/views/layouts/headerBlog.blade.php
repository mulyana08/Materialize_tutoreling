<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleMul.css') }}" rel="stylesheet">


    <!-- Tambahan -->
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
    <div id="app">

      <!-- NAVBAR -->
      <div class="navbar-fixed"  id="mobile-demo">

           <div class="row">
             <nav class="orange darken-2">
               <div class="container">
                 <div class="nav-wrapper">

                   <a href="{{ url('/') }}" class="brand-logo">
                     <img class="brand-logo" src="{{asset('img/logoEling.png')}}">
                   </a>
                   <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                   <ul class="left hide-on-med-and-down">
                     <li><a href="{{route("courses")}}">Course</a></li>
                     <li><a href="{{route("blog")}}">Blog</a></li>
                     <li><a href="#services">News</a></li>
                     <li><a href="{{route("about")}}">About Use</a></li>
                   </ul>

                   <ul class="right hide-on-med-and-down">
                     <li><a href="#about">Login</a></li>
                     <li><a href="#clients">Register</a></li>
                   </ul>

                 </div>
               </div>
             </nav>
           </div>
       </div>


       <div class="row">
         <nav class="orange darken-1">
           <div class="container">
             <div class="nav-content">
               <div class="row">
                 <div class="col m7 s12">
                   <ul class="tabs tabs-transparent">
                     <li class="tab"><a class="active" href="#test1">Artikel 1</a></li>
                     <li class="tab"><a href="#test2">Artikel 2</a></li>
                     <li class="tab"><a href="#test3">Artikel 3</a></li>
                   </ul>
                 </div>

                 <div class="col m4 offset-m1 s12">
                   <nav class="orange darken-1">
                     <div class="nav-wrapper">
                       <form class="carii">
                       <div class="input-field">
                         <input id="serach" type="search" placeholder="Cari Berita ?">
                           <label class="label-icon" for="search">
                             <i class="material-icons">search</i>
                           </label>
                       </div>
                       </form>
                     </div>
                   </nav>
                 </div>
                 </div>
               </div>
             </div>
           </nav>
         </div>
       <!-- END NAVBAR -->


           <!-- SIDENAV -->
          <ul class="sidenav" id="mobile-nav">
            <li><a href="{{route("courses")}}">Course</a></li>
            <li><a href="{{route("blog")}}">Blog</a></li>
            <li><a href="#services">News</a></li>
            <li><a href="#portfolio">About Use</a></li>
            <li><a href="#about">Login</a></li>
            <li><a href="#clients">Register</a></li>
          </ul>

          <!--END SIDENAV -->

      <div id="test1" class="col s12">
        <main class="py-4">
            @yield('content1')
        </main>
      </div>
      <div id="test2" class="col s12">
        <main class="py-4">
            @yield('content2')
        </main>
      </div>
      <div id="test3" class="col s12">
        <main class="py-4">
            @yield('content3')
        </main>
      </div>


      <!-- END NAVBAR BLOG -->


        <!-- FOOTER -->
        <footer class="page-footer orange darken-2">
            <div class="container footer">
              <div class="row">
                <div class="col m6 s12">
                  <h5 class="white-text">Tutor Eling</h5>
                  <p class="grey-text text-lighten-4" align="justify">Kami menyediakan layanan belajar berbahasa inggris
                     tidak hanya dengan membaca, menonton, dan
                    mengerjakan materi saja, namun kamu dapat berinteraksi
                    langsung dengan tutor yang tersedia selama 24 jam 7 hari
                    tanpa batas agar lancar berbahasa inggris.</p>
                </div>

                <div class="line1 col m1">

                </div>


                <div class="col m4 offset-m1 s12 temui-kami">
                  <h6 class="white-text">Temui Kami Disini :</h6>
                  <div class="row icon">
                    <a href="#"><img src="{{asset('img/icon/whatsapp.svg')}}" alt="Whatsapp"></a>
                    <a href="#"><img src="{{asset('img/icon/facebook.svg')}}" alt="Facebook"></a>
                    <a href="#"><img src="{{asset('img/icon/twitter.svg')}}" alt="Twitter"></a>
                    <a href="#"><img src="{{asset('img/icon/instagram.svg')}}" alt="Instagram"></a>
                    <a href="#"><img src="{{asset('img/icon/youtube.svg')}}" alt="Youtube"></a>
                    <a href="#"><img src="{{asset('img/icon/github.svg')}}" alt="Gitguh"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-copyright orange darken-4">
              <div class="container center">
                <div id="copyright text-center">© Copyright 2019 TutorEling. All right reserved.</div>
              Made with &hearts; <a class="brown-text text-lighten-3" href="http://aksesdigital.co.id">CV. Akses Digital</a>
              </div>
            </div>
          </footer>
        <!-- ENDFOOTER -->

    </div>

    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <script>

        $(document).ready(function(){

        $('.sidenav').sidenav();

        $('.collapsible').collapsible();

        $('.slider').slider({
          indicators:false,
          height:530,
          interval:9000
        });

        $('.dropdown-trigger').dropdown({
          inDuration: 500,
          outDuration: 500,
          constrainWidth: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 50, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'right', // Displays dropdown with edge aligned to the left of button
          stopPropagation: false // Stops event propagation
        });

        $('.carousel.carousel-slider').carousel({
        });

        setInterval(function(){
            $('.carousel').carousel('next');
        },3000);

        $('.parallax').parallax();

        $('.scrollSpy').scrollSpy();

        $('.materialboxed').materialbox();

        $('ul.tabs').tabs();

      });
    </script>


</body>
</html>
