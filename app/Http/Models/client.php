<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class client extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'id';
    public $timestamps = false;


     protected $fillable = [
		'id',
		'company',
		'name',
		'address',
		'city',
		'country'
	 ];
}
