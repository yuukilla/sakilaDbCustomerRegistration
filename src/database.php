<?php

$conn = "";

try {
    $host = "localhost";
    $dbname = "sakila";
    $username = "root";
    $password = "root";
    
    $conn = new PDO(
        "mysql:host=$host; dbname=$dbname",
        $username, $password
    );
    
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Connection failed: "
    . $e->getMessage();
}


function getData( string $strQuery, $conn )
{
    $stmt = $conn->prepare($strQuery);
    $stmt->execute();
    $arrData = $stmt->fetchAll();

    return $arrData;
}
?>