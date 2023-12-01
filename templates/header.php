<?php
  include_once("config/url.php");
  include_once("config/process.php");

  // Limpa a mensagem

  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION ['msg'];
    $_SESSION['msg'] = '';
  }

?>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Projeto Devaneio</title>

    <!-- CSS general config -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>

<body>

<header class="fixed-top">

  <style>

    header {
      background: linear-gradient(#27032c, #350244fd);
      z-index: 999;
    }
    
    /* LOGO */
    .container img {
      width: 390px;
    }

    /* NAV BAR */

    body #navegation {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
      width: 100%;
      margin: 0 auto;
      align-items: center;
    }

    body #navegation .nav-item {
      height: 100%;
      letter-spacing: 3px;
    }

    body #navegation .nav-item .nav-link {
      width: 100%;
      height: 100%;
    }

    header .container .navbar-toggler {
        margin: 0 auto;
    }

    /* PAGE MARKER */

    body.home #navegation a#home,
    body.student #navegation a#students,
    body.contact #navegation a#contacts {
      color: #27032c;
      background: #FFF;
      border-radius: 8px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.808);
      letter-spacing: 1px;
    }

      /* LINKS CUSTOMIZATION */

      .container .navbar-nav .nav-item a {
      color: #FFF;
      font-size: 21px;
      font-weight: bold;
      transition: 0.6s;
      }

      .container .navbar-nav .nav-item a:hover {
      color: #27032c;
      background: #FFF;
      border-radius: 8px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.808);
      font-size: 22px;
      font-weight: bold;
      letter-spacing: 1px;
      }
  
    /* Responsive */

    @media screen and (max-width: 768px) {

      body #navegation {
      margin-top: 20px;
    }

      header .container img {
      min-width: 200px;
      }

    }
    
    @media screen and (max-width: 425px) {

      body #navegation {
      margin-top: 10px;
      margin-bottom: 5px;
      }

      header .container img {
        width: 400px;
        
      }  
    }

    @media screen and (max-width: 375px) {

      body #navegation {
      margin-top: 20px;
      margin-bottom: 10px;
      }

      header .container img {
        width: 350px;
      }
        
    }

    @media screen and (max-width: 320px) {

      body #navegation {
      margin-top: 15px;
      margin-bottom: 5px;
      }

      header .container img {
          width: 300px;
        }
  
    }
 
  </style>

  <nav class="navbar navbar-expand-sm navbar-dark">

    <div class="container">

      <a class="brand" href="<?= $BASE_URL ?>index.php">
        <img src="<?= $BASE_URL ?>img/logo.png" alt="projeto-cultural">
      </a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-main">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nav-main"> 

        <ul id="navegation" class="navbar-nav ml-auto">
          <li class="nav-item">
            <a id="home" href="<?= $BASE_URL ?>index.php" class="nav-link">Sobre</a>
          </li>
          <li class="nav-item">
            <a id="students" href="<?= $BASE_URL ?>student.php" class="nav-link">Estudantes</a>
          </li>
          <li class="nav-item">
            <a id="contacts" href="<?= $BASE_URL ?>contact.php" class="nav-link">Contatos</a>
          </li>

        </ul>

      </div>

    </div>

  </nav>
  
</header>