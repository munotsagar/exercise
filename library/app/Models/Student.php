<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'student_no',
    	'first_name',
    	'last_name',
    	'phone_number',
    	'gender'
    ];

    protected $dates = ['deleted_at'];
}
