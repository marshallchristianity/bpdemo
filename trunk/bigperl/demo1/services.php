
<?php
include "include/header.php";

 include"include/db.php"; ?>	
<div class="container" style="padding-bottom: 50px">
<div class="row">
<h3 class="mbt">Services</h3>
<table width=100%  cellspacing=20px cellpadding=20px style="border:1px;">

<?php
$i=0;
$result=mysql_query("select * from services");
	while($row=mysql_fetch_array($result))
	{
	if($i==0 || $i % 3 ==0)
	echo "</tr><tr><td width=33% >";
	else
	echo "<td width=33%>";
	
	// choosing circle color
	$color=array('seo','dev','design','email','web','ecom');
	if($i > 5)
	$j=0;
	else
	$j=$i;
?>
<div style="width:90%;">
<div>

<div class="img icon">
<a href=""><div class="circle <?php echo $color[$j]; ?>"><img alt="" src="images/<?php echo $row['image']; ?>"></div></a>
</div>
</div>

<div ><!-- Title and meta -->
<h5><a><?php echo $row['name'];?></a></h5>

<?php
 echo htmlspecialchars_decode(stripslashes($row['description']));
?>

</div>
</div>

<div class="clearfix">&nbsp;</div>
</div>
<?php
$i++;
	echo "</td>";
}
?>
</table>

<div class="recent-posts">
<div class="container">
<div class="row">
<div class="span12">


<div class="clearfix">&nbsp;</div>
</div>
</div>
</div>
</div>
