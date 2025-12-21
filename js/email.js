 function validateEmail() {
            let email = document.getElementById("email").value;
 
            // Check if email is empty
            if (email === "") {
                alert("Email cannot be empty");
                return false;
            }
 
            // Check if email contains "@" and "."
            if (!email.includes("@") || !email.includes(".")) {
                alert("Email is not Correct");
                return false;
            }
 
            // If
            alert("Email is valid!");
        }