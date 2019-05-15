<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    protected $table = 'maisons';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function houseCreate() {
        return self::create([
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
