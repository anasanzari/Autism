<?php

use Illuminate\Database\Eloquent\Model;
class User extends Model {

	//


	public $timestamps = false;
	protected $table = 'autism_users';
	protected $fillable = ['name','phone','address','email','password','type'];

	public function video()
	    {
	      return $this->hasMany('Video','user_id');
	    }
  public function article()
			{
				return $this->hasMany('Article','user_id');
			}

}
