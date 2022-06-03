<?php

namespace App\Models;

use CodeIgniter\Model;

class Images extends Model
{
    protected $table      = 'images';

    //nombre de la columna que tendra la primaryKey
    protected $primaryKey = 'id';
    //validar auto increment
    protected $useAutoIncrement = true;

    //tipo de dato que trabajar mysql
    protected $returnType     = 'array';
    //No borra registros solo cambia el binario de la final deleted_at
    protected $useSoftDeletes = true;

    //los campos de todas las filas creadas por el usuario deben estar en este array
    protected $allowedFields =  ['name', 'url_img'];

    //configuracion de columnas predetermindas de codeignater
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //validacion de datos
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}