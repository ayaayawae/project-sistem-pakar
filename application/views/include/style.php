<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  .cover-container {
    max-width: 42em;
    /* background-color: rgba(0, 0, 0, 0.3); */
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    border: 4px solid rgba(0, 0, 0, 0.7);
    color: black;
  }

  .home {
    text-align: center;
    background: linear-gradient(rgba(52, 190, 174, 1), rgba(52, 190, 174, 0.3)), url(<?= base_url("assets/images/cover.webp") ?>);
    background-size: cover;
    height: 95%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  html,
  body {
    height: 100%;
  }

  .navbar {
    background-color: rgba(52, 190, 174) !important;
    color: white !important;
  }

  .card-img-top {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    margin-top: -5rem;
    background-color: rgba(0, 0, 0, 0);
  }

  .card {
    width: 18rem;
    height: 11rem;
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 10px 17px 24px 0px rgba(0,0,0,0.7);
    -webkit-box-shadow: 10px 17px 24px 0px rgba(0,0,0,0.7);
    -moz-box-shadow: 10px 17px 24px 0px rgba(0,0,0,0.7);
    border-radius: 20px;
    border: 3px rgba(0, 0, 0, 0.7) solid;
  }

  .card-text {
    color: black;
  }

  .test {
    margin: 0;
    display: flex;
    justify-content: center;
    /* align-items: center; */
    padding: 0;
    width: 100%;
    height: 100%;
    color: white;
  }

  .container-test{
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    border: 4px solid rgba(0, 0, 0, 0.5);
    color: black;
    padding: 20px;
    height: 400px;
  }

  .result-container{
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    border: 4px solid rgba(0, 0, 0, 0.5);
    color: black;
    padding: 20px;
    /* height: 00px; */
  }

  .btn {
    border-radius: 50px;
  }
</style>