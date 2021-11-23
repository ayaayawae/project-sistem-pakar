<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= $style ?>
    <title>Result</title>
</head>

<body>
    <?= $navbar ?>
    <div class="container mt-3">
        <div class="col-12 d-flex justify-content-center">
            <h3>Hasil</h3>
        </div>
    </div>
    <hr style="border: 1px solid black;" />

    <div class="container mt-3">
        <div class="row">
            <div class="col-4 d-flex justify-content-center" style="align-items: center;">
                <img width="300px" src="<?= base_url('assets/images/logosistemanalis.png') ?>" alt="">
            </div>
            <div class="col-6 ">
                <div class="row">
                    <h3 class=""><?= $solusi[0]['solusi'] ?></h3>
                    <p class="" style=" font-size:16px;"><?= $solusi[0]['pengertian'] ?></p>
                    <p class="" style=" font-size:16px;">Skill yang diperlukan: <br/><?= $solusi[0]['skill_dibutuhkan'] ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>