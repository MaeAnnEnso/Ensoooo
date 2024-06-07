<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educational_Background extends Model
{
    use HasFactory;

    protected $fillable = [
        'background' , 
        'school' , 
        'address' , 
        'type' , 
        'year_graduated' , 
        'studentid' , 
        'created_at' , 
        'updated_at' 

    ];

    protected $table = 'educational_background';

    protected $primaryKey= '';

}
