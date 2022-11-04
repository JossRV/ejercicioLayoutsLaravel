<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hardware extends Model
{
    use HasFactory;
    protected $table = 't_hardware';
    protected $primaryKey = 'id_hardware';
    protected $fillable = [
	    'nombre',
        'modelo',
        'precio'
    ];
    // protected $hidden =[
    //     'create_at',
    //     'updated_at'
    // ];
}
