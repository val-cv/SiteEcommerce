<!-- Voici la page qui va afficher le formulaire dans le template -->

<!--affichage du header sur toutes les pages-->
<?php include("Template/header.php"); ?>

<!-- start of the main disconected-->
<main class="container d-flex h-50 align-items-center justify-content-center" >
  <div class="row">
<!-- formulaire de conncetion -->
    <form class="login-form mx-auto mt-5" action="login.php" method="post">
      <div class="form-group col">
        <h1 class="h3 mb-3 font-weight-normal">Veuillez vous identifier</h1>
      </div>
      <div class="col form-group">
        <label for="text" class="sr-only">Votre nom:</label>
        <input type="text" id="name" name="name" class="form-control" required="" autofocus="">
      </div>
      <div class="col form-group">
        <label for="password">Votre mot de passe:</label>
        <input type="password" id="Password" name="password" class="form-control" required="" autofocus="">
      </div>
     <div class="col form-group">
      <label><input type="checkbox" value="Se souvenir de moi">Se souvenir de moi</label>
    </div>
    <!--  remerber me php?-trouver la méthode cookie?-->
    <div class="col form-group">
       <button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer</button>
         <?php
        //pour prévenir la faille XSS convertit les caractères spéciaux en entités html//
          if (isset($_GET["msg"])) {
          $message = $_GET["msg"];
          echo "<div class='alert alert-warning mt-4 text-center ' role='alert'>
          ".htmlspecialchars($message)."</div>";
         }
       //var_dump($_GET);
          ?>
    </div>
  </form>
</div>
</main>

<?php include('Template/footer.php'); ?>