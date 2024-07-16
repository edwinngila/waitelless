<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    public $table = 'tickets';

    public $fillable = [
        'service_point_id',
        'ticket_number',
        'audio_file',
        'cancelled',
        'completed',
    ];

    protected $casts = [
        'service_point_id' => 'integer',
        'ticket_number' => 'string',
        'audio_file' => 'string',
        'cancelled' => 'boolean',
        'completed' => 'boolean',
    ];

    public static array $rules = [
        'service_point_id' => 'required',
        'ticket_number' => 'required',
        'audio_file' => 'required',
        'ticket_number' => 'null',
        'cancelled' => 'null',
        'completed' => 'null',
    ];
}
