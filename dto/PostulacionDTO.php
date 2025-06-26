<?php


class PostulacionDTO {
    public $id;
    public $usuario_id;
    public $area;
    public $telefono;
    public $fecha_nacimiento;
    public $archivo_cv;
    public $estado;

    public function __construct($usuario_id, $area, $telefono, $fecha_nacimiento, $archivo_cv, $estado = 'pendiente', $id = null) {
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->area = $area;
        $this->telefono = $telefono;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->archivo_cv = $archivo_cv;
        $this->estado = $estado;
    }
}