 function validateGender() {
            let male = document.getElementById("male").checked;
            let female = document.getElementById("female").checked;
            let other = document.getElementById("others").checked;
 
            if (!male && !female && !other) {
                alert("Please select a gender");
                return false;
            }
 
            alert("Valid!");
            return true;
        }