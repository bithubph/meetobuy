<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicePro;
use DB;
use App\User;

class ServiceProController extends Controller
{
    //
    public function index(){
        return ServicePro::all();
    }
    public function show($servicepro){
        $servicepro= ServicePro::findOrFail($servicepro);
        return  $servicepro;
        
    }
    public function store(Request $request){
        $servicepro= ServicePro::create($request->all());
        return response()->json($servicepro, 201);
    }
    public function update(Request $request,$servicepro){
        $servicepro= ServicePro::findOrFail($servicepro);
         $servicepro->update($request->all());
        return response()->json($servicepro, 200);
    }
    public function delete($servicepro){
        $servicepro= ServicePro::findOrFail($servicepro);
        $servicepro->delete();
        return response()->json(null, 204);
        // return response()->json([
        //     'html' => view('profile', compact('data'))->render(),
        // ]);
    }

    public function search(Request $request) { 
        $text = $request->search;

        $service = DB::table('service_pros') ->where('P_name', 'like', '%'.$text.'%')->orWhere('description','like','%'.$text.'%')
        ->orWhere('phone','like','%'.$text.'%')
        ->orWhere('state','like','%'.$text.'%')
        ->orWhere('min_price','like','%'.$text.'%')
        ->orWhere('tool','like','%'.$text.'%')
        ->orWhere('description','like','%'.$text.'%')
        ->orWhere('address','like','%'.$text.'%')->get();
        $users = DB::table('users') ->where('name', 'like','%'.$text.'%')->orWhere('email','like','%'.$text.'%')->get();
        
       
        $query = $service->union($users);
        if(count($query) > 0){
            return response()->json($query, 200);
            //return view('partials/search',['text'=>$text])->withDetails($query);

        }
        // elseif(count($query) == 0) {
        //     return view('partials/search',['text'=>$text])->withMessage('warning','No Details found. Check Spelling!')->withDetails($query);

        // }
    }    

    // public function bookService($id){
    //     Auth::check();
    //     $service= ServicePro::findOrFail($id);
    //     $user = Auth::user()->id;
    //     $user->
    // }
}
