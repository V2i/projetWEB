<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Maison;
use App\User;

class MaisonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maisons = Maison::all();

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
            'adresse2' => ['bail', 'string', 'max:191', 'min:0'],
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
        $user_id=DB::table('maisons')->where('id',$id)->pluck('user_id');
        $maison=Maison::find($id);
        $user=DB::table('users')->where('id',$user_id);

        return  view('house',[
            'maison' => $maison,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('houseEdit');
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
