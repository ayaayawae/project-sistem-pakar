<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?= $style ?>
</head>

<body>
    <?= $navbar ?>
    <div class="home">
        <div class="cover-container d-flex p-3 mx-auto flex-column">
            <main class="px-3">
                <h1>Bingung dalam menentukan bidang porfesi IT?</h1>
                <p class="greeting">Ikuti Tes ini untuk membantu kamu yang seorang mahasiswa jurusan Teknik Informatika menetukan profesi di masa depan</p>
                <div style="text-align: center" class="">
                    <a class="btn btn-success" href="<?= base_url('index.php/base/rules') ?>">Mulai <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </main>
        </div>
    </div>
</body>

</html>