<h1>Funciones en PHP</h1>

<h2> Agenda </h2>

<h4> 1- Nombre </h4>
<h4> 2- Apellido </h4>
<h4> 3- LinkedIn </h4>
<?php

$Agenda = array();

function Persona ( $Nombre, $Apellido, $LinkedIn){
    global $Agenda;
    $Agenda [] = array ($Nombre, $Apellido, $LinkedIn);
}

Persona ("Ariel", "Caminos", "ACaminos");
Persona ("Juan", "Romano", "jpromanonet");
Persona ("Martin", "Pared Baez", "MPBaez");
Persona ("Damian", "Barbero", "DamianB96");

function MostrarPersonas ($id){
    global $Agenda;
    $usuario = $Agenda [$id];
    foreach ($usuario as $user):
        echo $user . "<br/>";
        echo "<br>";
    endforeach;
    }
echo "<hr>";
MostrarPersonas (3); // Se puede cambiar el numero entre el 0 y el 3 para ver diferentes usuarios//
echo "<hr>"; 
 ?>
