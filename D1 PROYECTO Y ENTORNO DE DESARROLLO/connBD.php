<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:yarashop.database.windows.net,1433; Database = yarashop", "admin123", "YGTl63QI");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "admin123", "pwd" => "YGTl63QI", "Database" => "yarashop", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:yarashop.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>