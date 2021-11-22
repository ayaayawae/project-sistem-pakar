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
            <div class="row">
                <div class="col-md-6 offset-md-3" style="text-align: center">
                    <p>Pertanyaan ke-n</p>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-warning" style="border-radius: 50px; color: white;"><b>Ulang dari awal</b> </button>
                </div>
                <hr>
            </div>
            <div class="row mt-5" style="text-align: center">
                <h3>Lorem ipsum lor dolor sit amet?</h3>
            </div> 
            <div class="row mt-5" style="text-align: center; ">
                <div class="col-md-6">
                    <button class="btn btn-danger" style="font-size: 24px; background-color: #EF8E8E; border: none; border-radius: 50px; width: 100px">Tidak</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary" style="font-size: 24px; background-color: #8ECCEF; border: none; border-radius: 50px; width: 100px">Ya</button>
                </div>  
            </div>
            <div class="row mt-5" >
                <div class="col-md-6"> &#60;&#60;Ke pertanyaan sebelumnya </div>
                <a href="<?= base_url('index.php/base/result') ?>" class="col-md-6" style="text-align: right">Lanjut>></a>
            </div>
        </div>
    </div>
</body>
</html>