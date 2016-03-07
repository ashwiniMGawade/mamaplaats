function show() {
    var double_opt = document.getElementById("double_opt");
    if (double_opt.checked == true) {
        document.getElementById("double_opt_text").style.display = 'inline';
    } else {
        document.getElementById("double_opt_text").style.display = 'none';
    }
}

function show_phone() {
    var phone_number = document.getElementById("phone_number");
    if (phone_number.checked == true) {
        document.getElementById("phone_number_text").style.display = 'inline';
    } else {
        document.getElementById("phone_number_text").style.display = 'none';
    }
}