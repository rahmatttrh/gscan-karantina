<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->middleware('auth');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
      $today = Carbon::now();
      // $containers = Container::orderBy('created_at', 'desc')->paginate(25);
      // $container = Container::orderBy('created_at', 'desc')->first();

      // $containers = Http::withHeaders([
      //    'Accept' => 'applicaton/json'
      // ])->get(
      //    "http://192.168.88.106/bc/karantina/tanggal/" . $today->format('Y-m-d'),
      // )->object();

      // $users = Http::withHeaders([
      //    'Accept' => 'applicaton/json'
      // ])->get(
      //    "https://jsonplaceholder.typicode.com/users",
      // )->object();

      // dd($users);


      // Test Local API
      $containers = Http::withHeaders([
         'Accept' => 'applicaton/json'
      ])->get(
         "http://localhost:8002/api/bc/karantina/tanggal/" . $today->format('Y-m-d'),
      )->object();
      dd($containers->data);



      return view('dashboard', [
         'type' => 1,
         'containers' => $containers,
         'container' => null,
         // 'users' => $users
         // 'totalContainer' => count($containers),
         // 'container' => $container
      ])->with('i');
   }
}
