<?php

class Usuario
{
    private $id;
    private $nombre;
    private $usuario;
    private $correo;
    private $password;
    private $rol;

    public function __construct($nombre, $usuario, $correo, $password, $rol = 'usuario', $id = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->correo = $correo;
        $this->password = $password;
        $this->rol = $rol;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getUsuario() { return $this->usuario; }
    public function getCorreo() { return $this->correo; }
    public function getPassword() { return $this->password; }
    public function getRol() { return $this->rol; }

    // Setters
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setCorreo($correo) { $this->correo = $correo; }
    public function setPassword($password) { $this->password = $password; }
    public function setRol($rol) { $this->rol = $rol; }
}