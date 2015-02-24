<style type="text/css">
.captcha{
background:#19467f;
text-align:center;
width:120px;
height:35px;
font-size:20px;
font-weight:bold;
border:none;
letter-spacing:5px;
color:#CCCCCC;
}
.refresh{
background:none;
border:none;
color:#0000CC;
font-weight:600;
}
</style>

<form enctype="multipart/form-data" onclick="reload();" method="post">
<?php
function randLetter()
{
    $int = rand(0,54);
    $a_z = "abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789";
    $rand_letter = $a_z[$int];
    return $rand_letter;
}
echo "<input type='text' class='captcha' name='cap' id='cap' value='";
for($i=1;$i<=6;$i++){
echo randLetter();
}
echo "' disabled>";
?>
<br />Can't read the image?click
<input type="submit" value="here" onclick="reload();" class="refresh"/>
</form>
