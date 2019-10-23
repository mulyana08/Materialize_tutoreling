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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
      <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
    <div id="app">

      <!-- NAVBAR -->
      <div class="navbar-fixed"  id="mobile-demo" >
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
                 <li><a href="{{route("news")}}">News</a></li>
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
       <!-- END NAVBAR -->

       <!-- SIDENAV -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="{{route("courses")}}">Course</a></li>
        <li><a href="{{route("blog")}}">Blog</a></li>
        <li><a href="{{route("news")}}">News</a></li>
        <li><a href="{{route("about")}}">About Use</a></li>
        <li><a href="#about">Login</a></li>
        <li><a href="#clients">Register</a></li>
      </ul>

      <!--END SIDENAV -->


        <main class="py-4">

          <!-- Judul Private Course  -->
          <section>
            <div class="bg-chart1">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="judul-chart1 Left">
                      <span> <h3 class="grey-text text-lighten-4">Private Course</h3> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Kontent Private Course  -->
            @yield('content')

        </main>

    </div>

    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://unpkg.com/materialize-stepper@3.1.0/dist/js/mstepper.min.js"></script>


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

        $('select').formSelect();

        var stepper = document.querySelector('.stepper');
           var stepperInstace = new MStepper(stepper, {

           })
      });
    </script>


</body>
</html>
