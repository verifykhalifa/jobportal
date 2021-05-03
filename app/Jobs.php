<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    protected $table = 'jobs';
    public $primaryKey = 'id';
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
