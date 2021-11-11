<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Sistem Pakar</title>

    <style>
        .card-img-top {
            border-radius: 50%;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: -5rem;
            background-color: #bfbfbf;
        }

        .card {
            width: 18rem;
            height: 11rem; 
            background-color:#bfbfbf;
            border-radius: 40px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row pt-5 pb-5" style="border-bottom: 2px solid black">
            <div class="col-12 text-center">
                <h1 class="display-3">Peraturan</h1>
            </div>
        </div>

        <div class="row text-center mx-auto" style="margin-top: 8rem;">
            <div class="col-4">
                <div class="card mx-auto">
                    <img src="<?= base_url('assets/images/user.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Usahakan mengerjakan tes secara mandiri tanpa pengaruh dari luar
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mx-auto">
                    <img src="<?= base_url('assets/images/user.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Menjawab setiap pertanyaan dengan jujur walaupun kamu tidak suka dengan jawaban tersebut
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mx-auto">
                    <img src="<?= base_url('assets/images/user.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Usahakan mengerjakan dengan waktu yang tidak terlalu lama
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 text-right">
            <div class="d-flex justify-content-end">
                <button style="border-radius: 40px; width: 8rem; background: greenyellow">
                    <a href="<?= base_url('index.php/base/test') ?>" style="text-decoration: none; color: gray">
                        Mulai -->
                    </a>
                </button>
            </div>
        </div>

    </div>
</body>

</html>