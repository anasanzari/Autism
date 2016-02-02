<?php

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

	//


	public $timestamps = false;
	protected $table = 'autism_videos';
	protected $fillable = ['name','link'];



}
