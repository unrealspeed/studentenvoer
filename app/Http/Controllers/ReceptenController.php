<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rec;

class ReceptenController extends Controller
{
    public function index($id)
    {
      $recs = Rec::where('id', $id)->first();
      return view('recepten.recept')
        ->with('rec', $recs);
    }
    public function delete($id)
    {

      Rec::where('id', $id)->delete();

      return redirect()->action('HomeController@index');
     }
}
