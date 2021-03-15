
<?php
session_start();

global $dbconn;
connectionDB();

function connectionDB(){
    global $dbconn;
    $dbconn=mysqli_connect('localhost', 'root','', 'rentacar');
    
    if(!$dbconn){
        die (" Lidhja me DB nuk u krijuar per ". mysqli_error($dbconn));
    }
    return $dbconn;
}


function Login($email,$password){
    global $dbconn;
    $sql="SELECT klientiid, emri, mbiemri, email, telefoni, nrpersonal, adresa, password, roli FROM klientet";
    $sql.=" WHERE email='$email' AND password='$password'";


    $result=mysqli_query($dbconn,$sql);    
    $resultCheck = mysqli_num_rows($result);

    if($result){
        if ($resultCheck > 0){
        $klienti= array();
        $data=mysqli_fetch_assoc($result);
        $klienti['klientiid']=$data['klientiid'];
        $klienti['emri']=$data['emri'];
        $klienti['mbiemri'] = $data['mbiemri'];
        $klienti['roli'] = $data['roli'];
        $_SESSION['klienti']=$klienti;
        header("location:loans.php");
    //    echo"<h4 class='text-success'>You are logged in</h4>";
        }else {
            echo"<h4 class='text-danger'>Email ose password gabim</h4>";
        }
    }else{  
        die (" Error db: ". mysqli_error($dbconn));
    }
}

function register($emri,$mbiemri,$email,$telefoni,$nrpersonal,$adresa,$password){
    global $dbconn;
    $sql = "INSERT INTO klientet (emri,mbiemri,email,telefoni,nrpersonal,adresa,password,roli) VALUES ('$emri','$mbiemri','$email','$telefoni','$nrpersonal','$adresa','$password',0)";
    $result = mysqli_query($dbconn,$sql);
    if($result){
        $_SESSION['message'] = "Anetari " . $emri . " u shtua me sukses";
    }else {
        die ('Error tek lidhja me DB: ' . mysqli_error($dbconn));
    }
}

function addCar($emri,$kategoria,$nrRegjistrimi,$pershkrimi,$cmimi,$foto){
    global $dbconn;
    $sql = "INSERT INTO automobilat (emri,kategoriaid,nrregjsitrimi,pershkrimi,cmimi,foto) VALUES ('$emri','$kategoria','$nrRegjistrimi','$pershkrimi','$cmimi','$foto')";
    $result = mysqli_query($dbconn,$sql);
    if($result){
        $_SESSION['message'] = "Vetura " . $emri . " u shtua me sukses";
    }else {
        die ('Error tek lidhja me DB: ' . mysqli_error($dbconn));
    }
}



function logout(){
    session_destroy();
    // unset($_SESSION['klienti']);
    header("location:index.php");
}


function getMembers(){
    global $dbconn;
    $sql = 'SELECT klientiid ,emri,mbiemri,email,telefoni,adresa FROM klientet';

    $result = mysqli_query($dbconn,$sql);
    if($result){
        return $result;
    }else {
        die ('Error tek lidhja me DB: ' . mysqli_error($dbconn));
    }
}


function getAutomobilat (){
    global $dbconn;
    $sql = 'SELECT emri,foto,pershkrimi,automobiliid,cmimi FROM automobilat';
    $result = mysqli_query($dbconn,$sql);

    if($result){
        if (mysqli_num_rows($result) > 0){
            return $result;
        }
        else {
            echo "nuk ekziston asnje automobil";
        }
    }else {
        die ('Lidhja me DB nuk eshte krijuar: ' . mysqli_error($dbconn));
    }
}

function getAutomobilatByCategory ($category){
    global $dbconn;
    $sql = "SELECT emri,foto,pershkrimi,automobiliid,cmimi FROM automobilat WHERE kategoriaid = $category";
    $result = mysqli_query($dbconn,$sql);

    if($result){
        if (mysqli_num_rows($result) > 0){
            return $result;
        }
        else {
            echo "nuk ekziston asnje automobil";
        }
    }else {
        die ('Lidhja me DB nuk eshte krijuar: ' . mysqli_error($dbconn));
    }
}

function getAutomobilin($id){
    global $dbconn;
    $sql = 'SELECT emri,nrregjsitrimi,foto,pershkrimi,cmimi FROM automobilat WHERE automobiliid = '.$id;
    $result = mysqli_query($dbconn,$sql);

    if ($result){
        if(mysqli_num_rows($result) > 0){
            return $automobili = mysqli_fetch_assoc($result);
        }
        else {
            echo 'Automobili nuk ekziston';
        }
    }else {
        die ('Lidhja me DB nuk eshte krijuar ' . mysqli_error($dbconn));
    }
}

function merrHuate(){
    global $dbconn;
    if(isset($_SESSION['klienti'])){
        $id = $_SESSION['klienti']['klientiid'];
        // $sql = 'SELECT dataemarrjes,dataekthimit,komente,kosto FROM huat h  WHERE h.klientiid = ' . $id ;

        $sql = 'SELECT a.emri, a.nrregjsitrimi,a.pershkrimi,h.komente,h.kosto
        FROM automobilat a INNER JOIN huat h 
        ON a.automobiliid = h.automobiliid 
        WHERE h.klientiid = ' . $id ;
        $result = mysqli_query($dbconn,$sql);
        if($result){
            if (mysqli_num_rows($result) > 0){
                return $result;
            }else {
                return null;
            }
        }else {
            die ('Error tek lidhja me DB: ' . mysqli_error($dbconn));
        }
    }
}

function addLoan($autoID,$klientID,$autoCmimi){
    global $dbconn;
    $sql = "INSERT INTO huat (automobiliid,klientiid,kosto) VALUES ('$autoID','$klientID','$autoCmimi')";
    // $sql = "INSERT INTO huat (automobiliid,klientiid,kosto) VALUES (5,3,20)";

    $result = mysqli_query($dbconn,$sql);

    if ($result){
        if(mysqli_num_rows($result) > 0){
           echo"Loan added successfully";
        }
        else {
            echo 'Loan not added';
        }
    }else {
        die ('Gabimi eshte tek: <br>' . mysqli_error($dbconn));
    }


}

function checkLoggedIn(){
    if(isset($_SESSION['klienti'])){
        return true;
    }else {
        return false;
    }
}


?>

