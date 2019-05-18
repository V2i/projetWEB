<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    protected $table = 'maisons';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'name', 'adresse1', 'adresse2', 'ville', 'pays', 'prix_hors_saison', 'prix_saison', 'description'
    ];

    public static function houseCreate() {
        return self::create([
            'user_id' => auth() -> id(),
            'name' => request('name'),
            'adresse1' => request('adresse1'),
            'adresse2' => request('adresse2'),
            'ville' => request('ville'),
            'pays' => request('pays'),
            'prix_hors_saison' => request('prix_hors_saison'),
            'prix_saison' => request('prix_saison'),
            'description' => request('description'),
        ]);

    }
}
