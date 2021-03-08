<?php 

include_once("polaczenie.php");
if(isset($_GET['idnazwa'])){

    $id = $_GET['idnazwa'];
    $zapytanie_DELETE = $polaczenie->query("DELETE nazwa FROM nazwa WHERE idn = $id");
    echo(" <br>usunięto rekord z bazy danych "); 
}


?>