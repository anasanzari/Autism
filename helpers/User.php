<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	//
	public $timestamps = false;
	protected $table = 'autism_users';
	protected $fillable = ['name','phone','address','email','password'];

}
