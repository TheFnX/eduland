<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $auditTimestamps = true;
    protected $auditStrict = true;
    protected $auditThreshold = 100;

    protected $auditEvents = [
        'created',
        'saved',
        'deleted',
        'restored',
        'updated'
    ];
    
    protected $fillable = ['nombre',
                        'direccion',
                        'duracion',
                        'fecha',
                        'hora_inicio',
                        'trainer1',
                        'trainer2',
                        'trainer3',
                        'precio',
                        'descripcion',
                        'imagen', 
                        'estado',  
                        'contenido',                      
                        'categoria_id',
                        'user',                      
                        ];

    public function categoria(){
        return $this->hasOne(Categoria::class, 'id');
    }

}
