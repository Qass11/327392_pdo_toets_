<?php

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets_herkansing";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO user (id, burritoformaat, saus, bonen, rijst)
    VALUES (:id, :burritoformaat, :saus, :bonen, :rijst)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':$burritoformaat', $burritoformaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':bonen', $bonen);
    $stmt->bindParam(':rijst', $rijst);

    //Insert a row
    $id = NULL;
    $burritoformaat = $_POST['burritoformaat'];
    $saus = $_POST['saus'];
    $bonen = $_POST['bonen'];
    $rijst = $_POST['rijst'];

    // var_dump($stmt->queryString);

    $stmt->execute();

    echo "New records created successfully.";
    header("Refresh:3; ./read.php");
} catch (PDOException $e) {
    echo $e->getMessage();exit();
    header("Location: ./index.php");
}

$conn = null;

?>