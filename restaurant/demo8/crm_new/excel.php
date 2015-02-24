<?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.
  include "db.php";
  if(isset($_GET['check']) && isset($_GET['value']))
    $sql=$_GET['query']." where ".$_GET['check']." like '".$_GET['value']."%'";
   else
   $sql=$_GET['query'];
  $i=0;
  $result=mysql_query($sql);
while($row=mysql_fetch_array($result))
		{
		 $data[$i]['Id']=$row['id'];
		 $data[$i]['Name']=$row['name'];
		 $data[$i]['Email']=$row['email'];
		 $data[$i]['Dob']=$row['dob'];
		 $data[$i]['Sex']=$row['sex'];
		 $data[$i]['Phone']=$row['phone'];
		 $data[$i]['Course']=$row['course'];
		 $data[$i]['Degree']=$row['degree'];
		 $data[$i]['Maritial Status']=$row['maritial'];
		 $data[$i]['Fee']=$row['fee'];
		 $data[$i]['Tax']=$row['tax'];
		 $data[$i]['Total']=$row['total'];
		 $data[$i]['Paid Date']=$row['paidDate'];
		 $data[$i]['Due Amount']=$row['dueAmount'];
		 $i++;
		
		}
 

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // file name for download
  $filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\n";
      $flag = true;
    }
    array_walk($row, 'cleanData');
    echo implode("\t", array_values($row)) . "\n";
  }

  exit;
?>