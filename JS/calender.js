//Making the calender

const today=new Date();

const renderCalendar = ()=>
{
const months=[ "January","February","March","April","May","June","July","August","September","October","November","December"];
const days =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];    

document.querySelector(".month h1").innerHTML=months[today.getMonth()];
document.querySelector("#m").innerHTML=months[today.getMonth()];
document.querySelector("#d").innerHTML=today.getDate();
document.querySelector("#day").innerHTML=days[today.getDay()];
document.querySelector("#year").innerHTML=today.getFullYear();

// document.querySelector(".t-date p").innerHTML=today.toDateString();

const monthDates = document.querySelector(".dates");

let calenderDates = '';


//putting the dates according to days

today.setDate(1); //sets today's date as 1
const firstDayIndex = today.getDay(); //which day the month starts with
const prevLastDate = new Date(today.getFullYear(), today.getMonth(),0).getDate(); //gives the last day of previous month
console.log(prevLastDate);
for(let x=firstDayIndex; x>0; x--)
{
    
    calenderDates += `<div class='anyDate prev-date'>${prevLastDate - x + 1}</div>`;
    monthDates.innerHTML = calenderDates;
}

//gives the last date of this month
const lastDate = new Date(today.getFullYear(), today.getMonth()+1,0).getDate();

for(i=1;i<=lastDate;i++)
{
    if (
        i === new Date().getDate() &&
        today.getMonth() === new Date().getMonth()
      )
      {
        calenderDates += `<div class='anyDate currentDate'>${i}</div>`;
      }
      else{
        calenderDates += `<div class='anyDate'>${i}</div>`;
      }

    monthDates.innerHTML = calenderDates;
}

const lastDayIndex = new Date(today.getFullYear(), today.getMonth()+1,0).getDay();
const nextDays = 7-lastDayIndex -1

for(let x=1; x<=nextDays; x++)
{console.log(x + " ");
    calenderDates += `<div class='anyDate next-date'>${x}</div>`;
    monthDates.innerHTML = calenderDates;
}
}

//traversing between months
document.querySelector(".prev").addEventListener("click", () => {
    today.setMonth(today.getMonth() - 1);
    renderCalendar();
  });
  
  document.querySelector(".next").addEventListener("click", () => {
    today.setMonth(today.getMonth() + 1);
    renderCalendar();
  });
  
  renderCalendar();

