<!DOCTYPE html>
<html>
<head>
<title>Setting Basefont Color</title>
<script type="text/javascript">
	function EventHandler(){
		alert("Im event handler!!");
	}
</script>
<style type="text/css">
	#black{
		color:red;
		cursor:crosshair;
			outline: 5px grey dotted;
	}
	.scroll{
		display:block;
		border:5px red dotted;
		padding:5px;
		margin-top:5px;
		width:300px;
		height:50px;
		overflow:scroll;
	}
	a:link{
		color:black;
	}
	a:visited{
		color:blue;
	}
	a:hover{
		color:red;
	}
	a:active{
		color:yellow;
	}
	input[type="text"]{
		color:rgb(255,0,255);
	}
	 div>p{
		font:italic small-caps bold 20px georgia;
		text-decoration: blink;
		text-shadow: 4px 4px 8px red;
		cursor:help;
	}
	body{
		background-image: url("/new_project/resources/views/ss.jpg");
		background-repeat: repeat-x;
		background-attachment: fixed;
		background-attachment: scroll;
	}
</style>
</head>
<body>
<div class="scroll">qweasdqasd  asdo fwcw wcwev cvdve zcw fsdvt brtr hyhrbbf ve
asd weferrhy  miu kfgr e
geg uk ikui
</div>
<div>
<p> dece nu arata cularea?? </p>
</div>
<h1 id="black"> PUI </h1>
<h2 id="black"> ANNA </h2>
<a href="#"> <p> ce avem noi aici? </p> </a>
<form>
Numele:<input type="text" name="first_name" value="ivan" >
<br>
Prenumele:<input type="text" name="last_name" value="cioban">
<br>
<input type="checkbox" value="pass" value="on">Femeie
<input type="checkbox" value="pass" value="on">Barbat
<div>
<select name="anna">
<option value="math" selected>Math </option>
<option value="info">Info </option>
<option value="fizica">Fizica </option>
<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" />
<input type="button" name="ok" value="OK"  />
<input type="image" name="imagebutton" src="/html/images/logo.png" />
</select>
</div>
</form>
<marquee width="10%" height="50" direction="right" behavior="slide"> one ore more lines or text message or image </marquee>
<p> budi bogatim </p>
<p onmouseover="EventHandler();"> treci cu mousul peste </p>
      <div style="cursor:auto">Auto</div>
      <div style="cursor:crosshair">Crosshair</div>
      <div style="cursor:default">Default</div>
      <div style="cursor:pointer">Pointer</div>
      <div style="cursor:move">Move</div>
      <div style="cursor:e-resize">e-resize</div>
      <div style="cursor:ne-resize">ne-resize</div>
      <div style="cursor:nw-resize">nw-resize</div>
      <div style="cursor:n-resize">n-resize</div>
      <div style="cursor:se-resize">se-resize</div>
      <div style="cursor:sw-resize">sw-resize</div>
      <div style="cursor:s-resize">s-resize</div>
      <div style="cursor:w-resize">w-resize</div>
      <div style="cursor:text">text</div>
      <div style="cursor:wait">wait</div>
      <div style="cursor:help">help</div>
</body>
</html>