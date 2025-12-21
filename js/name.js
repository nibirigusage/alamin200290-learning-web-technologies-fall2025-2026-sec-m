 function validateName() {
            let name = document.getElementById("username").value;
 
            if (name === "") {
                alert("Name cannot be empty") ;  
                return false;
            }
            let words = name;
        if(name = words.length < 2)
        {
            alert("Name must contain two words");
            return false;
        }else
            alert("Name submitted")
        }