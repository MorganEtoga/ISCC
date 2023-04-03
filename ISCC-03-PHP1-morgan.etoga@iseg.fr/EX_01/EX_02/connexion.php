<html>
<title>Connexion
  <?php @include('header.php') ?>
  <br>
  <h1>Connexion</h1>
  <br>

  <body>

    <h2>Mon formulaire</h2>

    <form action="traitement_formulaire.php" method="post">
      <label for="Users">Nom d'utilisateur :</label>
      <input type="text" id="Users" name="nom d'utilisateur"><br><br>

      <label for="">mot de passe :</label>
      <input type="password" id="password" name="mot de passe"><br><br>



      <input type="submit" value="Valider">
    </form>

    <?php @include('footer.php') ?>
  </body>



</html>