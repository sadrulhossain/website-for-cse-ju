<?php

namespace App\model\cse;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'date'
    ];
}
