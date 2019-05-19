<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'maison_id', 'url', 'type_photo'
    ];

    public static function photoCreate($maison_id) {
        return self::create([
            'maison_id' => $maison_id,
            'url' => request('url'),
            'type_photo' => request('type_photo'),
        ]);

    }
}
