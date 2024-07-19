@extends('layouts.app-doc')
@section('title')
PDF Example
@endsection
@section('content')

<style>
   html {
      -webkit-print-color-adjust: exact;
   }

   table,
   th,
   td {
      border: 1px solid black;
      border-collapse: collapse;
   }

   .ttd {
      font-size: 10px;
   }

   table td {
      font-size: 10px;
      padding-top: 5px;
  padding-bottom: 5px;
      padding-left: 5px;
      padding-right: 5px;
   }



   table {
      width: 100%;
   }


   .border-none {
      border: none;
   }
</style>

<div class="container-xl">
   <!-- Page title -->
   <div class="page-header d-print-none">
      <div class="row align-items-center">
         <div class="col">
            <h2 class="page-title">
               Form Analisis
            </h2>
         </div>
         <!-- Page title actions -->
         <div class="col-auto ms-auto d-print-none">
            <button type="button" class="btn btn-light" onclick="javascript:window.print();">
               <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                  <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                  <rect x="7" y="13" width="10" height="8" rx="2" />
               </svg>
               Print
            </button>
         </div>
      </div>
   </div>
</div>
<div class="page-body">
   <div class="container-xl">
      <div class="card card-lg">
         <div class="card-body">
            <table>
               <tbody>
                  <tr>
                     <td class="text-center" colspan="2" style="padding:20px">
                        <img src="{{asset('img/karantina.png')}}" alt="" width="120">
                     </td>
                     <td class="text-center" colspan="2">
                        <h2>BALAI BESAR KARANTINA HEWAN, IKAN DAN TUMBUHAN DKI JAKARTA</h2>
                        <h4>Jl. Enggano No. 17 Tanjung Priok, Jakarta Utama 14310
                           Telp (021) 43931012,43931549
                           Fax : (021) 43902124, 43931061
                           </h4>
                     </td>
                     <td class="text-center" colspan="2" style="width:200px">
                        
                     </td>
                  </tr>
                  <tr>
                     <td colspan="5" class="text-center"><h2>FORM HASIL ANALISIS PINDAI</h2></td>
                  </tr>
                  {{-- <tr>
                     <td colspan="2">No. Dok : FM.PS.HRD.11</td>
                     <td colspan="2">Rev: 3</td>
                     <td colspan="2">Hal : 1 dari 2</td>
                  </tr>
                  <tr>
                     <td colspan="2">Periode</td>
                     <td>: Semester </td>
                     <td></td>
                     <td colspan="2" class="text-center" style="background-color: rgb(227, 243, 149)"><b>Level : Staf</b></td>
                  </tr> --}}
               </tbody>
            </table>

            <table class="mt-2">
               <tbody>
                  <tr>
                     <td>Tanggal Pindai</td>
                     <td class="text-center">:</td>
                     <td style="width: 70%"></td>
                  </tr>
                  <tr>
                     <td>Nomor Agenda</td>
                     <td class="text-center">:</td>
                     <td style="width: 70%"></td>
                  </tr>
                  <tr>
                     <td>Nama Importir</td>
                     <td class="text-center">:</td>
                     <td style="width: 70%"></td>
                  </tr>
                  <tr>
                     <td>Nomor Kontainer</td>
                     <td class="text-center">:</td>
                     <td style="width: 70%"></td>
                  </tr>
                  <tr>
                     <td>Hasil Analisis</td>
                     <td class="text-center">:</td>
                     <td style="width: 70%"></td>
                  </tr>
                  <tr>
                     <td>Nama Analisis</td>
                     <td class="text-center">:</td>
                     <td style="width: 70%"></td>
                  </tr>
                  <tr>
                     <td>NIP</td>
                     <td class="text-center">:</td>
                     <td style="width: 70%"></td>
                  </tr>
                  <tr>
                     <td colspan="3" style="height: 200px">Salinan gambar dari mesin pindai</td>
                     
                  </tr>
                  <tr>
                     <td colspan="3" style="height: 200px">Salinan gambar hasil analis</td>
                     
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection