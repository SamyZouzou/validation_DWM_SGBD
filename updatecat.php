<?php include './controllers/getONEcat.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel=stylesheet href="./css/main.css">
  <link rel=stylesheet href="./css/exportedcss.css">
  <title>Modifiez !</title>
</head>
<body>
<?php include './templates/header.html'?>
  <div class="container">
  <form action="./controllers/updateONEcat.php" method="post">
    <input type="hidden" name="id" value="<?= $cat['id']?>">
    <div class="row">  
      <div class="col-25">
        <label for="title">Son petit nom</label>
      </div>
      <div class="col-75">
        <input type="text" name="name_cat" value="<?= $cat['name_cat']?>">
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Nom du proprietaire</label>
      </div>
      <div class="col-75">
        <input type="text" name="name_proprio" value="<?= $cat['name_proprio']?>">
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Son age</label>
      </div>
      <div class="col-75">
        <input type="number" name="cat_age" value="<?= $cat['cat_age']?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Couleur de ses yeux</label>
      </div>
      <div class="col-75">
        <input type="text" name="eyes" value="<?= $cat['eyes']?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Send Cat">
  </div>
</div>
  </form>
  <?php include './templates/footer.html';?>
</body>
</html>