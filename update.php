<?php
// var_dump($_GET);
if (!isset($_GET["id"])) {
    header("Location: ./index.php");
    exit();
}
$id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, burritoformaat, saus, bonen, rijst  FROM user WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    //Set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

    $user = $stmt->fetch();

} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
$conn = null;
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>pdo_toets_herkansing</title>
</head>
<body>

<main class="container">
    <div class="row text-center">
        <div class="col-12">
            <h1>pdo_toets_herkansing</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <form action="./update_script.php" method="post">
                <div class="mb-3">
                    <label for="inputBurritoformaat" class="form-label">burritoformaat</label>
                    <input value="<?= $user->burritoformaat; ?>" class="form-control" type="text" name="burritoformaat"
                           id="inputBurritoformaat">
                </div>
                <div class="mb-3">
                    <label for="inputSaus" class="form-label">saus</label>
                    <input value="<?= $user->saus; ?>" class="form-control" type="text" name="saus" id="inputSaus">
                </div>
                <div class="mb-3">
                    <label for="inputBonen" class="form-label">bonen</label>
                    <input value="<?= $user->bonen; ?>" class="form-control" type="text" name="bonen"
                           id="inputBonen">
                </div>
                <div class="mb-3">
                    <label for="inputRijst" class="form-label">rijst</label>
                    <input value="<?= $user->rijst; ?>" class="form-control" type="text" name="rijst"
                           id="inputRijst">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <input class="form-control btn btn-primary" type="submit" value="wijzig">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>