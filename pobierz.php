<?php


include_once("polaczenie.php");

$zapytanie_SELECT = $polaczenie->query("SELECT idn,nazwa FROM nazwa;");


while(list($idn,$mojaNazwa)=mysqli_fetch_array($zapytanie_SELECT)){
    echo("
    <br> IDN: $idn, Nazwa: $mojaNazwa 
    ");

}
$polaczenie->close();
?>