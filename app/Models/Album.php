<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
       'author', 'image_path' ,'album_name', 'album_detail', 'genre'
    ];

    public function users(){
        return $this->belongsToMany(User::class)->withPivot('rate');
    }
}
