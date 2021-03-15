<?php
    include 'inc/header.php';
?>


<!-- <div>
    <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-light mb-1" style="height: 75px;">
                <div class="container">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="mainNav" class="navbar-collapse collapse">
                        <form action="" class="form-inline">
                          <input type="text" class="form-control" placeholder="Search">
                          <input type="submit" class="btn btn-outline-secondary bg-light ml-1" value="Search">    
                        </form> 
                    </div>
                </div>
            </nav>
    </div>
</div> -->


<div style="min-height:450px" id="mainContent">
    
    <div style="background-color: rgb(0, 0, 0 ,0.6);" class="container-fluid">
            <div class="container-fluid pt-5 d-flex justify-content-around" >         
                <!-- <div class="d-flex flex-column justify-content-center align-items-center text-white">              
                        <h1 class="mx-5 text-white">BOOK A CAR TODAY !</h1>
                        <br>
                        <h4 class="text-white">SAVE UP TO 30%</h4>
                        <button class="btn btn-info bg-dark my-3"><a href="automobilat.php">FIND A CAR</a></button>                    
                </div>   -->


                <style>
                    
                </style>
                <div>
                        <div class="container">
                            <p class="text-warning">
                                <?php 
                                    // if(isset($_SESSION['message'])){
                                    //     echo $_SESSION['message'];
                                    // }
                                ?>
                            </p>
                        </div>
                        
                        <?php
                            // if (!isset($_SESSION['klienti'])){
                            include "inc/login.php";
                        // }
                        ?>
                </div>
     
            </div> 

    </div>
</div>
  
       
<?php
    include 'inc/footer.php';
?>