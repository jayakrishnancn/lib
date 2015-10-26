<?php 
$root="..";
require_once 'require.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Documentation Base </title>
	<!--vendor -->
	<link rel="stylesheet" href="<?php  echo $root;?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo  $root;?>/css/input2.css">
	<link rel="stylesheet" href="<?php echo  $root;?>/css/button1.css">
	<link rel="stylesheet" href="<?php echo  $root;?>/css/nav/nav-set1.css">
	<link rel="stylesheet" href="<?php echo  $root;?>/css/iconset/icon-set1.css">
	<script type="text/javascript" src="<?php echo $root;?>/js/base.js"></script>
	<style type="text/css">
	#content{
		width: 80%;
		margin: 0 auto;
		text-align: left;
		max-width: 500px;
	}
	#content h2{
	color: #1fa67b;
	text-transform: capitalize;
	font-size: 1.5em;
	line-height: 35px;
	width: 75% !important;
	} 
	#content textarea,#content input{
	text-align: left;
	max-width:400px;
	display: block;
	margin:5px auto; 
	}
	.contents-div{
	padding: 15px 30px;
		white-space: pre-line;
		background: #f9f9f9;
	}
	.css-contents{
		background: #FFF5CF;
		border: 1px solid #D8C064;
		border-bottom:0; 
	}
	.html-contents{
		background: #DDFFCF;
		border: 1px solid #8FDA70;
		border-bottom:0; 
	}
	.csslink-contents{
		background: #CFDCFF;
		border: 1px solid #81A6BD;
		border-bottom:0; 
	}
	.script-contents{
		background: #FFE7CF;
		border: 1px solid #E4BC94;
	}
	.contents-div{
		overflow: hidden;
		max-width:500px;
	}
	.examples{
		width: 100%;
		text-align: center;
		margin: 0;
		position: absolute;
		left: 0;
		right: 0;
		margin: auto;
	}
	.contents-div div{
		height: 50px !important;
		overflow: hidden;
	}
	</style>
	</head>
<body>
	<!--body-->  <!-- nav top-nav-->
<div id="nav" class="top-nav">
<!--top navigation menu-->
<div class="center">
    <a href="#"  class="nav-banner" >
      <img src="../images/prof.jpg" alt="Banner">
    </a>
    <span id="menu-icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M2 6h20v3H2zm0 5h20v3H2zm0 5h20v3H2z"/>
      </svg>
    </span>
     <span id="mob-box" class="mob">
    <ul class="navbar-content ">
      <li class="active" > <a href="#" class="active" >content</a></li>
      <li id="one" class="drop-down">
        <a class="xxdrop-down">content<span class="xxdrop-down dropdown_icon">&nbsp;</span></a>
      <ul>
        <li><a href="#" >drop-it drop-it drop-it drop-it </a></li>
        <li><a href="#" >drop-it</a></li>
        <li><a href="#" >drop-it</a></li>
      </ul> 
      </li>
      <li>
       <input class="inp2 inp-blue inp-left" style="width:92%" > 
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



<div id="content">
	<form action="<?php echo $root;?>/tutorials/admin/insert.php" method="post">
		<h2>  html</h2>
	<input class="inp2 inp-blue" name="heading" > 
	<textarea name="html" class="inp2 inp-blue"  style="resize:none" rows="5"></textarea>
		<h2>  css</h2>
		<input class="inp2 inp-blue" name="csslink" > 
		<textarea name="css" class="inp2 inp-blue" style="resize:none" rows="5"></textarea>
		<h2>  script</h2>
		<textarea name="script" class="inp2 inp-blue" style="resize:none" rows="5"></textarea>
		<button class="bu1 bu-blue" > Insert </button>
	</form>
</div> 

<div id="content">
	<?php 
$result=mysqli_query($conn,"SELECT * FROM lib ORDER BY heading ");
$i=0;
while($row=mysqli_fetch_assoc($result))
{
	echo "<a href='#heading".$i."'>".$row['heading']."</a><br/>";
	$i++;
}
$i=0;
$result=mysqli_query($conn,"SELECT * FROM lib ORDER BY heading ");
while($row=mysqli_fetch_assoc($result))
{
	echo "
	<div class='container-over'>
	<h2 id='heading".$i."'>		". $row['heading'] ." </h2>";
	if(!empty( $row['html']))echo"
	<div class='contents-div html-contents'>
		<textarea style='width:100%;min-height:100px;padding:1px; ' id='selecthtml".$i."' >". $row['html'] ."</textarea>
		<buttom onClick=fnSelect('selecthtml".$i."') class='bu1 bu-white'>select all</button>
	</div>";
	if(!empty( $row['csslink']))echo"
	<div class='contents-div csslink-contents'>
		<div  id='selectcsslink".$i."' >". $row['csslink'] ."</div>
		<buttom onClick=fnSelect('selectcsslink".$i."') class='bu1 bu-white'>select all</button>
	</div>";
	if(!empty( $row['css']))echo"
	<div class='contents-div css-contents'>
				<textarea style='width:100%;min-height:100px;padding:1px; '  id='selectcss".$i."' >". $row['css'] ."</textarea>
		<buttom onClick=fnSelect('selectcss".$i."') class='bu1 bu-white'>select all</button>
	</div>";
	if(!empty( $row['script']))echo"
	<div class='contents-div script-contents'>
		<textarea style='width:100%;min-height:100px;padding:1px; '  id='selectscript".$i."' >". $row['script'] ."</textarea>
		<buttom onClick=fnSelect('selectscript".$i."') class='bu1 bu-white'>select all</button>
	</div>";
	echo "
	</div>
	";
	$i++;
}
?>
</div>


</body>
<script type="text/javascript">

$('html').click(function() { 
  $('.drop-down ul').hide(); 
  $('#nav #mob-box')[0].className="mob";  

});

$('#menu-icon').click(function(event){
  $('#nav #mob-box').toggleclass("mob-box","mob"); 
    event.stopPropagation();
});
$('#nav').click(function(event){
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


function fnSelect(objId)
{
fnDeSelect();
if (document.selection)
{
var range = document.body.createTextRange();
range.moveToElementText(document.getElementById(objId));
range.select();
}
else if (window.getSelection)
{
var range = document.createRange();
range.selectNode(document.getElementById(objId));
window.getSelection().addRange(range);
}
}
function fnDeSelect()
{
if (document.selection)
document.selection.empty();
else if (window.getSelection)
window.getSelection().removeAllRanges();
}


</script>
<a style="display:inline-block;padding:5px 15px;background:#fff;position:fixed;bottom:0;right:0;" href="#nav" >top </a>
<!-- this  should be deleted after devmt
<META HTTP-EQUIV="Refresh" CONTENT="4">
	 end this-->
</html>
