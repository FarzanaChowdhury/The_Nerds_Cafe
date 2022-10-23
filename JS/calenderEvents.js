const showEvent = document.getElementById("events");
let date = document.getElementsByClassName("anyDate");
const month = document.getElementsByClassName("month")[0];
const saveEvent = document.getElementById("save");
const addEvent = document.getElementById("write");
const deleteEvent = document.getElementById("remove");
const closeEvent = document.getElementById("close");
function move() {

    showEvent.style.width = '350px';
    showEvent.style.transition='width .7s';
    closeEvent.style.opacity='1';
    month.style.boxShadow = "5px 5px 8px";
    console.log("clicked");
}

saveEvent.addEventListener("click", function () {
    saveEvent.style.display = "none";
    deleteEvent.style.display = "none";
});

addEvent.addEventListener("click", function () {
    saveEvent.style.display = "inline";
    deleteEvent.style.display = "inline";
});
for (var i = 0; i < date.length; i++) {
    date[i].addEventListener("click", move);
}

closeEvent.addEventListener("click",function()
{
    showEvent.style.width="0px";
    saveEvent.style.display="none";
    closeEvent.style.opacity="0";
    console.log("close");
});
