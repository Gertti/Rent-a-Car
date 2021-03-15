function registerForm(){
    document.getElementById("registerForm1").style.display="block";
    document.getElementById("loginForm1").style.display="none";
}

function loginForm(){
    document.getElementById("loginForm1").style.display="block";
    document.getElementById("registerForm1").style.display="none";
}


//LOGIN FORM VALIDATION

function validateLogin(){

    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var errorElement = document.getElementById('error');           
    var messages;


        if (username.value.trim() === '' || username.value == null){
            errorElement.style.color = "red";
            messages = ("Username is required");
        }

        else if (password.value.trim() === '' || password.value == null){
            errorElement.style.color = "red";
            messages = ("Password is required");
        }

         else if (password.value.length <= 6){
            errorElement.style.color = "red";
            messages =("Password must be longer than 6 characters");
        }

        else {
            errorElement.style.color="green";
            messages = "Login suuccesful !";
        }
            errorElement.innerText = messages;            
}



//email validation            
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
// REGISTER FORM VALIDATION

function validateRegister() {
    var username = document.getElementById('usernameRegister');
    var email = document.getElementById("emailRegister");
    var password = document.getElementById("passwordRegister");
    var errorElement = document.getElementById("errorRegister");
    var messages;

    
    if (username.value.trim() === '' || username.value == null){
        errorElement.style.color = "red";
        messages = ("Username is required");
    }
    else if (!validateEmail(email.value)){
        errorElement.style.color = "red";
        messages = ("You have typed an invalid email address");
    }

    else if (password.value.trim() === '' || password.value == null){
        messages = ("Password is required");
        errorElement.style.color = "red";
    }
    else if (password.value.length <= 6){
        errorElement.style.color = "red";
        messages =("Password must be longer than 6 characters");
    }
    else {
        errorElement.style.color = "green";
        messages = ("Registered successful !");
    }
    errorElement.innerText = messages;
  
}
