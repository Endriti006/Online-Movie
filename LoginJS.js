var usernameRegex = /^[A-Za-z]\w{7,14}$/;
var emailRegex = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

var registerButton = document.getElementById("register");
var usernameMsg = document.getElementById("usernameMessage");
var emailMsg = document.getElementById("emailMessage");
var passwordMsg = document.getElementById("passwordMessage");

registerButton.addEventListener("click",function(event){
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;


       if(username == ""){
        alert("Enter a Username");
        event.preventDefault();
        }
        else{
            if(usernameRegex.test(username)){
            }else{
                alert("Username must be 8 to 15 characters");
                event.preventDefault();
            }
        }
        if(email == ""){
            alert("Enter an email");
            event.preventDefault();
            }
            else{
                if(emailRegex.test(email)){
                }else{
                    alert("Enter a valid email");
                    event.preventDefault();
                }
            }
            if(password == ""){
                alert("Enter password");
                event.preventDefault();
                }
                else{
                    if(passwordRegex.test(password)){
                    }else{
                        alert("Password must: \n Start with uppercase \n End with 3 numbers");
                        event.preventDefault();
                    }
                }
})