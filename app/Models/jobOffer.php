<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobOffer extends Model
{
    use HasFactory;

    public function employer()
    {
        return $this->hasOne(Employer::class, 'id','employerId');
    }
    public function jobCategorie()
    {
        return $this->hasOne(jobCategory::class, 'id', 'jobCategoryId');
    }
    public function answers(){
        return $this->hasMany(answers::class, 'jobOfferId');
    }
    protected $fillable = [
        'matchPercentage',
        'filterJoboffer'
    ];
}
