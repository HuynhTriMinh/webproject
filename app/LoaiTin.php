<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    
    protected $table   = 'LoaiTin';
    protected $primaryKey = 'idLoaiTin';
    public $timestamps = false;

    public function Tin(){

    	return $this->hasMany('App\Tin', 'idLoaiTin', 'idLoaiTin');
    }
}
