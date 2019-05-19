<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Maison;
use App\User;
use App\Photo;


class MaisonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maisons=DB::table('maisons')->join('photos','maisons.id', '=', 'photos.maison_id')->where('type_photo', '=', 'photo principale')->get();
        //$maisons=Maison::all();

        return view('houseList', [
            'houses' => $maisons,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('houseForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => ['bail', 'required', 'string', 'max:191'],
            'adresse1' => ['bail', 'required', 'string', 'max:191'],
            'adresse2' => ['nullable','bail', 'string', 'max:191', 'min:0'],
            'ville' => ['bail', 'required', 'string', 'max:191'],
            'pays' => ['bail', 'required', 'string', 'max:191'],
            'prix_hors_saison' => ['bail', 'required', 'numeric'],
            'prix_saison' => ['bail', 'required', 'numeric'],
            'description' => ['bail', 'required', 'string', 'max:65535'],
        ]);

        $id = Maison::houseCreate() -> id;
            return redirect()->route('house', [
                'id' => $id,
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
        //$maison=DB::table('maisons')->where('id',$id)->join('users','maisons.user_id', '=', 'users.id')->first();
        //$maison=DB::table('users')->join('maisons','users.id', '=', 'maisons.user_id')->first();
        $user_id=DB::table('maisons')->where('id',$id)->pluck('user_id');        $maison=Maison::find($id);
        $user=User::where('id',$user_id)->first();
        $photos=Photo::where('maison_id', $id)->get();

        return  view('house',[
            'maison' => $maison,
            'user' => $user,
            'photos' => $photos,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $maison = Maison::find(request('maison_id'))->update([
            'name' => request('name'),
            'adresse1' => request('adresse1'),
            'adresse2' => request('adresse2'),
            'ville' => request('ville'),
            'pays' => request('pays'),
            'prix_hors_saison' => request('prix_hors_saison'),
            'prix_saison' => request('prix_saison'),
            'description' => request('description'),
        ]);

        return  redirect()->route('house',[
            'maison_id' => $maison_id,
        ]);
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
        $maison = Maison::find(request('id'))->delete();
        
        return redirect()->route('houses');
    }
}
