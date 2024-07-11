<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pecho extends Model
{
    protected $table = 'pecho'; // Reemplaza 'nombre_de_tabla' con el nombre real de tu tabla de correos enviados

    // Define las columnas que puedes llenar
    protected $fillable = ['id_user','ejercicio','peso','serie', 'repeticiones', 'fecha_realizado'];
}