<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Visitors extends Model
{

	protected $primaryKey = 'visitor_id';
	protected $table = 'visitors';
	public $timestamps = false;

}
