// Copyright 2006-2007 javascript-array.com

var timeout	= 500; // Timer for how long the menu stays open after mouseout
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer menu
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer menu
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer menu
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer menu
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out menu
document.onclick = mclose; 

// Generic function to test with
function notify(message)
{

	alert(message);
}

// Function called when Split Animations is clicked in the menu
function splitAnimations()
{
	console.log("Split Animations Menu Button");
}

// Function that draws the circles
function drawCircles()
{
	var panel2dId= document.getElementById("canvasPanel2d");
	var ctx=panel2dId.getContext("2d");
	ctx.beginPath();
	ctx.arc(100,75,50,0,2*Math.PI);
	ctx.stroke();

}

// Mouse location function
jQuery(document).ready(function(){
   $(document).mousemove(function(e){
      $('#mouseLocationDiv').html(e.pageX +', '+ e.pageY);
   }); 
})
