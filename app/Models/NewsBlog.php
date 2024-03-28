<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsBlog extends Model
{
    use HasFactory;

    protected $fillable=[
        'header_photo',
        'title',
        'description'
    ];

    public function photos(){
        return $this->hasMany(PhotosForNews::class);
    }
}
