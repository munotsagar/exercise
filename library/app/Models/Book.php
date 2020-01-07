<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    	'name',
    	'book_no',
    	'description',
    	'reference_no',
    	'publish_year'
    ];
}
