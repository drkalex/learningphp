<?php
class Student {
    // constructor frlsfunvion publica
    public function __construct($nombre, $apellido) {
        $this->first_name = $nombre;
        $this->last_name = $apellido;
    }

    // para uso externo
    public function say_name() {
        echo "Mi nombre es  " . $this->full_name() . "\n";
    }

    // para uso interno
    private function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

$alex = new Student("Alexander", "Salazar");

$alex->say_name();

// echo $alex->full_name();


?>
