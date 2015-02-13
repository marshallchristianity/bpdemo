<?php
error_reporting(0);
$connect = mysql_connect('localhost','root','');
if (!$connect)
{
   die('Could not <span id="IL_AD1" class="IL_AD">
    connect to</span> MySQL: ' . mysql_error());
}
if(isset($_POST['file_upload']) && $_FILES['import']['name'] != ""){
$sssss = explode(".", $_FILES['import']['name']);

if($sssss[1] == 'csv'){
$image_file=rand().$_FILES['import']['name'];

$image_path='csvfiles/'.$image_file;

$temp=$_FILES['import']['tmp_name'];

copy($temp,$image_path);


$cid =mysql_select_db('bigperlt_bpearl',$connect); //specify db name
fopen($_FILES["import"]["tmp_name"], 'r');
define('CSV_PATH','C:/wamp/www/crm_demo/csvfiles/'); // specify CSV file path

$csv_file = CSV_PATH . $image_file; // Name of your CSV file
$csvfile = fopen($csv_file, 'r');

$columns = fgets($csvfile);
$res1 =explode(',',$columns);
$res = array_shift($res1);
$columns = implode(',',$res1);
$i = 0;
$csv_array = array();
while (!feof($csvfile))
{
   $csv_data[] = fgets($csvfile, 1024);
   $csv_array = explode(",", $csv_data[$i]);
   $insert_csv = array();
    $insert_csv['name'] = $csv_array[1];
    $insert_csv['dob'] = $csv_array[2];
	$insert_csv['email'] = $csv_array[3];
	$insert_csv['contact'] = $csv_array[4];
	$insert_csv['location'] = $csv_array[5];
	$insert_csv['work_exp'] = $csv_array[6];
	$insert_csv['current_industry'] = $csv_array[10];
	$insert_csv['current_company'] = $csv_array[11];
	$insert_csv['highest_edu_level'] = $csv_array[13];
	$insert_csv['highest_edu_stream'] = $csv_array[14];
	$insert_csv['highest_edu_inst'] = $csv_array[15];
	$insert_csv['resume'] = $csv_array[20];
	
   $res = implode(',', $insert_csv);
  
   
   $res1 = str_replace(',',"',",$res);
   $values = str_replace(',',",'",$res1);

   $query = "INSERT INTO `shinedata`(`name`,`dob`, `email`, `contact`,`location`, `work_exp`, `current_industry`, `current_company`, `highest_edu_level`, `highest_edu_stream`, `highest_edu_inst`,`resume`)
     VALUES('".$values."')";
   $n=mysql_query($query, $connect);
   $i++;
}

fclose($csvfile);
mysql_close($connect); // closing connection
header("location:shine.php?id=3");
}else{
header("location:shine.php?id=3&status=wrong_extension");
}
}else{
header("location:shine.php?id=3&status=failed");
}
?>