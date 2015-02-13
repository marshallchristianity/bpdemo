<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js" type="text/javascript"></script>

     <script src="js/farbtastic.js" type="text/javascript"></script>

     

	<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/themes/ui-lightness/jquery-ui.css" media = "all"/>

     <link rel="stylesheet" href="css/farbtastic.css" type="text/css" />

     <style type="text/css">

     #red .ui-slider-range,#red .ui-slider-handle{

		background: #ef2929;

	}

	#green .ui-slider-range,#green .ui-slider-handle{

		background: #8ae234;

	}

	#blue .ui-slider-range,#blue .ui-slider-handle{

		background: #729fcf;

	}

	#swatch{

		width: 900px;

		height:600px;

		background-image:none;

		float:right;

		margin:6px 20px 0px 0px;

		border:none;

		background-color:sky;

	}

	#sliders{

		width:100px;

	}

	#colorpicker{

		float:right;

		margin:0px 0px 0px 20px;

	}

	#red,#green,#blue{

		margin:10px 0px 0px 0px;

	}

	#innerswatch{

		font:bold 24px arial;

		margin:75px 0px 0px 0px;

		text-align:center;

		color:white;

	}

	</style>

     <script type = "text/javascript">

     	$(document).ready(function(){

			var colorPicker = $.farbtastic("#colorpicker");

			colorPicker.linkTo(pickerUpdate);

			$("#red,#green,#blue").slider({

				orientation:"horizontal",

				range:"min",

				max:255,

				slide:sliderUpdate

			});

			function sliderUpdate() {

				var red=$("#red").slider("value");

				var green=$("#green").slider("value");

				var blue=$("#blue").slider("value");

				var hex=hexFromRGB(red,green,blue);

				colorPicker.setColor("#"+hex);

			}	

			function hexFromRGB(r,g,b){

				var hex = [r.toString(16),g.toString(16),b.toString(16)];

				$.each(hex,function(nr,val){

					if(val.length===1){

						hex[nr]="0"+val;

					}

				});

				return hex.join("").toUpperCase();

			}

			function pickerUpdate(color){

				$("#swatch").css("background-color",color);

				if(colorPicker.hsl[2]>0.5){

               		$("#innerswatch").css("color","#000000");     

          		}

          		else{

               		$("#innerswatch").css("color","#ffffff");   

          		}

				$("#innerswatch").html(color.toUpperCase())

				var red = parseInt(color.substring(1,3),16);

				var green = parseInt(color.substring(3,5),16);

				var blue = parseInt(color.substring(5,7),16);	

				$("#red").slider("value",red);

				$("#green").slider("value",green);

				$("#blue").slider("value",blue);		

			}

		});

     </script>

<head>

 
<body>

<?php include 'top.php' ?>

<?php include 'header.php' ?>
<?php include 'menu.php' ?>

<table border="1"> 
<div id="colorpicker" width="50%">
		<div style = "clear:both" width="4%"></div>

		<div id="red"></div>

		<div id="green"></div>

		<div id="blue"></div>
</div>
</table>

         <div id="swatch" class="ui-widget-content ui-corner-all" width="30%" height="90%" align="left">
         <table  height="100%" align="center" style="padding-left:30px;">
	 	

			<!--<div id="innerswatch">sddfafasfasfa</div>-->
          <h1>Welocme to bigperl</h1>
		   
		  Welcome to our bigper template
		  Welcome to our bigper template
		  Welcome to our bigper templateWelcome to our bigper templateWelcomeWelcome to our bigper template
		  Welcome to our bigper template
		  Welcome to our bigper template
		  Welcome to our bigper template
		  sdfgsdgsdgs dfgdfgfdg sdfgdgsdgsd
		   <td>
		   <img src="AstorMueller.jpg" width="40%" height="30%">
		   </td>
		
	
		</table>
		</div>
	<?php include 'top.php' ?>	
</body>

</html>