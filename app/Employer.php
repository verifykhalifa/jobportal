<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    //
    protected $table = 'employers';
    public $primaryKey = 'id';
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
