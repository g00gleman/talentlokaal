<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    // a
    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
}
