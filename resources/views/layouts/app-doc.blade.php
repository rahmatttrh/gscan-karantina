<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <title>GSCAN - Karantina</title>
      <!-- CSS files -->
      <link rel="icon" href="{{asset('/img/barcode-scan.png')}}" type="image/x-icon"/>
      <link href="{{asset('css/tabler.min.css')}}" rel="stylesheet"/>
      <link href="{{asset('css/tabler-flags.min.css')}}" rel="stylesheet"/>
      <link href="{{asset('css/tabler-payments.min.css')}}" rel="stylesheet"/>
      <link href="{{asset('css/tabler-vendors.min.css')}}" rel="stylesheet"/>
      <link href="{{asset('css/demo.min.css')}}" rel="stylesheet"/>
      <script>
         $(document).ready(function() {
            console.log('okee');
            $('.carousel').carousel({
            interval: false,
            });
         })
      </script>
      <style>
         body a {
            text-decoration: none;
            color: white
         }

         a:hover{
            color: rgb(89, 171, 248)
         }
         body {
            font-size: 10px
         }
         .btn {
            font-size: 10px
         }

         .bg-dark-blue{
            background-color: rgb(39, 56, 104)
         }

         .bg-logo {
            background-color: rgb(231, 231, 231)
         }

         .pagination {
            font-size: 9px;
            /* background-color: black; */
         }
         .pagination .page-link {
            color: rgb(197, 197, 197);
            margin: 10px;
            background-color: rgb(32, 32, 32); //your color
            
         }

         figure.zoom {
         background-position: 20% 20%;
         width: 100%;
         overflow: hidden;
         cursor: zoom-in;
         }
         figure.zoom img:hover {
         opacity: 0;
         }
         figure.zoom img {
         transition: opacity .5s;
         display: block;
         width: 100%;
         }

         


         
      </style>
   </head>

   <body>
      <div class="wrapper" >
         <div class="sticky-top">
            <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
               <div class="container-xl">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  {{-- navbar-brand-autodark  --}}
                  <h2 class="font-weight-bold font-italic text-primary">GSCAN KARANTINA</h2>
                  
               </div>
            </header>
         </div>
         

         <div class="page-wrapper" style="min-height: 100vh">
            @yield('content')
            
            <footer class="footer footer-transparent d-print-none">
               <div class="container-xl">
                  <div class="row text-center align-items-center flex-row-reverse">
                     <div class="col-lg-auto ms-lg-auto">
                     <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">MY ENC v1.0.0-beta</a></li>
                        
                     </ul>
                     </div>
                     <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                     <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                           Copyright &copy; 2023
                           <a href="." class="link-secondary">ENC Development</a>.
                           All rights reserved.
                        </li>
                        
                     </ul>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>

      <script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
      <script src="{{asset('tabler/js/datatables/datatables.min.js')}}"></script>

      
      <!-- Libs JS -->
      <script src="{{asset('tabler/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
      <!-- Tabler Core -->
      <script src="{{asset('tabler/js/tabler.min.js')}}"></script>
      <script src="{{asset('tabler/js/demo.min.js')}}"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

      <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
      <script src="https://unpkg.com/supercluster@7.1.2/dist/supercluster.min.js"></script>
      


      <!-- Moment JS -->
      <script src="{{asset('js/plugin/moment/moment.min.js')}}"></script>

      <!-- Chart JS -->
      <script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>

      <!-- jQuery Sparkline -->
      <script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

      <!-- Chart Circle -->
      <script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>
      @stack('js_footer')
   </body>

</html>