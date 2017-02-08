<?php

namespace App\Http\Controllers;

use App\Rec;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('/admin/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/admin/admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
          'recnaam' => 'required|max:45',
          'recsoort' => 'required|max:15',
          'ingredienten' => 'required',
          'kcal' => 'required',
          'stappen' => 'required',
        ));


          $post = new Rec;

          $post->recnaam = $request->recnaam;
          $post->recsoort = $request->recsoort;
          $post->ingredienten = $request->ingredienten;
          $post->kcal = $request->kcal;
          $post->stappen = $request->stappen;
          $post->save();

          $request->session()->flash('alert-success', 'Recept toegevoegd!');
          return redirect()->action('PostController@index');
          }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
