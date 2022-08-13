<?php
  session_set_cookie_params(0);
  session_start();
  require "./api_coins.php";
  require "./stats_list.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Data -->
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="30">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Crypto Coins" />
  <meta name="author" content="Ndriçim Lahu" />

  <title>Crypto Coins | Statistics</title>

  <!-- Favicons -->
  <link href="../assets/favicon/android-chrome-192x192.png" rel="android-chrome-icon" />
  <link href="../assets/favicon/android-chrome-512x512.png" rel="android-chrome-icon" />
  <link href="../assets/favicon/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="../assets/favicon/favicon-16x16.png" rel="icon" />
  <link href="../assets/favicon/favicon-32x32.png" rel="icon" />
  <link href="../assets/favicon/favicon.ico" rel="icon" />

  <!-- Icon Pack -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>

  <!-- Font Pack -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

  <!-- CSS -->
  <link href="../css/statistics.css" rel="stylesheet" />
  <link href="../css/styles.css" rel="stylesheet" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Cookies -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom mb-5">
    <div class="container px-5">
      <a class="navbar-brand text-white" href="../index.html">Crypto Coins</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-white" href="../index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="./statistics.php">Statistics</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="./news.php">News</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container text-center">
    <button class="btn btn-lg btn-primary" onclick="reloadDataFromApi()">Reload Data</button>
  </div>
  <?php
    if (empty($statsData)) {
      statsEmptyFromApiCoins($statsData);
    } else {
      statsDataFromApiCoins($statsData);
    }
  ?>
  <button type="button" class="btn btn-lg btn-primary btn-floating" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- JavaScript -->
  <script src="../js/scripts.js" type="text/javascript"></script>
</body>

</html>