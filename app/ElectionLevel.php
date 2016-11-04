<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectionLevel extends Model
{
	public function GetTableName(){
		return $this->table;
	} 

    protected $fillable = [
        'level',
        'user_id',
        'election_id'
    ];

    protected $table = 'election_levels';
}
