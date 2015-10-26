<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Documentation Base </title>
	<!--vendor --> 
<script type="text/javascript" src="frameworks/jquery.js"></script>
  <link rel="stylesheet" href="css/input2.css"> 
  <link rel="stylesheet" href="css/nav/nav-set1.css"> 
  <link rel="stylesheet" href="css/normalize.css"> 
  <link rel="stylesheet" href="css/button1.css"> 
  <link rel="stylesheet" href="css/model/progressbar.css"> 
  <link rel="stylesheet" href="css/input-with-holder.css"> 


    <script src="js/base.js"></script>
<style type="text/css">
</style>
	</head> 

<body>
	<!--body-->

 <!-- nav top-nav-->
<div id="nav" class="top-nav">
<!--top navigation menu-->
<div class="centers">
    <a href="#"  class="nav-banner" >
      <img src="./images/prof.jpg" alt="Banner">
    </a>
    <span id="menu-icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M2 6h20v3H2zm0 5h20v3H2zm0 5h20v3H2z"/>
      </svg>
    </span>
     <span id="mob-box" class="mob">
    <ul class="navbar-content ">
      <li class="active" > <a href="#" class="active" >Link</a></li>
      <li > <a href="#"  >Link</a></li>
      <li id="one" class="drop-down">
        <a class="drop-down">Dropdown <span class="dropdown_icon">&nbsp;</span></a>
      <ul>
        <li><a href="#" >Action</a></li>
        <li><a href="#" >Action action</a></li>
        <li><a href="#" >link</a></li>
        <li><a href="#" >One more separated link</a></li>
      </ul> 
      </li>
      <li>
       <input class="inp2 inp-blue inp-left" > 
       <button class="bu1 bu-white">Search</button>
      </li>   
    </ul>    
      <ul class="navbar-content left">
       <li id="two" class="drop-down">
        <a >content<span class="dropdown_icon">&nbsp;</span></a>
      <ul>
        <li><a href="#" >drop-it drop-it drop-it drop-it </a></li>
        <li><a href="#" >drop-it</a></li>
        <li><a href="#" >drop-it</a></li>
      </ul>
      <li><a href="#" >Logout</a></li>
      </li>
    </ul>
    </span>
</div>
</div>
<!-- nav top nav end-->
                <div id="inputholder" class="inputholder inp2 inp-blue" style="display:inline-block;max-width:500px;" >
       <input >
        </div>
       <button style="vertical-align:middle" class="bu1 bu-white">Search</button>


<div class="progress-bar"><div class="bar red"><span class="bar-text">45%</span></div></div>








<script type="text/javascript">

$("#inputholder input").onfocus(function(event){ 
if(!($("#inputholder").hasclass("active")))
  $("#inputholder").addClass("active");
    event.stopPropagation();
      $('#inputholder .tag span').click(function(e){
       this.parentNode.remove();
       e.stopPropagation();
    });

});

$("#inputholder input")[0].onblur=(function(){ 
  $("#inputholder").removeClass("active");
});

$("#inputholder").click(function(event){
if(!($("#inputholder").hasclass("active"))){
  $("#inputholder input").focus();
  $("#inputholder").addClass("active");
    event.stopPropagation();
  }
});
$("#inputholder input").keydown(function(e){

  this.style.width = ((this.value.length + 1)*8 ) + 'px';
  var valueofinput= this.value;
  if(e.which==13 && valueofinput && (valueofinput.trim()!= "") ){
    $('#inputholder input').before('<div class="tag">' + valueofinput + '<span>x</span></div>');
    $('input').val('');
  }
var key=  e.keyCode || e.charCode;
if(key==8){
       $('#inputholder .tag:last-of-type').remove();
}

});
/*///*/
$('html').click(function() { 
  $('.drop-down ul').hide(); 
  $('#nav #mob-box')[0].className="mob"; 

});

$('#menu-icon').click(function(event){
  $('#nav #mob-box').toggleclass("mob-box","mob"); 
    event.stopPropagation();
});

  $('#one.drop-down').click(function(){
      $('#one.drop-down ul').toggle();
    event.stopPropagation();
  });
  $('#two.drop-down').click(function(){
      $('#two.drop-down ul').toggle();
    event.stopPropagation();
  });

/*
var stopper=100;
function start(){
var x= setTimeout(function(){


if(--stoper!=1)start();
},100);
}
function clear(){
clearTimeout(x);
}*/
</script>

</body>
</html>
