<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Maak je eigen burrito!</title>
</head>
<body>

<div class="container">
    <div class="mb-3">
        <h1 class="text-center">Maak je eigen burrito!</h1>
    </div>
    <form action="./create.php" method="POST">
        <div class="mb-3">
            <label for="burritoformaat" class="form-label">BurritoFormaat</label>
            <select class="form-select" aria-label="Default select example" name="burritoformaat" required>
                <option selected>Maak je keuze</option>
                <option value="20">20 cm</option>
                <option value="25">25 cm</option>
                <option value="30">30 cm</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="saus" class="form-label">Saus</label>
            <select class="form-select" aria-label="Default select example" name="saus" required>
                <option selected>Maak je keuze</option>
                <option value="salsa_crudo">Salsa crudo</option>
                <option value="salsa_verde">Salsa verde</option>
                <option value="salsa_soja">Salsa soja</option>
                <option value="creme_fraiche">Creme fraiche</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="bonen" class="form-label">Bonen</label>
            <div class="form-check">
                <input class="form-check-input" name="Bonen" value="Kidney Bonen" type="radio" name="Kidney Bonen"
                       id="Kidney Bonen">
                <label class="form-check-label" for="Kidney Bonen">
                    Kidney Bonen
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" name="Bonen" value="Zwarte_Bonen" type="radio" name="Zwarte_Bonen"
                       id="Zwarte_Bonen">
                <label class="form-check-label" for="Zwarte_Bonen">
                    Zwarte_Bonen
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" name="Bonen" value="Bruine_Bonen" type="radio" name="Bruine_Bonen"
                       id="Bruine_Bonen">
                <label class="form-check-label" for="Bruine_Bonen">
                    Bruine_Bonen
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rijsten</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="rijst" value="Witte_Rijst" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Witte_Rijst
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="Rijsten" type="checkbox" value="Zwarte_Rijst"
                       id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Zwarte_Rijst
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" name="Rijsten" type="checkbox" value="Bruine_Rijst"
                       id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Bruine_Rijst
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" name="Rijsten" value="zwarte_peper" type="checkbox" value=""
                       id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Zwarte peper
                </label>
            </div>
        </div>

        <!--        <hr class="mb-3">-->
        <!--        <input class="btn btn-primary" type="submit" name="create" value="Sign Ups">-->

        <div class="mb-3">
            <div class="d-grid gap-2">
                <button class="btn btn-primary" name="submit" type="submit">Bestel</button>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>