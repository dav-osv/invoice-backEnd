<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class descriptions extends Model
{
    protected $table = 'descriptions';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'tableId',
      'tableDescription',
      'tableQuantity',
      'tablePrice',
      'id',
      'description',
      'quantity',
      'price'
  ];
}
