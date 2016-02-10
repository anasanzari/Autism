<?php

use Illuminate\Database\Eloquent\Model;

class OnlineUser extends Model {

	//


	public $timestamps = false;
	protected $table = 'autism_online';
	protected $fillable = ['id','lastseen'];

  public function user(){
    return   $this->hasOne('User','id');
  }



}
