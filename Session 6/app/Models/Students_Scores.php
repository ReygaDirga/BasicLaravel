<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Students_Scores extends Model
{
    protected $table = 'scores';
    protected $fillable = [
        'student_id',
        'course_id',
        'scores'
    ];

    public function students(){
        return $this->belongsTo(Students::class, 'student_id');
    }
}
