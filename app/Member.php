<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	public $table='dbo.member';

    public function cards()
    {
        return $this->hasMany(Card::class,'memberId','memberId');
    }
}
