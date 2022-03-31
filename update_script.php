<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //set the PDO eeror mode to excipotien
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE burrito
            SET    burritoformaat = :burritoformaat,
                   saus = :saus,
                   bonen = :bonen,
                   rijst = :rijst
            WHERE  id = :id";

    // Prepare statment
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':burritoformaat', $burritoformaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':bonen', $bonen);
    $stmt->bindParam(':rijst', $rijst);
    $stmt->bindParam(':id', $id);

    $burritoformaat = $_POST["burritoformaat"];
    $saus = $_POST["saus"];
    $bonen = $_POST["bonen"];
    $rijst = $_POST["rijst"];
    $id = $_POST["id"];

    // var_dump($_POST);
    // exit();
    // execute the query
    $stmt->execute();

    //echo a message to say the UPDATE suceeded
    echo "record met id={$id} is gewijzigd";
    header("Refresh:2; ./reade.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;