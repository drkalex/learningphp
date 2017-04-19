
<?php
$fecha = $_POST['Fecha'];
$info= $_POST['info'];
$tutor= $_POST['tutor'];


// en el formulario de "formulario.html" algunos tienes un atributo que se llama "name" con ese es lo que nos dara el nombre
// que necesitaremos para poder enviar la informacion a la carpeta creadada con la extencion "php" en el atributo"action" tiene que estar creadada
// lugo entramos en la carpeta creada para poner sus nombre como se muestra en la parte de arriba
// luego usamos el "file_put_contents" para crear una carpeta si no esta creada o sobreescribir la informacion de dicha carpeta
//"$fecha;$info;$tutor" estos estan separados por ";" para saber que campos tiene
file_put_contents("jornadas.txt","$fecha;$info;$tutor");
// print_r(file_get_contents("jornadas.txt")); es para sacar en pantalla la informacion que este escrita en la carpeta "jornadas.txt"
print_r(file_get_contents("jornadas.txt"));

?>
