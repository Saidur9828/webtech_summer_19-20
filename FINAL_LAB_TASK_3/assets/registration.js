function RegistrationValidation() {
    var name = document.getElementById("userName").value;
    var email = document.getElementById("userEmail").value;
    var UserName = document.getElementById("loginName").value;
    var UserPass = document.getElementById("loginPass").value;
    var ConfirmPass = document.getElementById("confPass").value;
    var UserType = document.getElementById("userType").value;


    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', 'registation.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('&name=' + name + '&username=' + UserName + '&email=' + email + '&password=' + UserPass + '&type=' + UserType);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;

        }

    }
}
