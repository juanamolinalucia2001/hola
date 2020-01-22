<?php

class Empresa{
    private $id;
    private $nombre;
    private $cuil;
    private $email;
    private $telefono;
   
public function __construct(){
        $this->db= Database::connect();  
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCuil() {
        return $this->cuil;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCuil($cuil) {
        $this->cuil = $cuil;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

        
}