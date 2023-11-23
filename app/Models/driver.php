<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Driver extends Model
{
    protected $table = 'drivers';
  
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function latestExam()
    {
        return $this->hasOne(Exam::class)->latest();
    }

    use HasFactory;
}