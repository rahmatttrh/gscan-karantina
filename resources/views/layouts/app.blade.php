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
      <link href="{{asset('css/datatablebs.min.css')}}" rel="stylesheet"/>
      @stack('css')

      <!-- @endstack -->
      <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
     
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

         table td, table th {
            text-align: center;
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
   <div class="wrapper">
      <div class="sticky-top">
         <header class="navbar navbar-expand-md navbar-light d-print-none">
         <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand d-none-navbar-horizontal pe-0 pe-md-3 me-3" s>
               {{-- <a href="/" class="me-2 p-1 px-2 bg-logo rounded">
               <img src="{{asset('img/gscan.png')}}" alt="Tabler" class="navbar-brand-image">
               </a>   --}}
               <a href="/" class="me-2 p-1 px-2 bg-logo rounded">
                  <img src="{{asset('img/gscan-min.png')}}" alt="Tabler" width="70">
                  </a>  
               <small><span  style="font-style: italic">Karantina</span>  </small>
               {{-- class="navbar-brand-image" --}}
            </div>
            <div class="navbar-nav flex-row order-md-last">
               <a href="?theme=dark" class="nav-link px-0 hide-theme-dark me-3" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
               <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
               </a>
               <a href="?theme=light" class="nav-link px-0 hide-theme-light me-3" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
               <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
               </a>
               
               <div class="nav-item d-none d-md-flex me-3">
                  <div class="btn-list">
                     <a href="{{route('home')}}" class="btn btn-cyan">
                        
                        <!-- Download SVG icon from http://tabler-icons.io/i/refresh -->
                        <!-- Download SVG icon from http://tabler-icons.io/i/refresh -->
	                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" /><path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg>
                        Reload
                     </a>
                  </div>
               </div>
               {{-- <div class="nav-item dropdown d-none d-md-flex me-3">
               <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                  <span class="badge bg-red"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                     <div class="card-body">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                     </div>
                  </div>
               </div>
               </div> --}}
               <div class="nav-item dropdown">
               <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <span class="avatar avatar-sm bg-secondary" style="background-image: url({{asset('img/security.png')}})"></span>
                  <div class="d-none d-xl-block ps-2">
                     <div>Karantina</div>
                     <div class="mt-1 small text-muted"><small>Administrator</small> </div>
                  </div>
               </a>
               <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  {{-- <a href="#" class="dropdown-item">Set status</a>
                  <a href="#" class="dropdown-item">Profile & account</a>
                  <a href="#" class="dropdown-item">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Settings</a> --}}
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                     
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                        </a> --}}
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                  </a>
               </div>
               </div>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
               <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
               <ul class="navbar-nav">
                  {{-- <li class="nav-item">
                     <a class="nav-link" href="./index.html" >
                     <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                     </span>
                     <span class="nav-link-title">
                        Dashboard
                     </span>
                     </a>
                  </li> --}}
                     {{-- <li class="nav-item">
                        <a class="nav-link" href="./form-elements.html" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 11 12 14 20 6" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                        </span>
                        <span class="nav-link-title">
                           Forms
                        </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="./docs/index.html" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                        </span>
                        <span class="nav-link-title">
                           Documentation
                        </span>
                        </a>
                     </li> --}}
               </ul>
               </div>
            </div>
         </div>
         </header>
      </div>
      <div class="page-wrapper">
         <div class="page-body">
            @yield('content')
         </div>
         <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
               <div class="row text-center align-items-center flex-row-reverse">
               <div class="col-lg-auto ms-lg-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                     {{-- <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                     <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                     <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li> --}}
                     <li class="list-inline-item">
                     
                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                        Made with passion
                     
                     </li>
                     <li class="list-inline-item">
                     
                        v1.0.0-beta
                     </li>
                  </ul>
               </div>
               <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                  <ul class="list-inline list-inline-dots mb-0">
                     <li class="list-inline-item">
                     Copyright &copy; 2023
                     <a href="." class="link-secondary">Graha Segara</a>.
                     All rights reserved.
                     </li>
                     
                  </ul>
               </div>
               </div>
            </div>
         </footer>
      </div>
      
   </div>
   
   <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">New report</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
               </div>
               <label class="form-label">Report type</label>
               <div class="form-selectgroup-boxes row mb-3">
                  <div class="col-lg-6">
                     <label class="form-selectgroup-item">
                        <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                           <span class="me-3">
                              <span class="form-selectgroup-check"></span>
                           </span>
                           <span class="form-selectgroup-label-content">
                              <span class="form-selectgroup-title strong mb-1">Simple</span>
                              <span class="d-block text-muted">Provide only basic data needed for the report</span>
                           </span>
                        </span>
                     </label>
                  </div>
                  <div class="col-lg-6">
                     <label class="form-selectgroup-item">
                        <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                           <span class="me-3">
                              <span class="form-selectgroup-check"></span>
                           </span>
                           <span class="form-selectgroup-label-content">
                              <span class="form-selectgroup-title strong mb-1">Advanced</span>
                              <span class="d-block text-muted">Insert charts and additional advanced analyses to be
                                 inserted in the report</span>
                           </span>
                        </span>
                     </label>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-8">
                     <div class="mb-3">
                        <label class="form-label">Report url</label>
                        <div class="input-group input-group-flat">
                           <span class="input-group-text">
                              https://tabler.io/reports/
                           </span>
                           <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="mb-3">
                        <label class="form-label">Visibility</label>
                        <select class="form-select">
                           <option value="1" selected>Private</option>
                           <option value="2">Public</option>
                           <option value="3">Hidden</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="mb-3">
                        <label class="form-label">Client name</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="mb-3">
                        <label class="form-label">Reporting period</label>
                        <input type="date" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div>
                        <label class="form-label">Additional information</label>
                        <textarea class="form-control" rows="3"></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                  Cancel
               </a>
               <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <line x1="12" y1="5" x2="12" y2="19" />
                     <line x1="5" y1="12" x2="19" y2="12" />
                  </svg>
                  Create new report
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- Libs JS -->
      <script src="{{asset('js/jquery.js')}}"></script>
      <!-- <script src="{{asset('js/datatables/datatables.min.js')}}"></script> -->
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
      <!-- Libs JS -->
      <script src="{{asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script>
      <!-- Tabler Core -->
      <script src="{{asset('js/tabler.min.js')}}"></script>
      <script src="{{asset('js/demo.min.js')}}"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <!-- <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script> -->
      <script src="{{asset('js/datatable.min.js')}}"></script>
      <script src="{{asset('js/datatablebs.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/openseadragon/4.0.0/openseadragon.min.js"></script>
      <script src="{{asset('openseadragon/openseadragon.min.js')}}"></script>
      @stack('zoom');
      
      <script>
         $(document).ready(function() {
            $('.datatable').dataTable({
               "lengthMenu": [5, 10, 15, 25, 50, 100 ],
               "pageLength": -1,
            });
         });
      </script>
      <script>
         $(document).ready(function() {
            console.log('okee');
            $('.carousel').carousel({
            interval: false,
            });


            
            
         })

         
         
         function zoom(e){
         var zoomer = e.currentTarget;
         e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[3].pageX
         e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[3].pageX
         x = offsetX/zoomer.offsetWidth*100
         y = offsetY/zoomer.offsetHeight*100
         zoomer.style.backgroundPosition = x + '% ' + y + '%';
         }

         
         </script>
</body>

</html>