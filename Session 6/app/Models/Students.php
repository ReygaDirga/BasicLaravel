<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    // nama table
    protected $table = 'students';

    // field apa yang boleh diisi
    protected $fillable = [
        'name',
        'nim'
    ];

    // table relation
    public function scores(){
        return $this->hasMany(Students_Scores::class, 'student_id');
    }

    // custom function
    public function getAverage(): float{
        if($this->relationLoaded('scores')){
            $count = $this->scores->count();
            if($count == 0){
                return 0;
            }
            return round($this->scores->avg('scores'), 2);
        }
        return 0;
    }

}
