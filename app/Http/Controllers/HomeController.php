<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;

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
      $containers = Container::orderBy('created_at', 'desc')->paginate(25);
      $container = Container::orderBy('created_at', 'desc')->first();
      return view('dashboard', [
         'containers' => $containers,
         'totalContainer' => count($containers),
         'container' => $container
      ])->with('i');
   }
}
