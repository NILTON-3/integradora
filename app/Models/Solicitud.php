<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

// Modelo: una solicitud equivale a una fila en la tabla solicitudes.
class Solicitud extends Model {
    protected $table = 'solicitudes';
    protected $fillable = ['nombre','correo','telefono','servicio','mensaje'];
}
