<?php
class Student {
    // constructor
    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function say_name() {
        return "Mi nombre es  " . $this->nombre . " " . $this->apellido . ".\n";
    }
}
$alex = new Student("Alexander", "Salazar");
echo $alex->say_name();
$esne = new Student("Esneider", "Campoverde");
echo $esne->say_name();

?>
<hr>
