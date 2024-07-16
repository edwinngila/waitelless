<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitList extends Model
{
    use HasFactory;

    protected $fillable = [
        'position', 'customer_id', // Add other fields as needed
    ];

    // Relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
