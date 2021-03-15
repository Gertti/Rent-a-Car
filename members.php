<?php 
    include "inc/header.php";
?>

<div>
    <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-light mb-1" style="height: 75px;">
                <div class="container">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="mainNav" class="navbar-collapse collapse">
                        <form action="" class="form-inline">
                          <input type="text" class="form-control" placeholder="Search">
                          <button class="btn btn-outline-secondary bg-light ml-1">Search</button>     
                        </form> 
                    </div>
                </div>
            </nav>
    </div>
</div>



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
                <th scope="row" style="border-color:white;">Emri</th>
                <th scope="row" style="border-color:white;">Mbiemri</th>
                <th scope="row" style="border-color:white;">Email</th>
                <th scope="row" style="border-color:white;">Telefoni</th>
                <th scope="row" style="border-color:white;">Adresa</th>
                <th scope="row" style="border-color:white;">ID</th>
            </tr>

            <?php 
                $members = getMembers();
                if($members){
                    $i = 0;
                    while ($member = mysqli_fetch_assoc($members)){
                        if ($i % 2 == 0){
                            echo "<tr class='text-white'>";
                        }
                        else {
                            echo "<tr class='bg-dark text-white'>";

                        }

                        $kid = $member['klientiid'];
                        echo "<td>" .$member['emri'] . "</td>";
                        echo "<td>" .$member['mbiemri'] . "</td>";
                        echo "<td>" .$member['email'] . "</td>";
                        echo "<td>" .$member['telefoni'] . "</td>";
                        echo "<td>" .$member['adresa'] . "</td>";

                        $i++;

                    }
                }
            ?>



        </table>
    </div>          

</div>


<?php 
    include "inc/footer.php";
?>

