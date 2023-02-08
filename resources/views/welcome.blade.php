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
      <link rel="icon" href="{{asset('img/harbour.png')}}" type="image/x-icon"/>
      <!-- CSS files -->
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
         .table {
            font-size: 10px
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
            <h1 class="navbar-brand d-none-navbar-horizontal pe-0 pe-md-3 me-3" style="font-weight: 900">
               <a href="/" class="me-2">
               <img src="{{asset('img/gscan.png')}}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
               </a>  
               Karantina
            </h1>
            <div class="navbar-nav flex-row order-md-last">
               <a href="?theme=dark" class="nav-link px-0 hide-theme-dark me-3" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
               <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
               </a>
               <a href="?theme=light" class="nav-link px-0 hide-theme-light me-3" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
               <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
               </a>
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
                  <a href="#" class="dropdown-item">Set status</a>
                  <a href="#" class="dropdown-item">Profile & account</a>
                  <a href="#" class="dropdown-item">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Settings</a>
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
                  <li class="nav-item">
                     <a class="nav-link" href="./index.html" >
                     <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                     </span>
                     <span class="nav-link-title">
                        Dashboard
                     </span>
                     </a>
                  </li>
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
         {{-- <div class="container-fluid">
            <div class="page-header d-print-none">
               <div class="row align-items-center">
               <div class="col">
                  <!-- Page pre-title -->
                  <div class="page-pretitle">
                     Overview
                  </div>
                  <h2 class="page-title">
                     Condensed layout
                  </h2>
               </div>
               <!-- Page title actions -->
               <div class="col-auto ms-auto d-print-none">
                  <div class="btn-list">
                     <span class="d-none d-sm-inline">
                     <a href="#" class="btn btn-white">
                        New view
                     </a>
                     </span>
                     <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                     <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                     Create new report
                     </a>
                     <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                     <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                     </a>
                  </div>
               </div>
               </div>
            </div>
         </div> --}}
         <div class="page-body">
            <div class="container-fluid">
               <div class="row ">
                  <div class="col-6">
                     <div class="card">
                     {{--  --}}
                     <div class="card-body border-bottom py-3 ">
                        <div class="row">
                           <div class="col-10">
                              <div class="form-floating mb-3">
                                 <input type="text" required class="form-control" id="date" name="date" placeholder="Enter data...">
                                 <label for="date">Enter data...</label>
                              </div>
                           </div>
                           <div class="col-2">
                              <button class="btn btn-dark btn-block" style="width: 100%">Search</button>
                           </div>
                        </div>
                        {{-- <div class="d-flex">
                           <div class="text-muted">
                           Show
                           <div class="mx-2 d-inline-block">
                              <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                           </div>
                           entries
                           </div>
                           <div class="ms-auto text-muted">
                           Search:
                           <div class="ms-2 d-inline-block">
                              <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                           </div>
                           </div>
                        </div> --}}
                     </div>
                     <div class="table-responsive">
                        <table class="table card-table table-vcenter table table-sm datatable text-sm">
                           <thead>
                           <tr>
                              <th class="w-1">DATETIME</th>
                              <th>PIB NO</th>
                              <th>PIB DATE</th>
                              <th>DOC TYPE</th>
                              <th>LPN</th>
                              <th>FRONT CONT</th>
                              <th>BACK CONT</th>
                              <th>RPM</th>
                              <th>CONT WEIGHT</th>
                              <th>STATUS</th>
                              <th>VERIFIED BY</th>
                           </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><small>01/08/23 13:00</small></td>
                                 <td><small>083927</small></td>
                                 <td class="text-nowrap"><small>06/08/23</small></td>
                                 <td><small>SPJM</small></td>
                                 <td><small>DF94829B</small></td>
                                 <td><small>9834277</small></td>
                                 <td><small>9834277</small></td>
                                 <td class="text-wrap text-success"><small>No Alarm</small></td>
                                 <td><small>7920</small></td>
                                 <td><small>Normal</small></td>
                                 <td><small>System</small></td>
                              </tr>
                              <tr>
                                 <td><small>01/08/23 13:00</small></td>
                                 <td><small>083927</small></td>
                                 <td class="text-nowrap"><small>06/08/23</small></td>
                                 <td><small>SPJM</small></td>
                                 <td><small>DF94829B</small></td>
                                 <td><small>9834277</small></td>
                                 <td><small>9834277</small></td>
                                 <td class="text-wrap text-success"><small>No Alarm</small></td>
                                 <td><small>7920</small></td>
                                 <td><small>Normal</small></td>
                                 <td><small>System</small></td>
                              </tr>
                              <tr>
                                 <td><small>01/08/23 13:00</small></td>
                                 <td><small>083927</small></td>
                                 <td class="text-nowrap"><small>06/08/23</small></td>
                                 <td><small>SPJM</small></td>
                                 <td><small>DF94829B</small></td>
                                 <td><small>9834277</small></td>
                                 <td><small>9834277</small></td>
                                 <td class="text-wrap text-success"><small>No Alarm</small></td>
                                 <td><small>7920</small></td>
                                 <td><small>Normal</small></td>
                                 <td><small>System</small></td>
                              </tr>
                              <tr>
                                 <td><small>01/08/23 13:00</small></td>
                                 <td><small>083927</small></td>
                                 <td class="text-nowrap"><small>06/08/23</small></td>
                                 <td><small>SPJM</small></td>
                                 <td><small>DF94829B</small></td>
                                 <td><small>9834277</small></td>
                                 <td><small>9834277</small></td>
                                 <td class="text-wrap text-success"><small>No Alarm</small></td>
                                 <td><small>7920</small></td>
                                 <td><small>Normal</small></td>
                                 <td><small>System</small></td>
                              </tr>
                              <tr>
                                 <td><small>01/08/23 13:00</small></td>
                                 <td><small>083927</small></td>
                                 <td class="text-nowrap"><small>06/08/23</small></td>
                                 <td><small>SPJM</small></td>
                                 <td><small>DF94829B</small></td>
                                 <td><small>9834277</small></td>
                                 <td><small>9834277</small></td>
                                 <td class="text-wrap text-success"><small>No Alarm</small></td>
                                 <td><small>7920</small></td>
                                 <td><small>Normal</small></td>
                                 <td><small>System</small></td>
                              </tr>
                              <tr>
                                 <td><small>01/08/23 13:00</small></td>
                                 <td><small>083927</small></td>
                                 <td class="text-nowrap"><small>06/08/23</small></td>
                                 <td><small>SPJM</small></td>
                                 <td><small>DF94829B</small></td>
                                 <td><small>9834277</small></td>
                                 <td><small>9834277</small></td>
                                 <td class="text-wrap text-success"><small>No Alarm</small></td>
                                 <td><small>7920</small></td>
                                 <td><small>Normal</small></td>
                                 <td><small>System</small></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="card-footer d-flex align-items-center">
                        <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                        <ul class="pagination m-0 ms-auto">
                           <li class="page-item disabled">
                           <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                              <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
                              
                           </a>
                           </li>
                          
                           <li class="page-item">
                           <a class="page-link" href="#">
                               <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
                           </a>
                           </li>
                        </ul>
                     </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="card">
                        <div class="card-header d-flex justify-content-between">
                           <span class="avatar avatar-md" style="background-image: url({{asset('img/xray/1.jpeg')}})"></span>
                           <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/xray/2.jpeg')}})"></span>
                           <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/xray/3.jpg')}})"></span>
                           <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/xray/4.jpg')}})"></span>
                           <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/xray/5.jpg')}})"></span>
                           <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/xray/6.jpeg')}})"></span>
                           
                            
                        </div>
                        <div class="card-body">
                           <div id="carousel-controls" class="carousel slide" data-interval="false">
                              <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <img data-bs-toggle="modal" data-bs-target="#modal-full-width" class="d-block w-100" alt="" height="270" style="object-fit: cover" src="{{asset('img/xray/1.jpeg')}} ">
                              </div>
                              <div class="carousel-item">
                                 <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="{{asset('img/xray/2.jpeg')}}">
                              </div>
                              <div class="carousel-item">
                                 <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="{{asset('img/xray/3.jpg')}}">
                              </div>
                              <div class="carousel-item">
                                 <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="{{asset('img/xray/4.jpg')}}">
                              </div>
                              <div class="carousel-item">
                                 <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="{{asset('img/xray/5.jpg')}}">
                              </div>
                              <div class="carousel-item">
                                 <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="{{asset('img/xray/6.jpeg')}}">
                              </div>
                              </div>
                              <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                              </a>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="row">
                              <div class="col-3">
                                 <div class="form-floating mb-3">
                                    <input type="text" required class="form-control" id="date" name="date"  value="9879" disabled>
                                    <label for="date">LPN</label>
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="form-floating mb-3">
                                    <input type="text" required class="form-control" id="date" name="date" value="123123" disabled>
                                    <label for="date">Front Cont</label>
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="form-floating mb-3">
                                    <input type="text" required class="form-control" id="date" name="date" value="HMMM876382" disabled>
                                    <label for="date">Back Cont</label>
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="form-floating mb-3">
                                    <input type="text" required class="form-control" id="date" name="date" value="NORMAL" disabled>
                                    <label for="date">Status</label>
                                 </div>
                              </div>
                              <div class="col-9">
                                 <div class="form-floating mb-3">
                                    <input type="text" required class="form-control" id="date" name="date" value="-" disabled>
                                    <label for="date">Inspection Description</label>
                                 </div>
                              </div>
                              <div class="col-3">
                                 <a href="" class="btn btn-success btn-block" style="width: 100%"><!-- Download SVG icon from http://tabler-icons.io/i/download -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><polyline points="7 11 12 16 17 11" /><line x1="12" y1="4" x2="12" y2="16" /></svg> Download</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
   <div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detail Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img class="d-block w-100" alt="" src="{{asset('img/xray/1.jpeg')}} ">
          </div>
          {{-- <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
          </div> --}}
        </div>
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
   <script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
      <script src="{{asset('js/datatables/datatables.min.js')}}"></script>
      <!-- Libs JS -->
      <script src="{{asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script>
      <!-- Tabler Core -->
      <script src="{{asset('js/tabler.min.js')}}"></script>
      <script src="{{asset('js/demo.min.js')}}"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         $(document).ready(function() {
            console.log('okee');
            $('.carousel').carousel({
            interval: false,
            });
         })
         </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
            chart: {
               type: "area",
               fontFamily: 'inherit',
               height: 40.0,
               sparkline: {
                  enabled: true
               },
               animations: {
                  enabled: false
               },
            },
            dataLabels: {
               enabled: false,
            },
            fill: {
               opacity: .16,
               type: 'solid'
            },
            stroke: {
               width: 2,
               lineCap: "round",
               curve: "smooth",
            },
            series: [{
               name: "Profits",
               data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
            }],
            grid: {
               strokeDashArray: 4,
            },
            xaxis: {
               labels: {
                  padding: 0,
               },
               tooltip: {
                  enabled: false
               },
               axisBorder: {
                  show: false,
               },
               type: 'datetime',
            },
            yaxis: {
               labels: {
                  padding: 4
               },
            },
            labels: [
               '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: ["#206bc4"],
            legend: {
               show: false,
            },
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
            chart: {
               type: "line",
               fontFamily: 'inherit',
               height: 40.0,
               sparkline: {
                  enabled: true
               },
               animations: {
                  enabled: false
               },
            },
            fill: {
               opacity: 1,
            },
            stroke: {
               width: [2, 1],
               dashArray: [0, 3],
               lineCap: "round",
               curve: "smooth",
            },
            series: [{
               name: "May",
               data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
            }, {
               name: "April",
               data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
            }],
            grid: {
               strokeDashArray: 4,
            },
            xaxis: {
               labels: {
                  padding: 0,
               },
               tooltip: {
                  enabled: false
               },
               type: 'datetime',
            },
            yaxis: {
               labels: {
                  padding: 4
               },
            },
            labels: [
               '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: ["#206bc4", "#a8aeb7"],
            legend: {
               show: false,
            },
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
            chart: {
               type: "bar",
               fontFamily: 'inherit',
               height: 40.0,
               sparkline: {
                  enabled: true
               },
               animations: {
                  enabled: false
               },
            },
            plotOptions: {
               bar: {
                  columnWidth: '50%',
               }
            },
            dataLabels: {
               enabled: false,
            },
            fill: {
               opacity: 1,
            },
            series: [{
               name: "Profits",
               data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
            }],
            grid: {
               strokeDashArray: 4,
            },
            xaxis: {
               labels: {
                  padding: 0,
               },
               tooltip: {
                  enabled: false
               },
               axisBorder: {
                  show: false,
               },
               type: 'datetime',
            },
            yaxis: {
               labels: {
                  padding: 4
               },
            },
            labels: [
               '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: ["#206bc4"],
            legend: {
               show: false,
            },
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
            chart: {
               type: "bar",
               fontFamily: 'inherit',
               height: 240,
               parentHeightOffset: 0,
               toolbar: {
                  show: false,
               },
               animations: {
                  enabled: false
               },
               stacked: true,
            },
            plotOptions: {
               bar: {
                  columnWidth: '50%',
               }
            },
            dataLabels: {
               enabled: false,
            },
            fill: {
               opacity: 1,
            },
            series: [{
               name: "Web",
               data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
            }, {
               name: "Social",
               data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
            }, {
               name: "Other",
               data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
            }],
            grid: {
               padding: {
                  top: -20,
                  right: 0,
                  left: -4,
                  bottom: -4
               },
               strokeDashArray: 4,
               xaxis: {
                  lines: {
                     show: true
                  }
               },
            },
            xaxis: {
               labels: {
                  padding: 0,
               },
               tooltip: {
                  enabled: false
               },
               axisBorder: {
                  show: false,
               },
               type: 'datetime',
            },
            yaxis: {
               labels: {
                  padding: 4
               },
            },
            labels: [
               '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
            ],
            colors: ["#206bc4", "#79a6dc", "#bfe399"],
            legend: {
               show: false,
            },
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
            chart: {
               type: "radialBar",
               fontFamily: 'inherit',
               height: 40,
               width: 40,
               animations: {
                  enabled: false
               },
               sparkline: {
                  enabled: true
               },
            },
            tooltip: {
               enabled: false,
            },
            plotOptions: {
               radialBar: {
                  hollow: {
                     margin: 0,
                     size: '75%'
                  },
                  track: {
                     margin: 0
                  },
                  dataLabels: {
                     show: false
                  }
               }
            },
            colors: ["#206bc4"],
            series: [35],
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
            chart: {
               type: "area",
               fontFamily: 'inherit',
               height: 192,
               sparkline: {
                  enabled: true
               },
               animations: {
                  enabled: false
               },
            },
            dataLabels: {
               enabled: false,
            },
            fill: {
               opacity: .16,
               type: 'solid'
            },
            stroke: {
               width: 2,
               lineCap: "round",
               curve: "smooth",
            },
            series: [{
               name: "Purchases",
               data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
            }],
            grid: {
               strokeDashArray: 4,
            },
            xaxis: {
               labels: {
                  padding: 0,
               },
               tooltip: {
                  enabled: false
               },
               axisBorder: {
                  show: false,
               },
               type: 'datetime',
            },
            yaxis: {
               labels: {
                  padding: 4
               },
            },
            labels: [
               '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: ["#206bc4"],
            legend: {
               show: false,
            },
            point: {
               show: false
            },
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
            chart: {
               type: "line",
               fontFamily: 'inherit',
               height: 24,
               animations: {
                  enabled: false
               },
               sparkline: {
                  enabled: true
               },
            },
            tooltip: {
               enabled: false,
            },
            stroke: {
               width: 2,
               lineCap: "round",
            },
            series: [{
               color: "#206bc4",
               data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
            }],
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
            chart: {
               type: "line",
               fontFamily: 'inherit',
               height: 24,
               animations: {
                  enabled: false
               },
               sparkline: {
                  enabled: true
               },
            },
            tooltip: {
               enabled: false,
            },
            stroke: {
               width: 2,
               lineCap: "round",
            },
            series: [{
               color: "#206bc4",
               data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
            }],
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
            chart: {
               type: "line",
               fontFamily: 'inherit',
               height: 24,
               animations: {
                  enabled: false
               },
               sparkline: {
                  enabled: true
               },
            },
            tooltip: {
               enabled: false,
            },
            stroke: {
               width: 2,
               lineCap: "round",
            },
            series: [{
               color: "#206bc4",
               data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
            }],
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
            chart: {
               type: "line",
               fontFamily: 'inherit',
               height: 24,
               animations: {
                  enabled: false
               },
               sparkline: {
                  enabled: true
               },
            },
            tooltip: {
               enabled: false,
            },
            stroke: {
               width: 2,
               lineCap: "round",
            },
            series: [{
               color: "#206bc4",
               data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
            }],
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
            chart: {
               type: "line",
               fontFamily: 'inherit',
               height: 24,
               animations: {
                  enabled: false
               },
               sparkline: {
                  enabled: true
               },
            },
            tooltip: {
               enabled: false,
            },
            stroke: {
               width: 2,
               lineCap: "round",
            },
            series: [{
               color: "#206bc4",
               data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
            }],
         })).render();
      });
      // @formatter:on
   </script>
   <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
         window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
            chart: {
               type: "line",
               fontFamily: 'inherit',
               height: 24,
               animations: {
                  enabled: false
               },
               sparkline: {
                  enabled: true
               },
            },
            tooltip: {
               enabled: false,
            },
            stroke: {
               width: 2,
               lineCap: "round",
            },
            series: [{
               color: "#206bc4",
               data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
            }],
         })).render();
      });
      // @formatter:on
   </script>
</body>

</html>