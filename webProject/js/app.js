const togglePassword = document.querySelector('#toggle-icon');
const passField = document.querySelector('#pass-field');



togglePassword.addEventListener('click', function (e) {
    const type = passField.getAttribute('type') === 'password' ? 'text' : 'password';
    passField.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
    });



