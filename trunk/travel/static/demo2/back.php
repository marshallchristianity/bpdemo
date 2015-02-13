

<!DOCTYPE html>
<html>
<head>
<style>
div
{
width: 100%;
height: 1000px;
border: 1px solid black;
}
</style>
</head>
<body>

<h1>Hello World!</h1>

<div id="myDiv">This is a div element.</div>
<br>
 <img src="AstorMueller.jpg" width="8%" height="8%" onclick="myFunction()">
 <img src="AstorMueller.jpg" width="8%" height="8%" onclick="myFunctions()">
<script>
function myFunction()
{
document.getElementById("myDiv").style.backgroundImage="url('3.jpg')";
}
function myFunctions()
{
document.getElementById("myDiv").style.backgroundImage="url('AstorMueller_E6V7427.jpg')";
}
</script>

</body>
</html>
