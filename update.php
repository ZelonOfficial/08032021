<?php


include_once("polaczenie.php");

if(isset($_GET['idnazwa'])){

    $id = $_GET['idnazwa'];
    echo("<br>$id");
    
    $zapytanie_id = $polaczenie->query("SELECT nazwa FROM nazwa WHERE idn=$id limit 1");
    list($nazwa)=mysqli_fetch_array($zapytanie_id);
    
    echo("<fieldset>
    <legend>
    Dodawanie do bazy danych
    </legend>
    <form action=\"dodaj.php\" method=\"post\">
    Nazwa: <input type=\"text\" name=\"nazwa\" value=\"$nazwa\" />
    <input type=\"hidden\" name=\"idnazwa\" value=\"$id\" />
    <input type=\"submit\" name=\"submit\" value=\"Aktualizuj\" /><br>
    <a href=\"index.php\">Wróć</a>
    </form>
    </fieldset>
    
    ");
}
if(isset($_POST['nazwa']) && isset($_POST['idnazwa'])){
$nazwa = $_POST['nazwa'];
$id = $_POST['idnazwa'];
$zapytanie_UPDATE = $polaczenie->query("UPDATE nazwa SET nazwa='$nazwa' WHERE idn=$id");
echo("zaktualizowano rekord");
}

$polaczenie->close();


?>