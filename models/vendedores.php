<?php

namespace model;

class vendedores extends ActiveRecord{
    protected static $tablas = 'vendedores';
    protected static $db;
    protected static $columnasdb = ['id',
                                'nombre',
                                'apellido',
                                'telefono'];
    

public $id;
public $nombre;
public $apellido;
public $telefono;

public function __construct($arg = []){
    $this->id = $arg['id'] ?? null;
    $this->nombre = $arg['nombre'] ?? '';
    $this->apellido = $arg['apellido'] ?? '';
    $this->telefono = $arg['telefono'] ?? '';
}
public function validar(){
    if(!$this->nombre){
        self::$errores[] = "debes añadir un nombre";
    }
    if(!$this->apellido){
        self::$errores[] = "debes añadir un apellido";
    }
    if(!$this->telefono){
        self::$errores[] = "debes añadir un numero de contacto";
    }
    return self::$errores;
}
}