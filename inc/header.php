<?php
    ob_start();
    require "inc/functions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/myJs.js"></script>

    <style>
      .myNav a:hover{
        background-color: rgb(0, 0, 0 ,0.6);
      }

    </style>

</head>
<body>


<div class="sticky-top">

<?php 
      if (isset($_SESSION['klienti'])){
          $clientName = $_SESSION['klienti']['emri'] . " " . $_SESSION['klienti']['mbiemri'];
          if ($_SESSION['klienti']['roli'] == 1){
            $clientName.= "(Admin)";
          }
          echo '<div class="container-fluid bg-dark text-white text-right" style="height:30px;position:sticky;top:0;"> 
              <p> You are logged in as <span class="font-weight-bold">'.$clientName.'</span></p>
          </div>';
      }
    
    ?>

  <nav class="navbar navbar-expand-sm navbar-dark" id="myHeader">
      <div class="container">
        <img src="img/logo.png" alt="" style="width:150px;height:60px;">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#meny">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="meny" class="collapse navbar-collapse" >
          <ul class="navbar-nav ml-auto" id="myMenu">
            <li class="nav-item"><a href="index.php" class="nav-link text-white">HOME</a></li>

            <?php 
              if (isset($_SESSION['klienti'])){
                // echo' <li class="nav-item"><a href="automobilat.php" class="nav-link text-white">CARS</a></li>';
                echo '<li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown">CARS</a>
                        <div class="dropdown-menu myNav" style="background-color: rgb(8, 12, 109);">
                            <a href="automobilat.php" class="dropdown-item text-white">All</a>
                            <a href="autoSport.php" class="dropdown-item text-white">Sport</a>
                            <a href="autoFamily.php" class="dropdown-item text-white">Family</a>
                            <a href="autoCoupe.php" class="dropdown-item text-white">Coupe</a>
                            <a href="autoCabrio.php" class="dropdown-item text-white">Cabrio</a>
                            <a href="autoVan.php" class="dropdown-item text-white">Van</a>
                        </div>
                      </li>';
                echo '<li class="nav-item"><a href="loans.php" class="nav-link text-white">LOANS</a></li>';
                if ($_SESSION['klienti']['roli'] == 1){
                  // echo' <li class="nav-item"><a href="loans.php" class="nav-link text-white">LOANS</a></li>';
                  echo' <li class="nav-item"><a href="members.php" class="nav-link text-white">MEMBERS</a></li>';
                  echo' <li class="nav-item"><a href="adminPanel.php" class="nav-link text-white">ADMIN PANEL</a></li>';
                }
                echo'
                <form method="POST">
                  <button type="submit" name="logout" class="btn btn-secondary btn-sm ml-2">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                  </button>
                </form>';
              }

              if (isset($_POST['logout'])){
                logout();
              }

            ?>








            
          </ul>
        </div>
      </div>
    </nav>
    </div>


  









