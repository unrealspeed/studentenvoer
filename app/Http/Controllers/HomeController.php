<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rec;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       $search = \Request::get('search'); //<-- we use global request to get the param of URI

       $recs = Rec::where('recnaam','like','%'.$search.'%')
       ->orderBy('recnaam')
       ->paginate(10);

      return view('home',compact('home'), ['rec' => $recs]);
    }
    public function admin(){
      return view('/admin/admin');
    }

  }
