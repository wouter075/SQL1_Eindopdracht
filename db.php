<?php
//bestand met databasegegevens
$conf["user"]= 'root';
$conf["pass"]= '';
$conf["host"]= 'localhost';
$conf["database"]= 'classicmodels';

$con = mysqli_connect($conf["host"], $conf["user"],
    $conf["pass"], $conf["database"]);
if($con === false) // Verbinding is mislukt!
{
    echo "Kan geen verbinding maken met de database";
}

