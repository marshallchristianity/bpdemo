<?php include("includes/header.php"); ?>
<style>
.container{overflow:auto !important;}
.routelayout{width: 924px;
margin-top:20px;}
.w4{width:165px;margin-right:11px;height:120px;float:left;margin-bottom:10px;border: 2px solid #fff;
box-shadow: 0px 0px 3px #000;}
</style>
<section class="box" style="overflow:auto;">
<?php 
$sqls = mysqli_query($con, "select * from gallery group by type"); 
while($res = mysqli_fetch_array($sqls)) { 
$type  = $res['type'];

$sql1 = mysqli_query($con, "select * from gallery where type= '".$type."'"); 
$rse = mysqli_query($con , "select * from services where name ='".$type."'");
$rs = mysqli_fetch_array($rse);
?>
<div class="routelayout">
<h1><?php echo $type; ?></h1><br/>
<?php while($images =mysqli_fetch_array($sql1)){
if($rs['id'] != ''){
$url = "services_details?id=".$rs['id'];
}else{
$url = '';
}
 ?>

<div class="w4"><a href="<?php echo $url; ?>"><img src="gallery/<?php echo $images['image']; ?>" width="165px" height="120px;"></a></div>
<?php } ?> 
</div>
<div style="clear:both;"></div>
<?php }?>
</section>				
<?php include("includes/footer.php"); ?>