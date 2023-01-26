// Password Generate function
let PasswrodGenerator = function () {
    let chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let password = "";
    for (var i = 0; i <= 10; i++) {
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber + 1);
    }
    return password;
};

$('#generate-password-button').click(function () {
    $('#password-input').val(PasswrodGenerator);
});

$('#add-button').click(function () {
    $('#domain-name-input-box').show();
    $('#username-input-box').show();
    $('#cancel-button').show();
    $('#save-pass-button').show();
    $('#add-button').hide();
});

$('#cancel-button').click(function () {
    $('#domain-name-input-box').hide();
    $('#username-input-box').hide();
    $('#cancel-button').hide();
    $('#save-pass-button').hide();
    $('#add-button').show();
});