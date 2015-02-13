<html>

<head>

<style>
.round-button {
 display: block;
width: 243px;
height: 132px;
line-height: 50px;
border: 2px solid #f5f5f5;
border-radius: 70%;
color: #f5f5f5;
text-align: center;
text-decoration: none;
background: #38A6C9;
box-shadow: 0 0 5px rgb(44, 26, 173);
font-size: 20px;
font-weight: bold;
}
.round-button:hover {
    background: #DCE23E;
}
#image_table{position:absolute;left:0;}
</style>

<script>
var myWindow;
var left_value=0,timer=0;

function openWin() {
    myWindow = window.open("city.php", "", "width=300, height=300");
	
}

function nithin()
{

	
	left_value=left_value-1;
	
	document.getElementById("image_table").style.left=-2045+"px"

	//timer=setTimeout(nithin,10);

}


</script>

</head>
<?php include "header.php" ?>
<body style="valign:top"  onload="nithin()">










<table align="center" style="margin-top:0;">

<tr>
<div align="center" style="padding-top:0%;padding-bottom:10%;">
</td>
<td>
<a href="#" class="round-button" style="padding-top:95" onclick="openWin()">FOOD</a>
</td>
<td style="margin-left:20">
<a href="pub.php" class="round-button" style="padding-top:95;margin-left: 50">PUB</a>
</td>
<td>
<a href="entertinment.php" class="round-button" style="padding-top:95;margin-left: 50">ENTERTAINMENT</a>
</td>
</div>
</tr>
</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<iframe src="slide.html" frameborder="0" scrolling="no" width="100%" height="200" style="background-color:white;">

</iframe>


</body>
<?php include "footer.php" ?>
</html>