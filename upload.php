<?php
        include "inc/functions.php";

    if (isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

      

        $fileExt = explode('.' , $fileName);
        // explode same as split in java

        $fileActualExt = strtolower(end($fileExt));
        // end() gets last piece of data from an array

        $allowed = array ('jpg','jpeg','png','pdf');

        $emri = $_POST['emri'];
        // $kategoria = $_POST['kategoria'];
        $nrRegjistrimit = $_POST['nrRegjistrimit'];
        $pershkrimi = $_POST['pershkrimi'];
        $cmimi = $_POST['cmimi'];
        $kategoria;
        if(isset($_POST['kategoria'])){
            global $kategoria; 
            $kategoryInput = $_POST['kategoria'];
            switch($kategoryInput){
                case "Sportive":
                    $kategoria = 1;
                break;
                case "Familjare":
                    $kategoria = 2;
                break;
                case "Coupe":
                    $kategoria = 3;
                break;
                case "Cabriolet":
                    $kategoria = 4;
                break;
                case "Van":
                    $kategoria = 5;
                break;
            }

        }
        


        
      
        // s in_arra() checks if firstParameter exists int secondParameter(array)
         if(in_array($fileActualExt,$allowed)){
            
            if ($fileError === 0){
               
                if ($fileSize < 1000000){
                    // $fileNameNew = uniqid('',true) . "." . $fileActualExt;
                    echo $fileName;
                    // $fileDestination = 'uploads/' . $fileNameNew;

                    $fileDestination = 'img/' . $fileName;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    addCar($emri,$kategoria,$nrRegjistrimit,$pershkrimi,$cmimi,$fileName);
                    header("Location:automobilat.php?uploadsuccess");
                    


                }else {
                    echo "Your file is too big !";
                }
            }
            
            
            else {
                echo "There was an error uploading your file !";
            }


         }else {
             echo "You cannot upload files of this type !";
         }



    }
?>