var select = document.getElementsByTagName('select')
var greenText = document.getElementsByClassName('green-text')
var submitbtn = document.getElementById('submitbutton')
var passed = false;
var message = 'GO'
//date parameters
var year = deadline.substring(0,4)
var month = deadline.substring(5,7)
var day = deadline.substring(8,10)

const zare = new Date()
const dline = new Date(year+"-"+month+"-"+day)

//end

if(zare > dline){
    passed = true;
}else{
    passed = false;
}

validate()




for (let index = 0; index < select.length; index++) {
    select[index].addEventListener('input',validate)
}
submitbtn.addEventListener('mouseover',validate)


function validate(){
    if(!passed){
    //clear all reds
    for (let k = 0; k < select.length; k++) {
        select[k].style.backgroundColor = 'green'
        submitbtn.disabled = false
        message = 'GO'
        submitbtn.value = message
    }

    //mark duplicates
    for(let i = 0;i<select.length;i++){
        var a = select[i].value
        for (let j = 0; j < select.length; j++) {
            if(j != i){
                   if(a == select[j].value){
                       select[j].style.backgroundColor = 'red'
                       submitbtn.disabled = true
                       message = 'Duplicate selection is invalid'
                       submitbtn.value = message
                    } 
            }
        }
    
    }}else{
        for (let a = 0; a < select.length; a++) {
            select[a].disabled = true
        }
    greenText[0].innerHTML = 'The deadline for selection is over'
    greenText[0].style.color = 'black'
    submitbtn.value = 'you cannot change now'
    submitbtn.disabled = true;
    }
}
