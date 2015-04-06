var tout = 0;
		
setTimeout(function() {
	hideDiv()
	tout = 1;
	}, 7300);// <-- time in milliseconds
function hideDiv() {
	$('.home-right').attr("class", "home-right2");
	$(".home-left").attr("class", "home-left2");
	$('.main-left').attr("class", "main-left2");
	$('.main-right').attr("class", "main-right2");
	};
	
function showDiv()  {
	$(".home-left2").attr("class", "home-left");
	$(".home-right2").attr("class", "home-right");
	$(".main-left2").attr("class", "main-left");
	$(".main-right2").attr("class", "main-right");
};
	
function showDelay() {
		$(".delay2").attr("class", "delay1");
		setTimeout(delay1(), 7000);
		setTimeout(delay2(), 21000);
};

function delay1(){
    return function(){
    	$(".delay3").attr("class", "delay1");
    }
}
function delay2(){
    return function(){
    	$(".delay4").attr("class", "delayCenter");
		$(".home-left2").attr("class", "home-left");
		$(".home-right2").attr("class", "home-right");
		$(".main-left2").attr("class", "main-left");
		$(".main-right2").attr("class", "main-right");
    }
}

$(document).ready(function(){
  $(".home-left").hover(function(){
		showDiv()
    }
	);
	 $(".home-right").hover(function(){
		showDiv()
    }
	);
	 $(".main-left").hover(function(){
		showDiv()
    }
	);
	 $(".main-right").hover(function(){
		showDiv()
    }
	);
   
});

	
$(document).ready(function(){
	$(".main").hover(function(){
		if(tout != 1)
		{
			//nothing
		}
		else
		{
			hideDiv();
		}
    });
});
$(document).ready(function(){
	$(".welcomeMain").hover(function(){
		if(tout != 1)
		{
			//nothing
		}
		else
		{
			hideDiv();
		}
    });
});

var line = 0;

$(document).ready(function() {
	$(".third").hover(function(){
		$(".second").attr("class", "first");
		$(".third").attr("class", "second2");
	})
});

//Div control for Signup only
$(document).ready(function(){
	$(".delay2").hover(function(){
		{
			showDelay();
		}
    });
});


//Ajax control for loading DIV.  Source: w3schools 
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("divContent").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","content/text/DrGreenThumb-01.txt",true);
xmlhttp.send();
}