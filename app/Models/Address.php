<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'addressid' , 
        'country' , 
        'province' , 
        'mun' , 
        'zipcode' , 
        'street' , 
        'studentid' , 
        'civilstatus' , 
        'created_at' , 
        'updated_at' 

    ];

    protected $table = 'address';

    protected $primaryKey= 'addressid';
}
