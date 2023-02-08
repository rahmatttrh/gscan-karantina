@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row ">
      {{-- Left --}}
      <div class="coll-12">
         {{-- <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(//res.cloudinary.com/active-bridge/image/upload/slide1.jpg)">
            <img src="//res.cloudinary.com/active-bridge/image/upload/slide1.jpg" />
          </figure> --}}
          
      </div>
      <div class="col-6">
         <div class="card">
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
               <div class=" d-flex align-items-center">
                  <small>
                     <p class="m-0 text-muted">Showing <span>{{$containers->firstItem()}}</span> to <span>{{$containers->lastItem()}}</span> of <span>{{$totalContainer}}</span> entries</p>
                  </small>
               </div>
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
                     @foreach ($containers as $cont)
                        <tr class="{{$cont->entry_container1 == $container->entry_container1 ? 'bg-dark-blue' : ''}}">
                           <td>
                              <a style="text-decoration: none" href="{{route('container.detail', $cont->entry_container1 )}}">
                                 <small>{{$cont->entry_date}} <br>
                                 {{$cont->entry_time}}
                                 </small>
                              </a>
                           </td>
                           <td><small>{{$cont->doc_no}}</small></td>
                           <td class="text-nowrap"><small>{{$cont->doc_date}}</small></td>
                           <td><small>{{$cont->doc_type}}</small></td>
                           <td><small>{{$cont->lpn}}</small></td>
                           <td><small>{{$cont->front_cont}}</small></td>
                           <td><small>{{$cont->back_cont}}</small></td>
                           <td class="text-wrap text-success"><small>{{$cont->speed}}</small></td>
                           <td><small>{{$cont->entry_container_weight}}</small></td>
                           <td><small>-</small></td>
                           <td><small>-</small></td>
                        </tr>
                     @endforeach
                  
                  </tbody>
               </table>
               
            </div>
            <div class="card-footer d-flex align-items-center">
               {{-- <small>
                  <div class="text-muted ">
                     Page
                     <div class="mx-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" value="{{$containers->currentPage()}}" size="3" aria-label="Invoices count" disabled>
                     </div>
               </div>
               </small> --}}
               <small>
                  {{-- <p class="m-0 text-muted">Showing <span>{{$containers->firstItem()}}</span> to <span>{{$containers->lastItem()}}</span> of <span>{{$totalContainer}}</span> entries</p> --}}
               </small>
               <div class="pagination m-0 ms-auto ">
                  {{$containers->links()}}
               </div>
            </div>
         </div>
      </div>

      {{-- Right --}}
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
                  <a style="opacity: 0" class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </a>
                  <a style="opacity: 0" class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </a>
               </div>
            </div>
            <div class="card-footer">
               @if ($container)
               <div class="row">
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date"  value="{{$container->lpn}}" disabled>
                        <label for="date">LPN</label>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date" value="{{$container->front_cont}}" disabled>
                        <label for="date">Front Cont</label>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date" value="{{$container->back_cont}}" disabled>
                        <label for="date">Back Cont</label>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date" value="{{$container->status }}" disabled>
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
               @endif
               
            </div>
         </div>
      </div>
   </div>
</div>
@endsection