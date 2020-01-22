<?php

class marker{
    private $id;
    private $nombre;
    private $address;
    private $lat;
    private $lng;
    private $id_estado;
      public function __construct(){
        $this->db= Database::connect();  
      }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getAddress() {
        return $this->address;
    }

    function getLat() {
        return $this->lat;
    }

    function getLng() {
        return $this->lng;
    }

    function getId_estado() {
        return $this->id_estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setLat($lat) {
        $this->lat = $lat;
    }

    function setLng($lng) {
        $this->lng = $lng;
    }

    function setId_estado($id_estado) {
        $this->id_estado = $id_estado;
    }

  
}