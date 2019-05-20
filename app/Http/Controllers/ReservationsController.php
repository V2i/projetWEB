<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Maison;
use App\User;
use App\Photo;
use App\Reservation;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$reservations=DB::table('reservations')->where('user_id',auth()->id())->orderBy('maison_id','desc')->get();
        $reservations=DB::table('maisons')
            ->join('photos','maisons.id', '=', 'photos.maison_id')
            ->where('type_photo', '=', 'photo principale')
            ->join('reservations', 'maisons.id', '=', 'reservations.maison_id')
            ->where('reservations.user_id', auth()->id())
            ->orderBy('reservations.maison_id','desc')->get();
        return view('reservation', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($maison_id)
    {
        return view('bookForm', ['maison_id' => $maison_id]);
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
            'date_debut' => ['bail', 'required'],
            'date_fin' => ['bail', 'required'],
        ]);
        
        $reservation = Reservation::reservationCreate();
        return redirect()->route('reservation');
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
        Reservation::find(request('id'))->delete();
        
        return redirect()->route('reservations');
    }
}
