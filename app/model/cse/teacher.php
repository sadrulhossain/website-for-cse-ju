<?php

namespace App\model\cse;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public function teacher_educations(){
    	return $this->hasMany('App\model\cse\teacher_education');
    }

    public function teacher_experiences(){
    	return $this->hasMany('App\model\cse\teacher_experience');
    }
}
