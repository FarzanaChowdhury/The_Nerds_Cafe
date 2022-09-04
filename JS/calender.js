function move() {
    //  month.style.transform = "translateX(-50px)";
    //  month.style.transitionDuration ="1.3s";
    
     eventt.style.height="auto";
      eventt.style.transform="scale(2,2)";
     eventt.style.transitionDuration="3s";
    
     
    console.log("clicked");


}

const date = document.getElementsByClassName('sdate');
const month = document.getElementsByClassName('month')[0];
const eventt= document.getElementsByClassName("events")[0];
for (var i = 0; i < date.length; i++) 
// { date[i].addEventListener("click", move); 
{date[i].addEventListener("click", move); 
}

