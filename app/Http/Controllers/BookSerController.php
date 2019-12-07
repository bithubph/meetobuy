<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicePro;
use App\User;
use App\BookSer;

class BookSerController extends Controller
{
    //

    public function bookser($id){
      $service = ServicePro::findOrFail($id);
      $user = auth()->user()->id;

      $bookser = new BookSer();
      $bookser->user_id = $user;
      $bookser->service_pro_id = $service->id;
      $bookser->status = 1;
      if($bookser->save()){
        return response()->json('Service booked', 200);
      }

    }

    public function acceptser($id){
      $service = ServicePro::findOrFail($id);
      $book = BookSer::findOrFail($service->id);
      $book->status = 2;
      return 'accepted';
    }
    public function allbooked(){
      Auth::check();
      
      $user = User::find(auth()->user()->id);
      if($user->role === 2){
        $booked = BookSer::where('user_id',$user->id)->get();
      }

    }
}
