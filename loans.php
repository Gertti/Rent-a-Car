<?php 
    include "inc/header.php";
?>

<div class="container-fluid border border-dark" style="background-color:rgb(228, 243, 255);" id="mainContent">

    <div class="container-fluid border-bottom border-warning">
         <h1 class="text-danger my-3">Members information</h1>

         <?php 
          ?>     

    </div>  
    
    <br>
    <div class="table-responsive">
        <table id="members" class="table table-bordered table-sm text-danger" style="background-color: rgb(0, 0, 0 ,0.6);">
            <tr>
                <!-- <th scope="row" style="border-color:white;">Data e marrjes</th>
                <th scope="row" style="border-color:white;">Data e kthimit</th>
                <th scope="row" style="border-color:white;">Komente</th>
                <th scope="row" style="border-color:white;">Kosto</th> -->
                <th scope="row" style="border-color:white;" class="bg-dark">Emri</th>
                <th scope="row" style="border-color:white;" class="bg-dark">Nr Regjistrimit</th>
                <th scope="row" style="border-color:white;" class="bg-dark">Pershkrimi</th>
                <th scope="row" style="border-color:white;" class="bg-dark">Komente</th>
                <th scope="row" style="border-color:white;" class="bg-dark">Kosto</th>
            </tr>
             <tbody style="overflow:scroll;">
                <?php 
                
                    $huate = merrHuate();
                    if($huate != null){
                        $i = 0;
                        while ($huaja = mysqli_fetch_assoc($huate)){
                            if ($i % 2 == 0){
                                echo "<tr class='text-white'>";
                            }
                            else {
                                echo "<tr class='bg-dark text-white'>";

                            }
                            echo "<td>" .$huaja['emri'] . "</td>";
                            echo "<td>" .$huaja['nrregjsitrimi'] . "</td>";
                            echo "<td>" .$huaja['pershkrimi'] . "</td>";
                            echo "<td>" .$huaja['komente'] . "</td>";
                            echo "<td>" .$huaja['kosto'] . "</td>";
                            $i++;
                        }
                    }else {
                        echo "<td colspan=6 class='text-white'>There are no loans to show</td>";
                    }
                ?>


            </tbody>       
        </table>
    </div>        

</div>

<?php 
    include "inc/footer.php";
?>
