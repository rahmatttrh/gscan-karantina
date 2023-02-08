<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
   public function detail($id)
   {
      $dekripId = dekripRambo($id);
      $container = Container::find($dekripId);
      $containers = Container::orderBy('created_at', 'desc')->paginate(25);

      return view('dashboard', [
         'containers' => $containers,
         'totalContainer' => count($containers),
         'container' => $container
      ])->with('i');
   }
}
