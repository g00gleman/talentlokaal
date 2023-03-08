<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }


    public function jobCategoryEmployee()
    {
        return $this->hasOne(jobCategory::class, 'id');
    }
    public function jobCategory()
    {
        return $this->hasOne(jobCategory::class, 'id');
    }
}
