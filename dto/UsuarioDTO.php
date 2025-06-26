<?php
class UsuarioDTO {
    public $nombre;
    public $usuario;
    public $correo;
    public $password;
    public $rol;

    public function __construct($nombre, $usuario, $correo, $password, $rol = 'usuario') {
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->correo = $correo;
        $this->password = $password;
        $this->rol = $rol;
    }
}