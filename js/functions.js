// page Redirector
function Redirector(url) {
    window.location.href = url;
}
//password generator function
function PasswordGenerator() {
    let chars = 'ABCDEFGHI}{[]JMN12OUVWXY!@#$%^&*()_ZabcdefghijklmnopqKLrstuvwxyz0345PQRST6789`~-=+|/><.', password = [];
    for (let i = 0; i < 15; i++) {
        password[i] = chars[Math.floor(Math.random() * 86)]
    }
    document.getElementById('pass-in').value = password.join('');
}