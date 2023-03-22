<?php

namespace model;

use GuzzleHttp\Psr7\Query;

class propiedad extends ActiveRecord{
    protected static $tablas = 'propiedades';
    //base de datos 
protected static $db;
protected static $columnasdb = ['id',
                                'Titulo',
                                'Precio',
                                'imagen',
                                'descripcion',
                                'habitaciones',
                                'wc',
                                'estacionamiento',
                                'creado',
                                'vendedores_id'];


public $id;
public $Titulo;
public $Precio;
public $imagen;
public $descripcion;
public $habitaciones;
public $wc;
public $estacionamiento;
public $creado;
public $vendedores_id;
public function __construct($arg = []){
    $this->id = $arg['id'] ?? null;
    $this->Titulo = $arg['Titulo'] ?? '';
    $this->Precio = $arg['Precio'] ?? '';
    $this->imagen = $arg['imagen'] ?? '';
    $this->descripcion = $arg['descripcion'] ?? '';
    $this->habitaciones = $arg['habitaciones'] ?? '';
    $this->wc = $arg['wc'] ?? '';
    $this->estacionamiento = $arg['estacionamiento'] ?? '';
    $this->creado= date('y/m/d');
    $this->vendedores_id= $arg['vendedores_id'] ?? '';
}
public function validar(){
    if(!$this->Titulo){
        self::$errores[] = "debes añadir un titulo";
    }
    if(!$this->Precio){
        self::$errores[] = "debes añadir un precio";
    }
    if(!$this->wc){
        self::$errores[] = "debes añadir un numero de baños";
    }
    if(!$this->habitaciones){
        self::$errores[] = "debes añadir un numero de habitaciones";
    }
    if(!$this->estacionamiento){
        self::$errores[] = "debes añadir un numero de estacionamientos";
    }
    if(!$this->descripcion){
        self::$errores[] = "debes añadir una descripcion";
    }
    if(!$this->vendedores_id){
        self::$errores[] = "debes colocar un vendedor";
    }
    if(!$this->imagen){
        self::$errores[] = "La imagen es obligatoria";   
    }
    return self::$errores;
}
}