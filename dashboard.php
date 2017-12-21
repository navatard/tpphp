<?php session_start(); ?>

<p> Bienvenue monsieur <?php echo $_SESSION['prenom'];?> <?php echo $_SESSION['nom']; ?> </p>
<p> Voici votre addresse email : <?php echo $_SESSION['email']; ?></p>
<p> Voici votre mot de passe : <?php echo $_SESSION['password']; ?></p>

<a href="deconnexion.php">Se déconnecter</a>