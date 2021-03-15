

<div class="login-form text-white" id="loginForm1" >
    <?php
    
        if(isset($_POST['login'])){
            Login($_POST['email'],$_POST['password']);
        }
    
    ?>

<?php
    
    if(isset($_POST['register'])){
        Register($_POST['registerEmri'],$_POST['registerMbiemri'],$_POST['registerUsername']
        ,$_POST['registerTelefoni'],$_POST['registerNrpersonal'],$_POST['registerAdresa']
    ,$_POST['registerPassword']);
    }

?>


    <form action="" method="POST" id="loginB" class="bg-dark">
        <h2 class="text-center text-light">Log in</h2>       
        <div class="form-group">
            <input type="email" name="email" id="email"  class="form-control my-2" placeholder="Email or Username">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">

            <input type="submit" class="btn btn-primary btn-block my-3 bg-dark" name="login" value="Login">
        </div>     
    </form>
    <p class="text-center"><a href="#" onclick="registerForm()">Create an Account</a></p>
</div>


<div class="login-form container-fluid" id="registerForm1" style="display:none">

    <form action="" method="POST" class="bg-dark">
        <h2 class="text-center text-light">Register</h2>       
        <div class="form-group">
            <input type="text" class="form-control my-2" name="registerEmri" placeholder="Emri">
            <input type="text" class="form-control my-2" name="registerMbiemri" placeholder="Mbiemri">
            <input type="text" class="form-control my-2" name="registerUsername" placeholder="Username or Email" required="required">
            <input type="text" class="form-control my-2" name="registerTelefoni" placeholder="Telefoni">
            <input type="text" class="form-control my-2" name="registerNrpersonal" placeholder="NrPersonal">
            <input type="text" class="form-control my-2" name="registerAdresa" placeholder="Adresa">
            <input type="password" class="form-control" name="registerPassword" placeholder="Password" required="required">

            <button type="submit" class="btn btn-primary btn-block my-3 bg-dark" name="register">Register</button>
        </div>
    </form>
    <p class="text-center" onclick="loginForm()"><a href="#">Log In</a></p>
</div>

<script>
    // $("#login").submit(function(){
    //     var errors=false;
        
    //     var email=$("#email").val();
    //     var password=$("#password").val();
    //     if(email.trim() === '' || email == null){
    //        
    //             $_SESSION['message'] = "Emaili eshte i detyrueshem!";
    //        
    //         errors=true;
    //     }
    //     else if(password.trim() === '' || password == null){
    //         
    //             $_SESSION['message'] = "Passwordi eshte i detyrueshem!";
    //        
    //         errors=true;
    //     }
    //     else if(errors){
    //         return false;
    //     }
    //     else{
    //         return true;
    //     }
    // });

//     function validateEmail(email) {
//     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }
</script>