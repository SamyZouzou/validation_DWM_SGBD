<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel=stylesheet href="./css/main.css">
  <link rel="stylesheet" href="./css/exportedcss.css">
  <title>Ajoutez votre minou</title>
</head>
<body>
  <?php include './templates/header.html';?>
 <div style = 'margin-top = 150px !important' class="container">
  <form action="./controllers/addONEcat.php" method="post">
    <div class="row">  
      <div class="col-25">
        <label for="title">Son petit nom</label>
      </div>
      <div class="col-75">
        <input type="text" name="name_cat">
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Nom du proprietaire</label>
      </div>
      <div class="col-75">
        <input type="text" name="name_proprio">
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Son age</label>
      </div>
      <div class="col-75">
        <input type="number" name="cat_age">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Couleur de ses yeux</label>
      </div>
      <div class="col-75">
        <input type="text" name="eyes">
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
