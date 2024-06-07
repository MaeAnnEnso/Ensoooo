<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'parentid' , 
        'firstname' , 
        'lastname' , 
        'middlename' , 
        'suffix' , 
        'gender' , 
        'type' , 
        'civilstatus' , 
        'occupation' , 
        'income' ,
        'studentid',
        'created_at',
        'updated_at'

    ];

    protected $table = 'parents';

    protected $primaryKey= 'parentid';

}
