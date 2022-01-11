const togglePassword0 = document.querySelector('#toggle-icon0');
const passField0 = document.querySelector('#pass-field0');

const togglePassword1 = document.querySelector('#toggle-icon1');
const passField1 = document.querySelector('#pass-field1');

const togglePassword2 = document.querySelector('#toggle-icon2');
const passField2 = document.querySelector('#pass-field2');




togglePassword1.addEventListener('click', function (e) {
    const type = passField1.getAttribute('type') === 'password' ? 'text' : 'password';
    passField1.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
    });

togglePassword2.addEventListener('click', function (e) {
        const type = passField2.getAttribute('type') === 'password' ? 'text' : 'password';
        passField2.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
        });

togglePassword0.addEventListener('click', function (e) {
            const type = passField0.getAttribute('type') === 'password' ? 'text' : 'password';
            passField0.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            });