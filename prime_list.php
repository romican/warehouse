<?php include('database/db.php');  
$arr = selectAll('primary_parcel');
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
        <h1>Список входящих посылок</h1>
        <hr>
        <div class="container-fluid">
            <table class="table table-striped table-hover">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Трек номер</th>
            <th scope="col">Клиент</th>
            <th scope="col">Неопознанная</th>
            </tr>    
                <?php foreach ($arr as $user):?>
                    <tr>
                <?php foreach($user as $item): ?>
                    <td><?=$item?></td>
                <?php endforeach;?>            
                    </tr>
                <?php endforeach;?>
            </table>

    </div>
        </div>        
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
