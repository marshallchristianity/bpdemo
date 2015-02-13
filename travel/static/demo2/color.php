<html><head></head> <body> <script language="JavaScript"> function colors(col) { switch(col) { case 'red': document.bgColor="#FF0000"; break; case 'green': document.bgColor="#00FF00"; break; case 'blue': document.bgColor="#0000FF"; break; } } </script> 
<form name=”form1” method=”post” action=””> <p> <label> <input type="radio" name=”Colors” value=”radio” onClick="colors('red')"> Red</label> <br> <label> <input type="radio" name=”Colors” value=”radio” onClick="colors('green')"> Green</label> <br> <label> <input type="radio" name=”Colors” value=”radio” onClick="colors('blue')"> Blue</label> <br> </p> 
</form> </body></html>

