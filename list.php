<?php include './controllers/getALLcats.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste des minous</title>
  <link rel=stylesheet href="./css/main.css"> 
  <link rel=stylesheet href="./css/exportedcss.css">
</head>
<body>
  <?php include './templates/header.html';?>
  <main>
    <div class='container'>
      <table>
        <tr class='row'>
        <th>Son petit nom</th>
         <th>Nom du proprietaire</th>
         <th>Son age</th>
         <th>Couleur des yeux</th>
         <th>Supprimer</th>
         <th>Update</th>
        </tr>
        <?php foreach($cats as $cat) {?>
          <tr class="row">
            <td><?= $cat['name_cat'] ?></td>
            <td><?= $cat['name_proprio'] ?></td>
            <td><?= $cat['cat_age'] ?></td>
            <td><?= $cat['eyes'] ?></td>
            <td>
              <form action="./deletecat.php" method ="POST">
              <input type="hidden" name ="id" value="<?= $cat['id']?>">
              <input type="submit" value="X">
              </form>
            </td>
            <td>
                <form action="./updatecat.php" method ="POST">
                <input type="hidden" name ="id" value="<?= $cat['id']?>">
                <input type="submit" value="U">
                </form>
          </td>
        </tr>
        <?php }?>
      </table>
    </div>
  </main>
  <?php include './templates/footer.html';?>
</body>
</html>