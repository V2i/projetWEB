<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maison;

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
        $maison=Maison::find($id);
        return  view('house',[
            'maison' => $maison,
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
