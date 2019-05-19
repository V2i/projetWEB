<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'maison_id', 'url', 'description'
    ];

    public static function photoCreate($maison_id) {
        return self::create([
            'maison_id' => $maison_id,
            'url' => request('url'),
            'description' => request('description'),
        ]);

    }
}
