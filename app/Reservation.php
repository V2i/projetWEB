<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'maison_id', 'user_id', 'date_debut', 'date_fin',
    ];

    public static function reservationCreate() {
        return self::create([
            'maison_id' => request('maison_id'),
            'user_id' => auth() -> id(),
            'date_debut' => request('date_debut'),
            'date_fin' => request('date_fin'),
        ]);

    }
}
