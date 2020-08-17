console.log('Start script auth_reg')
var auth = document.getElementById('auth_btn')
var reg = document.getElementById('reg_btn')
var sign_in = document.getElementById('sign_in')
var sign_up = document.getElementById('sign_up')
var pas = document.getElementById('password')
var email = document.getElementById('email')
var p = document.getElementById('p_warning')
var p2 = document.getElementById('p_warning2')
sign_up.setAttribute('style', 'display: none')
pas.setAttribute('style', 'display: block')
p.setAttribute('style', 'display: none')
p2.setAttribute('style', 'display: none')

auth.onclick = function() {
    sign_up.setAttribute('style', 'display: none')
    sign_in.setAttribute('style', 'display: block')
    email.setAttribute('style', 'display: block')
    pas.setAttribute('style', 'display: block')
    p.setAttribute('style', 'display: none')
    p2.setAttribute('style', 'display: none')
    return false;
}
reg.onclick = function() {
    sign_up.setAttribute('style', 'display: block')
    pas.setAttribute('style', 'display: none')
    sign_in.setAttribute('style', 'display: none')
    email.setAttribute('style', 'display: block')
    p.setAttribute('style', 'display: block')
    p2.setAttribute('style', 'display: block')
    return false;
}

sign_up.addEventListener('click', function(event) {
    event.preventDefault();

    var formData = new FormData(document.forms.reg);
    console.log(formData.get('email'));
    var urlSignUp = '../api/sendmail.php';
    var xhr = new XMLHttpRequest();
    xhr.open("POST", urlSignUp);
    xhr.send(formData);


    xhr.onload = function() {
        console.log(xhr.response);
        document.cookie = (xhr.response);
    };
    if (formData.get('email') == '') {
        alert('Введите Email')
    }
});
sign_in.addEventListener('click', function(event) {
    event.preventDefault();

    var formData = new FormData(document.forms.reg);
    console.log(formData.get('email'));
    console.log(formData.get('password'));
    var urlSignUp = '../api/auth.php';
    var xhr = new XMLHttpRequest();
    xhr.open("POST", urlSignUp);
    xhr.send(formData);


    xhr.onload = function() {
        console.log(xhr.response);
        document.cookie = (xhr.response);
        var resp = xhr.response;
        var resp_ar = resp.split('|');
        if (formData.get('email') == resp_ar[0] || formData.get('password') == resp_ar[1]) {
            location.href = '/index.php'
        } else {
            alert('Неверный логин или пароль')
        }
    };
    if (formData.get('email') == '') {
        alert('Введите Email')
    }

});