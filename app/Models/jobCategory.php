<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobCategory extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->hasMany(employee::class);
    }
    public function jobOffer()
    {
        return $this->hasMany(jobOffer::class, 'jobCategoryId');
    }

    protected $fillable = [
        'id',
        'categoryName',
        'created_at',
        'updated_at',
    ];
}
