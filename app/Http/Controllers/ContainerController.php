<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\ContainerDesc;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContainerController extends Controller
{
   public function detail($container)
   {
      // $dekripId = dekripRambo($id);
      // $container = Container::find($dekripId);
      // $containers = Container::orderBy('created_at', 'desc')->paginate(25);
      $today = Carbon::now();

      $containers = Http::withHeaders([
         'Accept' => 'applicaton/json'
      ])->get(
         "http://192.168.88.106/bc/karantina/tanggal/" . $today->format('Y-m-d'),
      )->object();


      $container = Http::withHeaders([
         'Accept' => 'applicaton/json'
      ])->get(
         "http://192.168.88.106/bc/karantina/container/" . $container,
      )->object();
      
// dd($container->data[0]);

         // dd($container);

      return view('dashboard', [
         'type' => 1,   
         'containers' => $containers,
         'totalContainer' => count($containers->data),
         'container' => $container
      ])->with('i');
   }

   public function detailPeriod($date1, $date2, $cont)
   {
      $containers = Http::withHeaders([
         'Accept' => 'applicaton/json'
      ])->get(
         "http://192.168.88.106/bc/karantina/tanggal/" . $date1 . "/" . $date2,
      )->object();

      $container = Http::withHeaders([
         'Accept' => 'applicaton/json'
      ])->get(
         "http://192.168.88.106/bc/karantina/container/" . $cont,
      )->object();


      $container = Http::withHeaders([
         'Accept' => 'applicaton/json'
      ])->get(
         "http://192.168.88.106/bc/karantina/container/" . $cont,
      )->object();

      return view('dashboard', [
         'type' => 2,
         'date1' => $date1,
         'date2' => $date2,
         'containers' => $containers,
         // 'totalContainer' => count($containers),
         'container' => $container
      ])->with('i');
   }


   public function period(Request $req)
   {
      $containers = Http::withHeaders([
         'Accept' => 'applicaton/json'
      ])->get(
         "http://192.168.88.106/bc/karantina/tanggal/" . $req->date1 . "/" . $req->date2,
      )->object();


      // dd($containers);
      return view('dashboard', [
         'type' => 2,
         'date1' => $req->date1,
         'date2' => $req->date2,
         'containers' => $containers,
         // 'totalContainer' => count($containers),
         'container' => null
      ])->with('i');
   }

   public function store(Request $request){
      // dd($request->entry_container1);
      ContainerDesc::create([
         'entry_container1' => $request->entry_container1,
         'deskripsi' => $request->desc
      ]);

      

      return redirect()->back();
   }
}
