<?php 
    include "inc/header.php";
?>

<style>
    #images{
        width:300px;
        height:220px;
    }
</style>


<div class="container-fluid bg-light">
    <div class="px-3 py-3" style="height:200px;background-color:lightcyan;">
        <h4 class="text-dark text-center my-3">ORDER CONFIRMATION</h4>
        <?php 
            if (checkLoggedIn()){
                if(isset($_POST['bookNow'])){
                    $klientName = $_SESSION['klienti']['emri'];
                    $klientID =$_SESSION['klienti']['klientiid'];
                    echo "<h5 class='text-center text-dark'>".$klientName." ,thank you for your order !</h5>";
                    $autoID = $_POST['autoID'];
                    $automobili = getAutomobilin($autoID);
                    $autoEmri = $automobili['emri'];
                    $autoNrregjistrimi = $automobili['nrregjsitrimi'];
                    $autoFoto = $automobili['foto'];
                    $autoPershkrimi = $automobili['pershkrimi'];     
                    $autoCmimi =  $automobili['cmimi'];
                    $shippingPrice = 0;
                }
            }else { 
                echo "Not logged in !";
            }
            
  
            if(isset($_POST['confirmOrder'])){
                $autoID = $_POST['autoID'];
                $klientID = $_POST['klientID'];
                // global $shippingPrice;
                $autoCmimi = $_POST['autoCmimi'];
                addLoan($autoID,$klientID,$autoCmimi);
                header('Location: loans.php');
            }

        ?> 
    </div>

    <div class="container-fluid d-flex justify-content-around mx-auto my-5 flex-wrap">
        <?php 
            echo 
            "<div class=''> 
                <img src='img/".$autoFoto."'id='images' class='border border-dark'>
            </div>";
        ?>  
        
        <div class="table-responsive d-flex  justify-content-center align-items-center">
            <table class="table table-striped mt-2">
                <tr>
                    <th>Car</th>
                    <td><?php echo $autoPershkrimi ?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><?php echo "$autoCmimi$" ?></td>
                </tr>
                <tr>
                    <th>Shipping price</th>
                    <td><?php echo "$shippingPrice$" ?></td>
                </tr>
            
            </table>
        </div>



    </div>

    <div class="table-responsive">
            <h4 class="text-center">Order total</h4>
        
            <table class="table table-striped table-bordered">
            
                <tr>
                    <th><h5>Subtotal price</h5></th>
                    <th><h5>Shipping price</h5></th>
                </tr>
                <tr>
                    <td class="text-secondary"><?php echo"<h6>$autoCmimi$</h6>";  ?></td>
                    <td class="text-secondary"><?php echo"<h6>$shippingPrice$</h6>";  ?></td>
                </tr>
            </table>
            
               <h4 class="text-center">Total price:
                <?php echo "<span class='text-info'>" . ($autoCmimi + $shippingPrice) ."$</span></h4>"?>
            
    </div>
 


    <div class="d-flex justify-content-center align-items-center">
        <form action="" method="POST">
            <?php 
                echo '
                <input type="hidden" name="autoID" value="'.$autoID.'">
                <input type="hidden" name="klientID" value="'.$klientID.'">
                <input type="hidden" name="autoCmimi" value="'.$autoCmimi.'">';
            ?>
            <input type="submit" name="confirmOrder" class="btn btn-primary mx-auto mb-5" value="Confirm order">
        </form>
        
    </div>        
</div>
