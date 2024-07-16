<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $table = 'services';

    public $fillable = [
        'name',
        'description',
        'status'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'name' =>'required',
        'description' => 'required',
        'status' => 'required'
    ];
    public function tickets()
    {
        return $this->hasOne(ServicePoint::class,'service_id','id');
    }
}
