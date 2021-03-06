<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $style ?>
    <title>Rules</title>
</head>

<body>
    <?= $navbar ?>
    <div class="home">
        <div class="container-fluid">
            <div class="row pt-1 pb-5" style="border-bottom: 2px solid white">
                <div class="col-12 text-center">
                    <h1 class="display-3" style="font-weight: 400; color: white">Peraturan</h1>
                </div>
            </div>
            <div class="row text-center mx-auto" style="margin-top: 8rem;">
                <div class="col-4">
                    <div class="card mx-auto">
                        <img src="<?= base_url('assets/images/mandiri.png') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                Usahakan mengerjakan tes secara mandiri tanpa pengaruh dari luar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mx-auto">
                        <img src="<?= base_url('assets/images/honest.png') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                Menjawab setiap pertanyaan dengan jujur walaupun kamu tidak suka dengan jawaban tersebut
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mx-auto">
                        <img src="<?= base_url('assets/images/clock.png') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                Usahakan mengerjakan dengan waktu yang tidak terlalu lama
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 text-center">
                <div class="d-flex justify-content-center">
                    <a href="<?= base_url('index.php/base/test/1') ?>" class="btn btn-success" style="width: 100px;" type="button" >
                        Mulai
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>