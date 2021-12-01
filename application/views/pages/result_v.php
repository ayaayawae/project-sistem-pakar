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
    <div class="home">
        <div class="container result-container">
            <div class="row">
                <div class="col-12 ">
                    <h3>Hasil</h3>
                </div>
            </div>
            <div class="row">
                <hr style="background-color: black; border: 1px solid black">
            </div>
            <div class="row pt-3" style="text-align: left;">
                <div class="offset-1 col-4" >
                    <img width="300px" height="300px" style="border-radius: 50%;" src="<?= base_url('assets/images/results.jpg') ?>" alt="">
                </div>
                <div class="col-6 ">
                    <div class="row">
                        <h3 class=""><?= $solusi[0]['solusi'] ?></h3>
                        <p class="" style=" font-size:16px;"><?= $solusi[0]['pengertian'] ?></p>
                        <p class="" style=" font-size:16px;">Skill yang diperlukan: <br /><?= $solusi[0]['skill_dibutuhkan'] ?></p>
                    </div>
                </div>
            </div>
            <div style="text-align: center" class="">
                <a class="btn btn-success" href="<?= base_url('index.php/base/rules') ?>">Lakukan tes kembali <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>

    </div>
</body>

</html>