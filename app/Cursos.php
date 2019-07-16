<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cursos extends Authenticatable
{

	use Notifiable;
	
	protected $table = 'cursos';

     protected $fillable = ['id','nombre'];
}
