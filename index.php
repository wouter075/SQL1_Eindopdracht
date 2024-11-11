<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";

function printTable($db, $query) {
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);

    $table = '<table border="1">';

    $table .= "<thead>";
    $table .= "<tr>";
    while ($field = mysqli_fetch_field($result)) {
        $table .= "<th>" . $field->name . "</th>";
    }
    $table .= "</tr>";
    $table .= "</thead>";

    $table .= "<tbody>";
    while ($row = mysqli_fetch_row($result)) {
//        var_dump($row);
        $table .= "<tr>";
        foreach ($row as $value) {
            $table .= "<td>" . $value . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</tbody>";
    $table .= "</table>";
    return $table;
}

    //echo "Hello World!";

    // SELECT YEAR(orderDate) AS jaar, status, COUNT(status) AS aantal FROM orders WHERE YEAR(orderDate) = 2004 OR YEAR(orderDate) = 2005 GROUP BY status, YEAR(orderDate) ORDER BY jaar DESC, status;

echo printTable($con,"SELECT YEAR(orderDate) AS jaar, status, COUNT(status) AS aantal FROM orders WHERE YEAR(orderDate) = 2004 OR YEAR(orderDate) = 2005 GROUP BY status, YEAR(orderDate) ORDER BY jaar DESC, status;");

echo printTable($con, "SELECT YEAR(paymentDate) AS jaar, COUNT(*) AS aantalBetalingen, SUM(amount) AS totaalBetalingen FROM payments GROUP BY YEAR(paymentDate) ORDER BY jaar DESC");