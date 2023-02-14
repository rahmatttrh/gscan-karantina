@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row ">
      <div class="col-6">
         <div class="card">
            <div class="card-body border-bottom py-3 ">
               <form action="{{route('period')}}" method="post">
                  @csrf
                  <div class="row">
                     <div class="col-md-5">
                        @if($type == 2)
                        <div class="form-floating mb-3">
                           <input type="date" required class="form-control" id="date1" value="{{$date1}}" name="date1">
                           <label for="date">From</label>
                        </div>
                        @else
                        <div class="form-floating mb-3">
                           <input type="date" required class="form-control" id="date1" name="date1">
                           <label for="date">From</label>
                        </div> 
                        @endif
                        
                     </div>
                     <div class="col-md-5">
                        @if($type == 2)
                        <div class="form-floating mb-3">
                           <input type="date" required class="form-control" id="date2" value="{{$date2}}" name="date2">
                           <label for="date">To</label>
                        </div>
                        @else
                        <div class="form-floating mb-3">
                           <input type="date" required class="form-control" id="date2" name="date2">
                           <label for="date">To</label>
                        </div>
                        @endif
                        
                     </div>
                     <div class="col-2">
                        <button type="submit" class="btn btn-dark btn-block" style="width: 100%">Search</button>
                     </div>
                  </div>
               </form>
              
               <div class=" d-flex align-items-center">
                  <small>
                     {{-- <p class="m-0 text-muted">Showing <span>{{$containers->firstItem()}}</span> to <span>{{$containers->lastItem()}}</span> of <span>{{$totalContainer}}</span> entries</p> --}}
                  </small>
               </div>
            </div>
            <div class="table-responsive">
               <table class="table card-table table-vcenter table table-sm datatable text-sm">
                  <thead>
                     <tr>
                        <th class="w-1">DATETIME</th>
                        <th>KT16 NO</th>
                        <th>KT16 DATE</th>
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
                     {{-- @foreach ($users as $user)
                         <tr>
                           <td colspan="11">{{$user->name}}</td>
                         </tr>
                     @endforeach --}}
                     @if ($containers)
                        @foreach ($containers->data as $cont)
                     
                           @if($container)
                           <tr class="{{$cont->entry_container1 == $container->data[0]->entry_container1 ? 'bg-dark-blue' : ''}}">
                           @else
                           <tr>
                           @endif
                          
                              <td>
                                 @if ($type == 1)
                                   
                                    <a style="text-decoration: none" href="{{route('container.detail', $cont->entry_container1 )}}">
                                       <small>{{$cont->entry_date}} <br>
                                       {{$cont->entry_time}}
                                       </small>
                                    </a>
                                    @else
                                    <a style="text-decoration: none" href="{{route('container.detail.period', [$date1, $date2 ,$cont->entry_container1] )}}">
                                       <small>{{$cont->entry_date}} <br>
                                       {{$cont->entry_time}}
                                       </small>
                                    </a>
                                 @endif
                                 
                              </td>
                              <td><small>{{$cont->doc_no}}</small></td>
                              <td class="text-nowrap"><small>{{$cont->doc_date}}</small></td>
                              <td><small>{{$cont->doc_type}}</small></td>
                              <td><small>{{$cont->entry_lpn}}</small></td>
                              <td><small>{{$cont->entry_container1}}</small></td>
                              <td><small>{{$cont->entry_container2}}</small></td> 
                              <td class="text-wrap text-success"><small>{{$cont->entry_speed}}</small></td>
                              <td><small>{{$cont->entry_container_weight}}</small></td>
                              <td><small>-</small></td>
                              <td><small>-</small></td>
                           </tr>
                        @endforeach
                        @else
                        <tr>
                           <td colspan="11" class="text-center p-4">Empty</td>
                        </tr>
                     @endif
                     
                  
                  </tbody>
               </table>
            </div>
         </div>
      </div>

      {{-- Right --}}
      <div class="col-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
              
               @if ($container)
             
                 
                     <img class="avatar avatar-md" src="http:{{$container->data[0]->entry_lpn_image}}" alt="">
                     <img class="avatar avatar-md" src="http:{{$container->data[0]->entry_lpn2_image}}" alt="">
                     <img class="avatar avatar-md" src="http:{{$container->data[0]->entry_con1_image}}" alt="">
                     <img class="avatar avatar-md" src="http:{{$container->data[0]->entry_con3_image}}" alt="">
                     <img class="avatar avatar-md" src="http:{{$container->data[0]->entry_xray_image}}" alt="">
                     <img class="avatar avatar-md" src="http:{{$container->data[0]->entry_xray_image2}}" alt="">
                  
                  <!-- <span class="avatar avatar-md ms-2" style="background-image: url(http:{{$cont->entry_lpn2_image}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url(http:{{$cont->entry_con1_image}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url(http:{{$cont->entry_con3_image}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url(http:{{$cont->entry_xray_image}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url(http:{{$cont->entry_xray_image2}})"></span> -->
                  @else
                  <span class="avatar avatar-md" style="background-image: url({{asset('img/image-gallery.png')}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/image-gallery.png')}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/image-gallery.png')}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/image-gallery.png')}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/image-gallery.png')}})"></span>
                  <span class="avatar avatar-md ms-2" style="background-image: url({{asset('img/image-gallery.png')}})"></span>
               @endif
            </div>
            <div class="card-body">
               <div id="carousel-controls" class="carousel slide" data-interval="false">
                  <div class="carousel-inner">
                     @if ($container)

                    
                        <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#modal-image">
                           <a href="#"  data-bs-toggle="modal" data-bs-target="#modal-image" >
                           <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="http:{{$container->data[0]->entry_lpn_image}}">
                           </a>
                        </div>
                        <div class="carousel-item">
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#modal-image2" >
                           <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="http:{{$container->data[0]->entry_lpn2_image}}">
                     </a>
                        </div>
                        <div class="carousel-item">
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#modal-image3" >
                           <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="http:{{$container->data[0]->entry_con1_image}}">
                     </a>
                        </div>
                        <div class="carousel-item">
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#modal-image4" >
                           <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="http:{{$container->data[0]->entry_con3_image}}">
                     </a>
                        </div>
                        <div class="carousel-item">
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#modal-image5" >
                           <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="http:{{$container->data[0]->entry_xray_image}}">
                     </a>
                        </div>
                        <div class="carousel-item">
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#modal-image6" >
                           <img class="d-block w-100" alt="" height="270" style="object-fit: cover" src="http:{{$container->data[0]->entry_xray_image2}}">
                     </a>
                        </div>
                        @else
                        <div class="carousel-item active">
                           <div class="card">
                              <div class="card-body text-center">
                                 {{-- <h5>Image Empty</h5> --}}
                                 <img height="200px" src="{{asset('img/image-gallery.png')}}" alt="">
                              </div>
                           </div>
                        </div>
                     @endif
                     
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
               {{-- @if ($container) --}}
               <div class="row">
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date"  value="{{$container->data[0]->entry_lpn ?? '-'}}" disabled>
                        <label for="date">LPN</label>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date" value="{{$container->data[0]->entry_container1 ?? '-'}}" disabled>
                        <label for="date">Front Cont</label>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date" value="{{$container->data[0]->entry_container2 ?? '-'}}" disabled>
                        <label for="date">Back Cont</label>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="form-floating mb-3">
                        <input type="text" required class="form-control" id="date" name="date" value="-" disabled>
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
                     <a href="#" class="btn btn-success btn-block disabled" style="width: 100%"><!-- Download SVG icon from http://tabler-icons.io/i/download -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><polyline points="7 11 12 16 17 11" /><line x1="12" y1="4" x2="12" y2="16" /></svg> Download</a>
                  </div>
               </div>
               {{-- @endif --}}
               
            </div>
         </div>
      </div>
   </div>
</div>


@if($container)
<x-image1 :image="$container->data[0]->entry_lpn_image" />
<x-image2 :image="$container->data[0]->entry_lpn2_image" />
<x-image3 :image="$container->data[0]->entry_con1_image" />
<x-image4 :image="$container->data[0]->entry_con3_image" />
<x-image5 :image="$container->data[0]->entry_xray_image" />
<x-image6 :image="$container->data[0]->entry_xray_image2" />
@endif

@endsection