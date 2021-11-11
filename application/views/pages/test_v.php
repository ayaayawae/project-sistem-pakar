<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .test{
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="test">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="text-align: center">
                <p>Pertanyaan ke-n</p>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning" style="border-radius: 50px"><b>Ulang dari awal</b> </button>
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
</body>
</html>