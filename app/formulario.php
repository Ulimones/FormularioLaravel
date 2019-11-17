<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formulario extends Model
{

	protected $table = 'formularios';


    protected $fillable=[
            'id',
            'nombre',
            'apellidop',
            'apellidom',
            'fichadeposito',
            'correo',
            'municipio',
            'escuela',
            'tipoescuela',
            'edad',
            'sexo',
            'curso',
            'nivelingles',
            'vocacion',
            'premio',
            'tipopremio',
            'seguirvocacion',
            'profesion',
            'quiensoy',
            'deseosnecesidades',
            'intereses',
            'fortalezas',
            'areastalento',
            'valores',
            'metascp',
            'metasmp',
            'metaslp',
            'pendiente',
            'aspectosmejorar',
            'accionesmejorar',
            'valoresconsolidar'];
            
    protected $primaryKey ='id';
    


}
