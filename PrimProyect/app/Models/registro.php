<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Está es la parte de todas que menos entendí XD

class registro extends Model
{
    use HasFactory;

    /* Es importante definir esta variable propia de Laravel como falsa,
    por que por default laravel registra la hora del registro, valga la
    reduncia, y busca guardar el dato, al no estar definido por nosotros
    en la tabla da error.
    */
    public $timestamps = false;

    // Le declaramos el nombre la tabla
    protected $table = 'usuarios';
    // Le declaramos los campos que va a subir o modificar
    protected $fillable = ['name', 'age', 'country', 'telephone', 'email', 'career'];
}
