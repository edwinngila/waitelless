<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', // Add other fields as needed
    ];

    // Relationships
    public function cancellations()
    {
        return $this->hasMany(Cancellation::class);
    }

    public function waitList()
    {
        return $this->hasOne(WaitList::class);
    }
}
