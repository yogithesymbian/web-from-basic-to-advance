//when the user scrolls down 20px from the top of the document,
//show the button
window.onscroll = function()
{
    scrollFunction();
}

function scrollFunction()
{
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
    {
        document.getElementById("scrlTopBtn").style.display = "block";
        document.getElementById("scrlBotBtn").style.display = "none";
    }
    else
    {
        document.getElementById("scrlTopBtn").style.display = "none";
        document.getElementById("scrlBotBtn").style.display = "block";
    }
}

//when the user clicks on the button , scroll to the top of the document

function topFunction()
{
    document.body.scrollTop = 0; // for safari browser
    document.documentElement.scrollTop = 0; // for chrome , firefox, IE and Opera
}

function botFunction()
{
    // ??? how to down with max value ????
    // i solved width scroll to heigh ____________
    document.body.scrollTo(0, document.body.scrollHeight) // for explain just hold ctrl + space 
    document.documentElement.scrollTo(0, document.body.scrollHeight);
}

function showFuncDate()
{
    document.getElementById("showDate").innerHTML = Date();
    document.getElementById("showDate").style.display = "block";
}

// My Canvas
var c = document.getElementById("myCanvas1");
var ctx = c.getContext("2d");
// DRAW LINE
// ctx.moveTo(0,0);
// ctx.lineTo(200,100);
// ctx.stroke();

// DRAW CIRCLE
// ctx.beginPath();
// ctx.arc(95, 50 , 40, 0 , 2 * Math.PI);
// ctx.stroke();

// DRAW HELLO WORLD
// ctx.font = "30px Arial";
// ctx.fillText("Hello World", 10 , 50);
// ctx.strokeText("Hello World", 10 , 50);

// // Create gradient
// var grd = ctx.createLinearGradient(0, 0, 200, 0);
// grd.addColorStop(0, "red");
// grd.addColorStop(1, "white");

// // Fill with gradient
// ctx.fillStyle = grd;
// ctx.fillRect(10, 10, 150, 80);

// Create gradient
var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);
grd.addColorStop(0, "red");
grd.addColorStop(1, "white");

// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(10, 10, 150, 80);

// VIDEO

var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 