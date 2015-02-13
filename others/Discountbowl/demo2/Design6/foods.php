<html>

<head>
<style>
		#more_information{position:absolute;top:0;left:0;}
		border_1{border-color:black;}
		border_2{border-color:black;}
		</style>
	
		<script>
		
		var info="";
		var x;
		var y;
		var border_no=0;
		
		
			function highlight(border_no)
			{
			
				document.getElementById("border_"+border_no).style.borderColor="red";
			
			
			
			}
			
			function highlight_undo(border_no)
			{
			
				document.getElementById("border_"+border_no).style.borderColor="black";
			
			
			
			}
		
			function show_information(info)
			{
				x=event.screenX;
				y=event.screenY+window.pageYOffset;
		
				document.getElementById("more_information").innerHTML=""+info;
				document.getElementById("more_information").style.left=x+"px";
				document.getElementById("more_information").style.top=y-50+"px";
				//document.getElementById("more_information").innerHTML="x="+x+" y= "+y;
			
			}
			
			
			function hide_information()
			{
				document.getElementById("more_information").innerHTML="";
			
			}
		
			function change_border(x){
				x.style.border = "2px solid red";
			}
		
			function orginal_border(x){
				x.style.border = "1px solid black";
			}
			
			
		</script>
	
	
	


<script>
function myFunction1() {
    alert("veg item\n1.paneer\n2.paneer masala\n3.veg byrani");
}
function myFunction2() {
    alert(" Non-Veg Item\n1.Chicken\n2.Chicken masala\n3.Chicken byrani\n3.Chicken Kabab");
}
</script>
</head>
<body style="background-color:white	">

<div style="position:fixed;margin-left:-8px;">
	<img src="1/left.png"  height="100%">

</div>


<div style="position:fixed;margin-left:66%;">
	<img src="1/right.png"  height="100%">

</div>

<div style="position:absolute;top:190;left:330;background-color:white;"  >
	<table border="3" style="border-color:black;border-style:solid;"width="740" height="660" >				
		<tr>
			<td></td>
			
		</tr>
	
	</table>				
	
</div>


<div style="position:absolute;top:20;left:30;">
	<img src="logo.png" width="200"  >
	
</div>


<div style="position:absolute;top:90;left:330;font-size:34;font-family:'Monotype Corsiva';color:#00a651;">
	<p style="background-color:#00a651;color:#ffcb08;font-size:38;padding-right:640;" width="1024"><b>FOOD</b></p>			
</div>


<div style="position:absolute;top:210;left:350;" onmouseover="highlight(1)" onmouseout="highlight_undo(1)">
	<table border="3" style="border-color:black;border-style:solid;"width="700" height="160" id="border_1">
		<tr>
			<td width="140">
				<div style="position:absolute;top:10;left:10;" >
					<img src="1.jpg" width="130"  >
					<img src="stars.jpg" height="20" width="80" style="position:absolute;top:130;left:5;" >
				</div>
			</td>
			
			<td width="430" >
				<table border="0" style="border-color:black;border-style:dotted;border-left-width:0;border-right-width:0;border-top-width:0;border-bottom-width:0;" height="160" width="430">
					<tr height="50" >
						<td >
							<img style="padding-left:10;padding-right:10;" src="menu.png" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('')">
							<img style="padding-left:10;padding-right:10;"src="Time.jpg" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('From 9:30 am to 10:30 pm')">
							<img style="padding-left:10;padding-right:10;"src="homedelivery.png" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('Within 1km radius')">
							<img style="padding-left:10;padding-right:10;"src="photo.gif" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('Gallery')">
							<img style="padding-left:10;padding-right:10;" src="contact_us.png" height="55" width="55"onmouseout="hide_information()" onmousemove="show_information('93432653998')">
							<img src="pixel.jpg" height="3" width="433" style="position:absolute;top:75;left:152;" >
						</td>
					</tr>
					
					<tr>
						<td>
							<img style="padding-left:10;" src="cost.jpg" width="65" height="60" onmouseout="hide_information()" onmousemove="show_information('Cost for 2')">
						 </td>
					</tr>
				</table>
			</td>
			
			<td>
				<div style="position:absolute;top:40;left:593;" >
					<img src="discount.png" height="75" width="100" onmouseout="hide_information()" onmousemove="show_information('40 % discount')">
				</div>
			</td>
		
		</tr>
	</table>
</div >


