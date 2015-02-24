<head>
  <meta charset="utf-8">
  <title>jQuery UI Accordion - Fill space</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #accordion-resizer {
    padding: 20px;
    width: 550px;
    height: 400px;
  }
  </style>
  <script>
  $(function() {
    $( "#accordion" ).accordion({
      heightStyle: "fill"
    });
  });
  $(function() {
    $( "#accordion-resizer" ).resizable({
      minHeight: 140,
      minWidth: 200,
      resize: function() {
        $( "#accordion" ).accordion( "refresh" );
      }
    });
  });
  </script>
</head>
<body>
 <table>
 <tr>
 <td>
<h3 class="docs"></h3>
 
<div id="accordion-resizer" class="ui-widget-content">
  <div id="accordion">
    <h3>Address</h3>
    <div>
      <p>BigPerl Solutions Pvt. Ltd </p>
	 <p> Golden square prime business</p>
	 <p>centerDavanam Sarovar</p>
	 <p>Portico Suites, Hosur Main Road,</p>
	 <p>Bangalore - 560068</p>
    <p> Fax : +91-9019118266 </p>
    </div>
    <h3>Google Map</h3>
    <div>
      <table>
	  <tr>
<iframe width="390" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps?near=Hoysala+Circle+Bus+Stop+%4012.923821,77.484925&amp;geocode=&amp;q=Titan+Showroom&amp;f=l&amp;hl=en&amp;dq=bigpearl+loc:+RAYSITI+Animations,+Old+Outer+Ring+Road,+Gnanabharathi,+Stage+II,+Kengeri+Satellite+Town,+Bangalore,+Karnataka+560060&amp;sll=12.925361,77.485606&amp;sspn=0.006295,0.006295&amp;ie=UTF8&amp;hq=Titan+Showroom&amp;hnear=&amp;ll=12.925361,77.485606&amp;spn=0.050947,0.084543&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4581672443215855221&amp;output=embed"></iframe><br /><small><a href="https://www.google.co.in/maps?near=Hoysala+Circle+Bus+Stop+%4012.923821,77.484925&amp;geocode=&amp;q=Titan+Showroom&amp;f=l&amp;hl=en&amp;dq=bigpearl+loc:+RAYSITI+Animations,+Old+Outer+Ring+Road,+Gnanabharathi,+Stage+II,+Kengeri+Satellite+Town,+Bangalore,+Karnataka+560060&amp;sll=12.925361,77.485606&amp;sspn=0.006295,0.006295&amp;ie=UTF8&amp;hq=Titan+Showroom&amp;hnear=&amp;ll=12.925361,77.485606&amp;spn=0.050947,0.084543&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4581672443215855221&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</tr>
	  </table>
    </div>
    <h3>Contact No</h3>
    <div>
      <p> 8095612317 </p>
     
    </div>
 
  </div>
</div>
</td>
<td valign="top">
<?php include 'mai.php' ?>
</td>
 </tr>
 </table>
 
</body>
</html>