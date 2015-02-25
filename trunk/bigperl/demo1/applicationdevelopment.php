
<?php
include "include/header.php";

 include"include/db.php"; ?>	
<div class="container" style="padding-bottom: 50px">
<div class="row">
<div class="span12">
<?php
$result=mysql_query("select * from pagescontent where id='".$_GET['id']."'");
while($row=mysql_fetch_array($result))
{
?>
<div> <img src ="images/<?php echo $row['image']; ?>" width=100% height=300></div>
<br/><br/>
        <h3 class="title"><?php 
		
		echo $row['pagetitle'];  ?></h3>
       <p>
	   <?php echo $row['pagecontent']; ?>
	   </p>
    
      
		
		
<?php
}
?>
</div>

 

<br />

<div class="recent-posts">
<div class="container">
<div class="row">
<div class="span12">


<div class="clearfix">&nbsp;</div>
</div>
</div>
</div>
</div>
