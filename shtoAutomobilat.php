<?php
    include 'inc/header.php';
?>

<style>
    
    #main{
        display:flex;
        width:90%;
        margin:0 auto;
        margin-top:10px;
        border:1px solid black;
        height:600px;
        justify-content:space-evenly;
        align-items:center;
        flex-direction:column;
    }

</style>

<div id="main">


    <h1 class="bg-dark mt-3 text-info px-5 py-2" style="border-radius:30px; ">
        These are our cars</h1>
        <br><br>
        

    <?php
        $dbconn=mysqli_connect('localhost','root','','rentacar');

        if(!$dbconn){
            die("Nuk eshte lidhur me fb" . mysqli_error($dbconn));
        }

        $sql='INSERT INTO automobilat VALUES (80,2,"Touareg","01-999-KS","PIGJ")';
        // $sql='SELECT emri, mbiemri, email FROM klientet';

        $shto_auto=mysqli_query($dbconn,$sql);

        if($shto_auto){
            echo "Auto u shtua me sukses";
        }else {
            die("Automobili nuk u shtua" . mysqli_error($dbconn));
        }
    ?>


    



</div>