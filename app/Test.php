<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
	protected $table = 'test';
	protected $primaryKey = 'id';
	public $timestamp = false;
}
