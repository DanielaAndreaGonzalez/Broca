<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluador extends Model
{
    protected $fillable = ['cedula','nombres','apellidos','fechadenacimiento','direccion','municipio','correo','tipo_evaluador_id'];

    public function Tipoevaluador() {
        return $this->belongsTo(Tipoevaluador::class, 'tipo_evaluador_id');
    }
}
