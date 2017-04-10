<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	public $table='dbo.card';

	 protected $primaryKey = 'cardId';

    public function member()
    {
        return $this->belongsTo(Member::class,'memberId','memberId');
    }
}
