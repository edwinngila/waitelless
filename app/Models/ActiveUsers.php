<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_point_id',
    ];

    protected $casts = [
        'user_id'=>'integer',
        'service_point_id' => 'integer',
    ];

    public static array $rules = [
        'user_id'=>'required',
        'service_point_id' => 'required',
    ];
}
