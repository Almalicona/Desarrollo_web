<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    protected $table='libro';
    public $timestamps=false;
    protected $fillable=[
        'id','nombre','fecha_apertura','nombre_autor','numro_serie'
    ];
    protected $primaryKey = 'id';
}