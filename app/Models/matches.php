<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matches extends Model
{
    use HasFactory;

    public function employee(){
        return $this->hasOne(employee::class, 'id', 'employeeId');
    }
    public function jobOffer(){
        return $this->hasOne(jobOffer::class, 'id', 'jobOfferId');
    }
    protected $fillable = [
        'filterEmployee'
    ];
}
