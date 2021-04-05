<?php include("controllers/prime_parcel_c.php");      

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Warehouse</title>
  </head>
  <body>
    <?php include 'include/header.php' ?>
    <div class="container-fluid">
      <div class="row">
      <?php include 'include/left-menu.php' ?>
        <div class="col-md-10 main">
        <h1>Первичная приемка посылок</h1>
        <hr>
<div class="col-md-5 prim_main">
    <form method="post" action="">
            <div class=" form-floating mb-3">
    <input name="tracknum" type="text" class="form-control" id="floatingInput" placeholder="Трек номер входящей">
    <label for="floatingInput">Входящий трек номер</label>
    </div>

    <div class=" form-floating mb-3">
    <input name="pp_client" type="email" class="form-control" id="floatingInput" placeholder="Трек номер входящей" disabled>
    <label for="floatingInput">ID Клиента</label>
    </div>
    <input name="p_unidentified" value="0" type="hidden">
    <input name="p_unidentified" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
    <label class="form-check-label mbot10" for="flexCheckDefault">
        Неопознанная посылка
    </label>
        <div class="">
            <div class="d-grid gap-2 ">
            <button class="btn btn-primary" type="submit">Добавить посылку</button>
            </div>
        </div>
    </form>
</div>
        </div>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
crossorigin="anonymous"
></script>
  </body>
</html>