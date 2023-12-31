<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'street',
        'city',
        'state',
        'postal_code',
    ];

    // Definisikan relasi antara Address dan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
