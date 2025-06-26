<?php

class Postulacion
{
    private $id;
    private $usuario_id;
    private $area;
    private $telefono;
    private $fecha_nacimiento;
    private $archivo_cv;
    private $estado;

    public function __construct($usuario_id, $area, $telefono, $fecha_nacimiento, $archivo_cv, $estado = 'pendiente', $id = null)
    {
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->area = $area;
        $this->telefono = $telefono;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->archivo_cv = $archivo_cv;
        $this->estado = $estado;
    }

    
    public function getId() { return $this->id; }
    public function getUsuarioId() { return $this->usuario_id; }
    public function getArea() { return $this->area; }
    public function getTelefono() { return $this->telefono; }
    public function getFechaNacimiento() { return $this->fecha_nacimiento; }
    public function getArchivoCv() { return $this->archivo_cv; }
    public function getEstado() { return $this->estado; }

    
    public function setEstado($estado) { $this->estado = $estado; }
}