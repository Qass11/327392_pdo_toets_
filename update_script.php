<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE user
            SET    burritoformaat = :burritoformaat,
                   saus = :saus,
                   bonen = :bonen,
                   rijst = :rijst
            WHERE  id = :id";
    //prepare statement
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

    //execute the query
    $stmt->execute();

    //echo a message to say the UPDATE succeded
    echo "record met id={$id} is gewijzigd";
    header("Refresh:2; ./read.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>