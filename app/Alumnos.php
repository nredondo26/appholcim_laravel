<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Alumnos extends Authenticatable
{

	use Notifiable;
	
	protected $table = 'alumnos';

     protected $fillable = ['id','nombre', 'cc', 'id_usuarios'];
     
}
