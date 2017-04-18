<?php
class Student {
    // constructor frlsfuntion publica
    public function __construct($nombre, $apellido, $apellidos) {
        $this->first_name = $nombre;
        $this->last_name = $apellido;
        $this->lasst_name = $apellidos;

    }

    // para uso externo
    public function say_name() {
        echo "Mi nombre es  " . $this->full_name() . "\n";
    }

    // para uso interno
    private function full_name() {
        return $this->first_name . " " . $this->last_name ." " . $this->lasst_name;
    }
}

$alex = new Student("Alexander", "Salazar", "Campoverde");

$alex->say_name();

?>
