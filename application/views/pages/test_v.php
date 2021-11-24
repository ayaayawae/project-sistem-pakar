<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <?= $style ?>
</head>

<body>
    <?= $navbar ?>
    <div class="test mt-4">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-6 offset-md-3 col-6" style="text-align: center">
                    Pastikan anda telah memilih jawaban
                </div>
                <div class="col-md-3 col-6">
                    <a class="btn btn-sm btn-warning" href="<?= base_url('index.php/base/rules') ?>" style="border-radius: 50px; color: white;"><b>Ulang dari awal</b> </a>
                </div>
            </div>
            <hr>
            <div class="row mt-5" style="text-align: center">
                <h3><?= $pertanyaan[0]['pertanyaan'] ?></h3>
            </div>
            <div class="row mt-5" style="text-align: center; ">
                <div class="col-md-6 col-6">
                    <button class="btn btn-danger" onclick="setAnswer('n')" style="font-size: 24px; background-color: #EF8E8E; border: none; border-radius: 50px; width: 100px">Tidak</button>
                </div>
                <div class="col-md-6 col-6">
                    <button class="btn btn-primary" onclick="setAnswer('y')" style="font-size: 24px; background-color: #8ECCEF; border: none; border-radius: 50px; width: 100px">Ya</button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 ">
                    <button class="btn btn-sm btn-secondary" id="btnBack" style="border-radius: 50px;" onclick="prevQues()">
                        &#60;&#60;Ke pertanyaan sebelumnya
                    </button>
                </div>

                <form class="col-6" style="text-align: right" action="<?= base_url('index.php/base/submitAnswer') ?>" method="POST">
                    <input type="text" name="answer" style="display: none;" id="ans">
                    <input type="text" name="id_routing" style="display: none;" value="<?= $pertanyaan[0]['id_routing'] ?>">
                    <button type="submit" id="btnSubmit" style="border-radius: 50px;" class="btn btn-sm btn-secondary disabled">Lanjut>></button>
                </form>
            </div>
        </div>
    </div>
    <script>
        let id = <?= $pertanyaan[0]['id_routing'] ?>;
        if (id == 1) {
            document.getElementById("btnBack").removeAttribute("class");
            document.getElementById("btnBack").setAttribute("class", "btn btn-sm btn-secondary disabled");
        }
        function setAnswer(answer) {
            document.getElementById("ans").setAttribute("value", answer);
            document.getElementById("btnSubmit").removeAttribute("class");
            document.getElementById("btnSubmit").setAttribute("class", "btn btn-sm btn-success");
        }
        function prevQues() {

            window.history.go(-1);
        }
    </script>
</body>

</html>