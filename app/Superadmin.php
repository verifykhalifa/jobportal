<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superadmin extends Model
{
    //
    protected $table = 'superadmins';
    public $primaryKey = 'id';
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
