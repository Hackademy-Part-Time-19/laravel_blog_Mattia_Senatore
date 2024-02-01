<?php

namespace App\Http\Controllers;

use App\Mail\RiceviEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
   public function RiceviInformazioni(Request  $request){
    $data = $request->all();
    return redirect()->route('contatti')->with('success','i dati sono arrivati a destinazione');
    Mail::to('gammattia67@gmail.com')->send(new RiceviEmail($data['name'],$data['email'],$data['description'],));
   }
}
