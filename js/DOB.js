function validateDOB() {
    let dd = document.getElementById("dd").value.trim();
    let mm = document.getElementById("mm").value.trim();
    let yyyy = document.getElementById("yyyy").value.trim();
 
    if (dd === "" || mm === "" || yyyy === "") {
        alert("All fields must be filled");
        return false;
    }
 
    dd = Number(dd);
    mm = Number(mm);
    yyyy = Number(yyyy);
 
    if (dd < 1 || dd > 31) {
        alert("Day must be between 1–31");
        return false;
    }
 
    if (mm < 1 || mm > 12) {
        alert("Month must be between 1–12");
        return false;
    }
 
    if (yyyy < 1900 || yyyy > 2016) {
        alert("Year must be between 1900–2016");
        return false;
    }
 
    alert("Valid Date!");
    return true;
}