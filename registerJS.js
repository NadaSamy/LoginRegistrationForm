function validateForm() {
    username = document.getElementById("username").value;
    userEmail = document.getElementById("email").value;
    password = document.getElementById("password").value;
    confirmedPassword = document.getElementById("confirmPassword").value;

    if(username.trim() === "")
    {
        alert("Error, Enter Name.");
        return false;
    }
    if(userEmail.trim() === "")
    {
        alert("Error, Enter Email.");
        return false;
    }
    else
    {
        valid = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(userEmail);
        if (!valid)
        { 
            alert("Error, invalid email.");
             return false; 
        }

    }
    if(password.trim() === "")
    {
        alert("Error, Enter Password.");
        return false;
    }
    if(confirmedPassword.trim() == "")
    {
        alert("Error, Enter Confirmed Password.");
        return false;
    }

    if(password.trim() != confirmedPassword)
    {
        alert("Passwords do not match");
        return false;
    }
    return true;
  }