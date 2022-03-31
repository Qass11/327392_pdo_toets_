<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //Set the DPO error mode to exeption
    $conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Prepare sql and bind parameters
    $stmt = $conn->prepare("SELECT id, burritoformaat, saus, bonen, rijst FROM user");
    $stmt->execute();

    //Set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

    //Var_dump($stmt->fetchAll();exit)

    $tableRows = "";
    foreach ($stmt->fetchAll() as $key => $value) {
        $tableRows .= "<tr>
                    <td>$value->id</td>
                    <td>$value->burritoformaat</td>
                    <td>$value->saus</td>
                    <td>$value->bonen</td>
                    <td>$value->rijst</td>
                    <td><a href='update.php?id=$value->id'><i class='bi bi-pencil-square'></i></td>
                    <td><a href='delete.php?id=$value->id'><i class='bi bi-x-circle'></i></i></td>
                    </tr>";
    }

} catch (PDOExeption $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>"
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>pdo_toets_herkansing</title>
</head>

<body>
<main class="container">
    <div class="row text-center">
        <div class=col-12>
            <h1>pdo_toets_herkansing</h1>
        </div>
    </div>
    <div class="row">
        <div class=col-3>

        </div>
        <div class="col-4">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>burritoformaat</th>
                    <th>saus</th>
                    <th>bonen</th>
                    <th>rijst</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?= $tableRows; ?>
                </tbody>
            </table>
        </div>
        <!--        <div class="col-3"></div>-->
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>