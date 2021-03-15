<?php
    include 'inc/header.php';
?>

<style>
    #images{
        width:250px;
        height:170px;
    }
</style>

<div class="container-fluid">

<!-- slider -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/firstSlide.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/secondSlide.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<h1 class="my-5 text-info px-5 py-2" style="border-radius:30px;">Find your best car</h1>
       
            <?php 
                // if(isset($_SESSION['klienti'])){
                    $autos = getAutomobilat();
                    if ($autos){
                        $i = 0;
                        while ($auto = mysqli_fetch_assoc($autos)){
                            $fotoPath  = $auto['foto'];
                            $autoEmri = $auto['emri'];
                            $autoPershkrimi = $auto['pershkrimi'];
                            $autoID = $auto['automobiliid'];
                            $autoCmimi = $auto['cmimi'];
                            if ($i == 0){
                                echo'<div class="row align-items-center justify-content-around">';
                            }
                            
                            echo                            
                                '<div class="card d-flex align-items-center" style="width:300px;min-height:350px;">
                                    <img class="card-img-top mt-1 img-fluid" src="img/' .$fotoPath .'" alt="Card image cap" id="images">
                                    <div class="card-body d-flex flex-column justify-content-between w-100">
                                      <form action="addLoan.php" method="POST">
                                          <input type="hidden" name="autoID" value="'.$autoID.'">                      
                                          <h5 class="card-title">'.$autoEmri.'</h5>
                                          <p class="card-text">'.$autoPershkrimi.'</p>
                                          <p class="card-text text-danger">'.$autoCmimi.'.00$<span class="text-secondary"> (per day)</span></p>                                       
                                          <input type="submit" class="btn btn-primary" name="bookNow" value="Book Now">
                                        </form>
                                    </div>
                                </div>';
                                        $i++;
                                        if ($i == 3){
                                            echo'</div><br>';
                                            $i=0;
                                        }
                                        if(isset($_POST['bookNow'])){
                                            // getAutomobilin
                                        }
                                        
                                        // <a href="addLoan.php" class="btn btn-primary">Book Now</a>
                            // '<div class="card my-5" style="width:300px;height:200px;">
                            //     <img class="card-img-top-fluid" src="img/'.$fotoPath.'" alt="" style="width:280px;height:165px;>
                            //     <div class="card-body">
                            //         <h4 class="card-title text-center">' .$autoEmri . '</h4>
                            //         <p class="card-text">'.$autoPershkrimi.'</p>
                            //     </div>
                            // </div>';
                        }
                    }
                // }
            ?>
</div>

<?php 
    include "inc/footer.php";
?>