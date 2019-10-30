<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Subscribers extends Model
{

	protected $primaryKey = 'subscriber_id';
	protected $table = 'subscribers';
	public $timestamps = false;

}
