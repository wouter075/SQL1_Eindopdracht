<?php
    echo "Hello World!";

    // SELECT YEAR(orderDate) AS jaar, status, COUNT(status) AS aantal FROM orders WHERE YEAR(orderDate) = 2004 OR YEAR(orderDate) = 2005 GROUP BY status, YEAR(orderDate) ORDER BY jaar DESC, status;