<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentid' , 
        'firstname' , 
        'lastname' , 
        'middlename' , 
        'suffix' , 
        'gender' , 
        'birthdate' , 
        'civilstatus' , 
        'contactno' , 
        'nationality' , 
        'occupation' , 
        'created_at',
       ' updated_at'

    ];

    protected $table = 'student';

    protected $primaryKey= 'studentid';
}
