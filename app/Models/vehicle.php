<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $table = 'posts';
    protected $fillable = ['Merk', 'Name_of_the_vehicle', 'Year_of_manufacture'];
    public $timestamps = false;
}
