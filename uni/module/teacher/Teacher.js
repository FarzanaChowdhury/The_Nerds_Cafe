function changeDisplay()
{
    document.getElementsByClassName("sidebar").style.display="block";
    document.getElementsByClassName("upload").style.display="none";
}

document.getElementById("menu").addEventListener("click", changeDisplay);


document.getElementById("r_sub").click=changeDisplay