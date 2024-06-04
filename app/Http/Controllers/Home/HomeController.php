<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Availability;
class HomeController extends Controller
{
   public function index()
   {
      return view('Home.index');
   }

   public function about()
   {
      $users = User::all();
      $availabilities = Availability::all();
      return view('Home.about', compact('users','availabilities'));
   }

   public function service()
   {
      return view('Home.services');
   }

   public function Choix()
   {
      return view('Home.choix');
   }

   public function services()
   {
      return view('Home.services');
   }

   public function paquets(){
      return view('Home.paquet');
   }

   public function paiement()
   {
      return view('Home.paiement');
   }
   public function compte()
   {
      return view('Home.mon-compte');
   }
}
