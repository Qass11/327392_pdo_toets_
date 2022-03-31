<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //sql to delete a record
    $sql = "DELETE FROM user WHERE id=:id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id' , $id);

    if (!isset($_GET['id'])) {
        header("Location:./index.php");
        exit();
    }

    $id = $_GET['id'];

    $stmt->execute();
    echo "Record met id=($id) deleted successfully";
    header('Refresh:2; ./read.php');
}catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>