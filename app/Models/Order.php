<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'address',
        'title',
        'body',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'options' => 'array',
        ];
    }
}
