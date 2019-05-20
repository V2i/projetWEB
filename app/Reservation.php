<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'date_debut', 'date_fin'
    ];

    public static function reservationCreate($maison_id, $user_id) {
        return self::create([
            'maison_id' => $maison_id,
            'user_id' => $user_id,
            'date_debut' => request('date_debut'),
            'date_fin' => request('date_fin'),
        ]);

    }
}
