<?php

    class Cliente implements JsonSerializable {
        private $nombre;
        private $apellidos;
        private $email;
        private $telefono;
        private $direcciones;
        
        public function __construct($nombre,$apellidos,$email,$telefono){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->telefono = $telefono;
        }
        public function anadirDireccion($nuevadireccion){
            array_push($direcciones,$nuevadireccion);
        }
        public function jsonSerialize() {
            return [
                'nombre' => $this->nombre,
                'apellidos' => $this->apellidos,
                'email' => $this->email,
                // ... other properties ...
            ];
        }
    }

?>