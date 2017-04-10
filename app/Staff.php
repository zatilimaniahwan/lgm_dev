<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;


class Staff extends Model
{
	//use Notifiable;
	
    public $table='dbo.user';

    protected $primaryKey = 'userId';

    
}
