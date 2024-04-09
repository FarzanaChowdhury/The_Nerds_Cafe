const showEvent = document.getElementById("events");
const eventDescription = document.getElementsByClassName("descrp");
const calenderDate = document.getElementsByClassName("anyDate");
const month = document.getElementsByClassName("month")[0];
const saveEvent = document.getElementById("Save");
const addEvent = document.getElementById("write");
const getReminder = document.getElementById("reminderLabel");
const reminderCheck = document.getElementById("reminder");
const deleteEvent = document.getElementById("remove");
const closeEvent = document.getElementById("close");

const eventDate = new Date();
const months=[ "January","February","March","April","May","June","July","August","September","October","November","December"];
const days =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];  

function move(clicked) {

    showEvent.style.width = '350px';
    showEvent.style.transition = 'width .7s';
    closeEvent.style.opacity = '1';
    addEvent.style.display = 'inline';
    eventDescription[0].style.display = 'block';
    eventDescription[0].innerHTML = this.innerHTML;
    month.style.boxShadow = "5px 5px 8px";
    console.log(clicked);
}

saveEvent.addEventListener("click", function () {
    saveEvent.style.display = "none";
    deleteEvent.style.display = "none";
    getReminder.style.display = "none";
    reminderCheck.style.display = "none";
    eventDescription.style.display = "none";
});

addEvent.addEventListener("click", function () {
    saveEvent.style.display = "inline";
    deleteEvent.style.display = "inline";
    getReminder.style.display = "inline";
    reminderCheck.style.display = "inline";
    eventDescription[0].style.display = "block";

});
for (var i = 0; i < calenderDate.length; i++) {
    calenderDate[i].addEventListener("click", function () {
        showEvent.style.width = '350px';
        showEvent.style.transition = 'width .7s';
        closeEvent.style.opacity = '1';
        addEvent.style.display = 'inline';
        eventDescription[0].style.display = 'block';

        eventDate.setDate(this.innerHTML);
        console.log(eventDate);

        document.querySelector(".month h1").innerHTML = months[eventDate.getMonth()];
        document.querySelector("#m").innerHTML = months[eventDate.getMonth()];
        document.querySelector("#d").innerHTML = eventDate.getDate();
        document.querySelector("#day").innerHTML = days[eventDate.getDay()];
        document.querySelector("#year").innerHTML = eventDate.getFullYear();

        const evnt = eventDate.getDate() + " "+ months[eventDate.getMonth()] +", "+ eventDate.getFullYear();
        // eventDescription[0].innerHTML = this.innerHTML;

        eventDescription[0].innerHTML=evnt;
        month.style.boxShadow = "5px 5px 8px";
    });
}

closeEvent.addEventListener("click", function () {
    showEvent.style.width = "0px";
    saveEvent.style.display = "none";
    deleteEvent.style.display = "none";
    getReminder.style.display = "none";
    reminderCheck.style.display = "none";
    addEvent.style.display = 'none';
    eventDescription[0].style.display = "none";
    closeEvent.style.opacity = "0";
    console.log("close");
});

