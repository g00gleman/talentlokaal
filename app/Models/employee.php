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
    public function jobCategorie()
    {
        return $this->hasOne(jobCategory::class, 'id','jobCategory');
    }
    public function anwers(){
        return $this->hasMany(answers::class, 'employeeId');
    }
}