<div style="position:absolute;top:410;left:350;" onmouseover="highlight(2)" onmouseout="highlight_undo(2)">
	<table border="3" style="border-color:black;border-style:solid;"width="700" height="160" id="border_2">
		<tr>
			<td width="140">
				<div style="position:absolute;top:10;left:10;" >
					<img src="2.jpg" width="130"  >
					<img src="stars.jpg" height="20" width="80" style="position:absolute;top:130;left:5;" >
				</div>
			</td>
			
			<td width="430" >
				<table border="0" style="border-color:black;border-style:dotted;border-left-width:0;border-right-width:0;border-top-width:0;border-bottom-width:0;" height="160" width="430">
					<tr height="50" >
						<td >
							<img style="padding-left:10;padding-right:10;" src="menu.png" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('')">
							<img style="padding-left:10;padding-right:10;"src="Time.jpg" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('From 9:30 am to 10:30 pm')">
							<img style="padding-left:10;padding-right:10;"src="homedelivery.png" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('Within 1km radius')">
							<img style="padding-left:10;padding-right:10;"src="photo.gif" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('Gallery')">
							<img style="padding-left:10;padding-right:10;" src="contact_us.png" height="55" width="55"onmouseout="hide_information()" onmousemove="show_information('93432653998')">
							<img src="pixel.jpg" height="3" width="433" style="position:absolute;top:75;left:152;" >
						</td>
					</tr>
					
					<tr>
						<td>
							<img style="padding-left:10;" src="cost.jpg" width="65" height="60" onmouseout="hide_information()" onmousemove="show_information('Cost for 2')">
						 </td>
					</tr>
				</table>
			</td>
			
			<td>
				<div style="position:absolute;top:40;left:593;" >
					<img src="discount.png" height="75" width="100" onmouseout="hide_information()" onmousemove="show_information('40 % discount')">
				</div>
			</td>
		
		</tr>
	</table>
</div >


<div style="position:absolute;top:610;left:350;">
	<table border="3" style="border-color:black;border-style:solid;"width="700" height="160" id="border_3" onmouseover="highlight(3)" onmouseout="highlight_undo(3)">
		<tr>
			<td width="140">
				<div style="position:absolute;top:10;left:10;" >
					<img src="3.jpg" width="130"  >
					<img src="stars.jpg" height="20" width="80" style="position:absolute;top:130;left:5;" >
				</div>
			</td>
			
			<td width="430" >
				<table border="0" style="border-color:black;border-style:dotted;border-left-width:0;border-right-width:0;border-top-width:0;border-bottom-width:0;" height="160" width="430">
					<tr height="50" >
						<td >
							<img style="padding-left:10;padding-right:10;" src="menu.png" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('')">
							<img style="padding-left:10;padding-right:10;"src="Time.jpg" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('From 9:30 am to 10:30 pm')">
							<img style="padding-left:10;padding-right:10;"src="homedelivery.png" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('Within 1km radius')">
							<img style="padding-left:10;padding-right:10;"src="photo.gif" width="55" height="50" onmouseout="hide_information()" onmousemove="show_information('Gallery')">
							<img style="padding-left:10;padding-right:10;" src="contact_us.png" height="55" width="55"onmouseout="hide_information()" onmousemove="show_information('93432653998')">
							<img src="pixel.jpg" height="3" width="433" style="position:absolute;top:75;left:152;" >
						</td>
					</tr>
					
					<tr>
						<td>
							<img style="padding-left:10;" src="cost.jpg" width="65" height="60" onmouseout="hide_information()" onmousemove="show_information('Cost for 2')">
								
						 </td>
					</tr>
				</table>
			</td>
			
			<td>
				<div style="position:absolute;top:40;left:593;" >
					<img src="discount.png" height="75" width="100" onmouseout="hide_information()" onmousemove="show_information('40 % discount')">
				</div>
			</td>
		
		</tr>
	</table>
</div >
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
	</div>

<div style="position:absolute;top:0;left:0;background-color:white;" width="100%" >
				<pre style="background-color:#ffcb08;font-family:'Times New Roman';"  width="100%" id="more_information"></pre>				
</div>


<div style="position:absolute;top:300;left:600;">
	<p >Approx cost for 2 person's=Rs. 600</p>			
</div>

<div style="position:absolute;top:500;left:600;">
	<p >Approx cost for 2 person's=Rs. 600</p>			
</div>

<div style="position:absolute;top:700;left:600;">
	<p >Approx cost for 2 person's=Rs. 600</p>			
</div>






			
</body><br/>


</html>