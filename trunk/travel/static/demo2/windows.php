<!DOCTYPE html>
<html>
<body>



<button onclick="openWin()">google</button>
<button onclick="bigperl()">bigperl</button>
<button onclick="Travel()">Travel</button>
<script>
var myWindow;

function openWin() {
    myWindow = window.open("http://www.google.com/", "", "width=500, height=500");
	
	
}
function bigperl() {
    myWindow = window.open("http://www.bigperl.com/", "", "width=500, height=500");
	
	
}

function Travel() {
    myWindow = window.open(" http://www.grabwebs.com/bigperl2/BigPerl/", "", "width=500, height=500");
	
	
}
function resizeWin() {
    myWindow.resizeTo(250, 250);
    myWindow.focus();
}
</script>

</body>
</html>