const calander = document.getElementById('calander');
const day = new Date();
var dd = day.getDate();
var mm = day.getMonth()+1;
var yyyy = day.getFullYear();
if(Number(dd)<10){
    dd = '0'+dd
}
if(Number(mm)<10){
    mm = '0'+mm
}

zare = String(yyyy)+"-"+String(mm)+"-"+String(dd);

calander.setAttribute('min',zare)
