<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //
    protected $table = 'staff';
    public $primaryKey = 'id';
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
