function move() {
    //  month.style.transform = "translateX(-50px)";
    //  month.style.transitionDuration ="1.3s";
    
    eventt.style.display = "block";
     eventt.style.transitionDuration="3s";
     month.style.boxShadow="5px 5px 8px";
     
    console.log("clicked");
}

const eventt=document.getElementById("events");

const date = document.getElementsByClassName('sdate');
const month = document.getElementsByClassName('month')[0];

const inp = document.getElementById("sub");
inp.addEventListener("click",function(){
    inp.style.display="none";
})

const add = document.getElementById("write");
add.addEventListener("click",function(){
    inp.style.display="block";
    
})
for (var i = 0; i < date.length; i++) 
{
    date[i].addEventListener("click", move); 
}

const months=[ "January","February","March","April","May","June","July","August","September","October","November","December"];
const days =["Sunday","Monday","Tuesday","Thursday","Friday","Saturday"];    
const today=new Date()
document.querySelector(".month h1").innerHTML=months[today.getMonth()];
document.querySelector("#m").innerHTML=months[today.getMonth()];
document.querySelector("#d").innerHTML=today.getDate();
document.querySelector("#day").innerHTML=days[today.getDay()];
document.querySelector("#year").innerHTML=today.getFullYear();

