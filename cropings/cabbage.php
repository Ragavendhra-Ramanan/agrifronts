<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	body
	{
	   margin: 0;
	}
	
		.ram
		{
			background-color: red;
			width:100%;
			height: 100px;
		}
		
	.tty
	{
		height: 40px;
		text-shadow: 2px 2px 4px #FF0000;
		padding:10px;
		text-align: center;
		background-color: ;}
		.rtr
		{
			float: left;
			width: 30%;
			height: 100%;
			
		}
		.ptr
		{
           float: left;
           width: 67%;
           height: 100%;
          
           
		}
		.hyh:after
		{
			content: "";
			display: table;
			clear: both;

		}
		.hyh
		{
			background-color: lightgreen;
			box-shadow: 10px 10px 5px grey;
			padding: 10px;

		}
		.yty
		{
			padding-top: 125px;
			padding-left: 50px;
			height: 200px;
			width: 325px;
		}
		.attr
		{
			padding-top: 10px;
			font-family: algerian;
		}
		.hhh
		{
			cursor: pointer;
			background-color:orange;
			color: black;
		}
		
	</style>
</head>
<body>
<div class="ram">
</div>
<div class="hyh">
	<center><h1>CABBAGE</h1></center>
<div class="rtr">
	<img class="yty" src="cabbage.jpg">
</div>
<div class="ptr">
	<pre class="attr">
		<ul><b><li>SOIL TYPE:Sandy loam to clay. PH RANGE: 5.5 - 6.5</li>
		<li>SEASON:cool moist climate.</li>
		<li>SEED RATE:650 gm /ha.</li>
		<li>IRRIGATION:Throught the growing periods. </li>
		<li>GROWING PERIOD:25 - 35 days.</li></b>
	</ul>
	<form action="cabbage1.php" method="POST">
		<b>ENTER THE LAND AREA:</b><input type="text" name="cabbage"value="">  <input class="hhh" type="submit" name="submit" value="CLICK TO GET DETAILS">
	</form>
	</pre>
	
</div></div>

</body>
</html>