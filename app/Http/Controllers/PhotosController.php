<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Maison;
use App\User;
use App\Photo;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($maison_id)
    {
        $photos=DB::table('photos')->where('maison_id',$maison_id)->get();
        return view('photo', [
            'photos' => $photos,
            'maison_id' => $maison_id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $maison_id)
    {
        $data = request()->validate([
            'url' => ['bail', 'required', 'url', 'string', 'max:191'],
            'type_photo' => ['bail', 'required', 'string', 'max:191'],
        ]);

        Photo::photoCreate($maison_id);
        return redirect()->route('housePicture', [
            'maison_id' => $maison_id,
        ]);
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
    public function destroy(Request $request)
    {
        $photo = Photo::find(request('photo_id'))->delete();

        return redirect()->route('housePicture',[
            'maison_id' => request('maison_id'),
        ]);
    }
}
