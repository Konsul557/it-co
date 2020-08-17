sign_up.addEventListener('click', function(event) {
    event.preventDefault();

    var formData = new FormData(document.forms.reg);
    console.log(formData.get('password'));
    var urlSignUp = '../api/reg.php';
    var xhr = new XMLHttpRequest();
    xhr.open("POST", urlSignUp);
    xhr.send(formData);


    xhr.onload = function() {
        console.log(xhr.response);
        document.cookie = (xhr.response);
    };
    if (formData.get('password') != '') {
        location.href = '../index.php'
    } else {
        alert('Введите пароль')
    }
});