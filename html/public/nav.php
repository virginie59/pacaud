<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imprimerie Pacaud à Coudekerque-branche</title>
  <link rel="stylesheet" href="assets.css/style.css" />

</head>

<body>
  <nav>

    <div class="menu">
      <div class="toggle"><ion-icon name="add-circle-outline"></ion-icon></div>
      <li style="--i:1;">
        <a href="index.php"><ion-icon name="home">Acceuil</ion-icon></a>
      </li>
      <li style="--i:2;">
        <a href="#"><ion-icon name="brush-outline">Graphisme</ion-icon></a>
      </li>
      <li style="--i:3;">
        <a href="#"><ion-icon name="file-tray-full-outline">Impression Offset</ion-icon></a>
      </li>
      <li style="--i:4;">
        <a href="#"><ion-icon name="id-card-outline">Impression Numerique</ion-icon></a>
      </li>
      <li style="--i:5;">
        <a href="#"><ion-icon name="images-outline">Impression Grand Format</ion-icon></a>
      </li>
      <li style="--i:6;">
        <a href="#"><ion-icon name="color-fill-outline">Faconnage</ion-icon></a>
      </li>
      <li style="--i:7;">
        <a href="#"><ion-icon name="people-circle-outline">Notre équipe</ion-icon></a>
      </li>
      <li style="--i:8;">
        <a href="form.php"><ion-icon name="mail-open-outline">Nous contacter</ion-icon></a>
      </li>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
      let toggle = document.querySelector('.toggle');
      let menu = document.querySelector('.menu');
      toggle.onclick = function() {
        menu.classList.toggle('active')
      }
    </script>


    <img src="assets/logo pacaud.jpg" alt="logo de l'etablissement">

    <h1>Imprimerie Pacaud à Coudekerque Branche</h1>
  </nav>


  <h2>Une réponse à vos besoins en impression à Coudekerque Branche</h2>
  <p>Implantée depuis 1930 près de Dunkerque, l'imprimerie Pacaud allie qualité, rapidité et service afin de répondre à toutes vos demandes.
    Graphisme, Impression offset, Impression numérique ou impression grand format mais encore façonnage, l'Imprimerie Pacaud répond à vos besoins !</p>

  <footer>
    IMPRIMERIE PACAUD @2023 -
    <a href="mentions.php">Mentions légales -</a>
    <a href="vie_privee.php">Vie privée -</a>
    <a href="coockies.php">Infos Cookies -</a>

  </footer>

</body>

</html>