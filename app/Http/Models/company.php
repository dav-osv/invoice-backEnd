<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'id'; 
    public $timestamps = false;  

     
     protected $fillable = [
        'id',
        'company', 
        'firstLastName',
        'webSite',
        'address',
        'city',
        'country',
        'phoneNumber',
        'email'
     ];
 
}
