<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\assets.css\style.css">
    <title>Nous contacter</title>
</head>
<body>
<nav>
    <img src="assets\logo pacaud.jpg" alt="logo de l'etablissement">
    <a href="index.html">Acceuil</a>
    <a href="">Graphisme</a>
    <a href="">Impression Offset</a>
    <a href="">Impression Numerique</a>
    <a href="">Impression Grand Format</a>
    <a href="">Faconnage</a>
    <a href="">Notre équipe</a>
    <a href="form.php">Nous contacter</a>
  </nav>
    <h1>Nous contacter</h1>
    <br>
    <br>
    <form action="" method="post">
    <label for="firstName">Nom :</label>
    <input type="text" id="firstName" required>
<br><br>
<label for="lastName">Prénom :</label>
<input type="text" id="lastName" required>
<br><br>
<label for="Email"> Email :</label>
<input type="email" id="Email" required>
<br><br>
<label for="message">Message :</label>
<textarea name="message" id="message" rows="10" required></textarea>
<br><br>
<button type="submit">Envoyer</button>
</form>
<footer>
    IMPRIMERIE PACAUD  @2023 -  
    <a href="mentions.html">Mentions légales -</a>
    <a href="vie_privee.html">Vie privée -</a>
    <a href="coockies.html">Infos Cookies -</a>
  
  </footer>
</body>
</html>

<?php
var_dump($_POST);