<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancellation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason', 'customer_id', // Add other fields as needed
    ];

    // Relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
