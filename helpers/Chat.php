<?php

use Illuminate\Database\Eloquent\Model;

class Chat extends Model {

	//


	public $timestamps = false;
	protected $table = 'autism_chat';
	protected $fillable = ['from_id','to_id','message','time'];

  public function fromUser(){
    return   $this->hasOne('User','from_id');
  }

  public function toUser(){
    return   $this->hasOne('User','to_id');
  }


}
