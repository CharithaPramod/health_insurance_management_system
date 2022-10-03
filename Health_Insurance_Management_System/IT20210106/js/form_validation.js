function validation() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var tele = document.getElementById("tele").value;
    var nic = document.getElementById("nic").value;
    var msg = document.getElementById("msg").value;
    var error_msg = document.getElementById("error-msg");
    var submit_msg = document.getElementById("submit-msg");
    var text;

    error_msg.style.padding = "10px";

    if (name.length < 3) {
        text = "Enter a valid Name.";
        error_msg.innerHTML = text;
        return false;
    }

    if (email.length < 7) {
        text = "Enter a valid Email Address.";
        error_msg.innerHTML = text;
        return false;
    }

    if (isNaN(tele) || tele.length != 11) {
        text = "Enter a valid Contact Number.";
        error_msg.innerHTML = text;
        return false;
    }

    /*if ((nic.length != 10) || (nic.length != 12)) {
        text = "Enter a valid NIC Number.";
        error_msg.innerHTML = text;
        return false;
    }*/

    if (msg.length < 50) {
        text = "Enter a valid message containing at least 50 words.";
        error_msg.innerHTML = text;
        return false;
    }
    return true;
}