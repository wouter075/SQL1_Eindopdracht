<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";

function printTable($query) {
    return "Hello World: " . $query . "<br />";
}

    //echo "Hello World!";

    // SELECT YEAR(orderDate) AS jaar, status, COUNT(status) AS aantal FROM orders WHERE YEAR(orderDate) = 2004 OR YEAR(orderDate) = 2005 GROUP BY status, YEAR(orderDate) ORDER BY jaar DESC, status;

echo printTable("Wes");
echo printTable("Wouter");
echo printTable("Henk");