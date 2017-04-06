<?php
class Student {
    // constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    //first_name="nombre" / last_name="apellido"
    public function say_name() {
        echo "Mi nombre es  " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$alex = new Student("Alex", "Jones");
$alex->say_name();

class MathStudent extends Student {
    function sum_numbers($first_number, $second_number) {
        $sum = $first_number + $second_number;
        echo $this->first_name . " dice que  " . $first_number . " + " . $second_number . " es " . $sum;
        // first_number="primer numero"  / second_number="segundo numero"
    }
}

$eric = new MathStudent("Eric", "Chang");
$eric->say_name();
$eric->sum_numbers(3, 5);


?>
