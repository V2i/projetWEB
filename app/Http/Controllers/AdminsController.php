<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Maison;
use App\User;
use App\Photo;
use App\Reservation;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('admin', 1)->get();

        return view('admin', [
            'admins' => $admins,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'email' => ['bail', 'email', 'string', 'max:191'],
        ]);
        
        $user = User::where('email', request('email'))->update([
            'admin' => 1,
        ]);
        
        return redirect()->route('admin');
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
        $user = User::find(request('id'))->update([
            'admin' => 0,
        ]);
        
        return redirect()->route('admin');
    }

    /**
     * Show all the reservations to super user
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function reservationsAdmin()
    {
        $reservations=DB::table('maisons')
            ->join('photos','maisons.id', '=', 'photos.maison_id')
            ->where('type_photo', '=', 'photo principale')
            ->join('reservations', 'maisons.id', '=', 'reservations.maison_id')
            ->join('users', 'users.id', '=', 'reservations.user_id')
            ->orderBy('reservations.user_id','desc')->get();
        
        $count=DB::table('maisons')
            ->join('photos','maisons.id', '=', 'photos.maison_id')
            ->where('type_photo', '=', 'photo principale')
            ->join('reservations', 'maisons.id', '=', 'reservations.maison_id')
            ->orderBy('reservations.user_id','desc')->count();
        
        return view('reservationAdmin', [
            'reservations' => $reservations,
            'count' => $count,
        ]);
    }

    /**
     * allow super user to delete a reservation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteReservationAdmin(Request $request)
    {
        $id = $request->input('id');
        Reservation::find($id)->delete();

        return redirect()->route('adminReservation');
    }
}
