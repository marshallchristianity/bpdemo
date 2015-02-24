<html>
	<head>
	
	
		<style>
		#more_information{position:absolute;top:0;left:0;}
		
		</style>
	
		<script>
		
		var info="";
		var x;
		var y;
		
			function show_information(info)
			{
				x=event.screenX;
				y=event.screenY;
		
				document.getElementById("more_information").innerHTML=""+info;
				document.getElementById("more_information").style.left=x+"px";
				document.getElementById("more_information").style.top=y-50+"px";
				//document.getElementById("more_information").innerHTML="x="+x+" y= "+y;
			
			}
			
			
			function hide_information()
			{
				document.getElementById("more_information").innerHTML="";
			
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
	
	
		<body>
			<br/><br/><br/><br/><br/><br/>
			<div style="position:absolute;top:10;left:10;">
				
				<img src="1.jpg">
				
					<div style="position:absolute;top:263;left:0;" >
				    <!--<button onclick="myFunction1()"  style="margin-top: 12;width: 208;height: 42;background-color: slategray;">VEG</button> -->
					<!--	<pre style="color:white;font-size:25;background-color:orange;font-family:Calibri;">               Veg              </pre> -->
					 <img src="veg.jpg" width="40%" height="50%">	
					</div>
					
					<div style="position:absolute;top:263;left:214;" >
					<button onclick="myFunction2()" style="margin-top: 12;width: 201;height: 42;margin-left: -6;background-color: slategray;">NON VEG</button>
					<!--	<pre style="color:white;font-size:25;background-color:orange;font-family:Calibri;">         Non-Veg         </pre> -->
					</div>
			
			
			</div >
		
		
			<div style="position:absolute;top:0;left:429;">
				<pre style="color:white;font-size:22;background-color:orange;font-family:Georgia;" onmouseout="hide_information()" onmousemove="show_information('More information about Menu Button')">  Menu Button  </pre>			
			</div>
			
			<div style="position:absolute;top:0;left:582;">
				<pre style="color:white;font-size:22;background-color:orange;font-family:Georgia;" onmouseout="hide_information()" onmousemove="show_information('More information about timings')">  Timing  </pre>			
			</div>
			
			<div style="position:absolute;top:0;left:674;">
				<pre style="color:white;font-size:22;background-color:orange;font-family:Georgia;" onmouseout="hide_information()" onmousemove="show_information('More information about Home delivery')">  Home delivery  </pre>			
			</div>
			
			<div style="position:absolute;top:0;left:840;">
				<pre style="color:white;font-size:22;background-color:orange;font-family:Georgia;" onmouseout="hide_information()" onmousemove="show_information('More information about Photo')">  Photo   </pre>			
			</div>
			
			<div style="position:absolute;top:0;left:926;">
				<pre style="color:white;font-size:22;background-color:orange;font-family:Georgia;"  onmouseout="hide_information()" onmousemove="show_information('More information about Contact Us ')">  Contact Us   </pre>			
			</div>
			
			<div style="position:absolute;top:0;left:1062;">
				<pre style="color:white;font-size:22;background-color:orange;font-family:Georgia;" onmouseout="hide_information()" onmousemove="show_information('hi Discount')">  Discount   </pre>			
			</div>
			-->
			
			<div style="position:absolute;top:150;left:687;">
				<pre style="color:white;font-size:22;background-color:orange;font-family:Georgia;" >  Cost for 2   </pre>			
			</div>
			
			
			<div style="position:absolute;top:0;left:0;">
				<p id="more_information"></p>			
			</div>
			
			<div style="position:absolute;top:330;left:10;" >
					<img src="stars.jpg" height="40">
			</div>
				
		
		</body>



</html>