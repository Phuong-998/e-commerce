<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
     protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
        'role',
        'status',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
