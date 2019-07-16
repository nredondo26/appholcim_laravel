<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Certificados extends Authenticatable
{

	use Notifiable;
	
	protected $table = 'certificados';

     protected $fillable = ['id','fecha_aprobacion','cc_alumnos','id_usuarios','id_cursos','created_at','updated_at'];
}
