function validateForm() {
    userEmail = document.getElementById("mail").value;
    password = document.getElementById("pass").value;
    if(userEmail.trim() === "")
    {
        alert("Please Enter Email!");
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
        alert("Please Enter Password!");
        return false;
    }
    return true;
  }