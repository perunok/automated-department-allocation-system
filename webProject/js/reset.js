const form = document.querySelector('form');
const label = document.querySelector('.label');

const togglePassword0 = document.querySelector('#toggle-icon0');
const passField0 = document.querySelector('#pass-field0');

const togglePassword1 = document.querySelector('#toggle-icon1');
const passField1 = document.querySelector('#pass-field1');

const togglePassword2 = document.querySelector('#toggle-icon2');
const passField2 = document.querySelector('#pass-field2');

const faildMessage = document.querySelector('#faildmessage');
const username = document.querySelector('#username');
const btnReset = document.querySelector('#btnreset');


togglePassword1.addEventListener('click', function () {

    const type = passField1.getAttribute('type') === 'password' ? 'text' : 'password';
    passField1.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
    });

togglePassword2.addEventListener('click', function () {
        const type = passField2.getAttribute('type') === 'password' ? 'text' : 'password';
        passField2.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
        });

togglePassword0.addEventListener('click', function () {
            const type = passField0.getAttribute('type') === 'password' ? 'text' : 'password';
            passField0.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            });
// matchup the password fields
passField2.addEventListener('keyup', function(){
    if(passField1.value == passField2.value){
        faildMessage.innerHTML = "";
        label.innerHTML="reset"
        btnReset.style.backgroundColor=""
        btnReset.setAttribute('class','form-control btn btn-secondary  mb-3 shadow')
        icon.setAttribute('class','fa fa-key iconic')
        btnReset.disabled = false
    }else{
        faildMessage.innerHTML = "your new password doesn't match";
        label.innerHTML="invalid"
        btnReset.style.backgroundColor="red"
        btnReset.disabled = true
    }
});

form.addEventListener('mousemove',function(){
    if(passField1.value == passField2.value){
        faildMessage.innerHTML = "";
        label.innerHTML="reset"
        btnReset.style.backgroundColor=""
        btnReset.setAttribute('class','form-control btn btn-secondary  mb-3 shadow')
        btnReset.disabled = false
    }else{
        label.innerHTML="invalid"
        btnReset.style.backgroundColor="red"
        btnReset.disabled = true
    }
})
