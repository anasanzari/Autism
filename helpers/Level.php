<?php

use Illuminate\Database\Eloquent\Model;

class Level extends Model {

	//

	const LEVEL_SEVERE = 4;
	const LEVEL_MODERATE = 3;
	const LEVEL_MILD = 2;
	const LEVEL_NOAUTISM = 1;

	public $timestamps = false;
	protected $table = 'autism_level';
	protected $fillable = ['user_id','level'];

  public function user(){
    return   $this->hasOne('User','user_id');
  }



}
