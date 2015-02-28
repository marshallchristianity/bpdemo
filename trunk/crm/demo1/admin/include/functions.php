<?php

	function get_table_data($tablename,$where=null)
	{
		if($where==null)
		{
			 $query="select * from ".$tablename." ";
		}else{
			
			$tb_col=array_keys($where);
			$tb_value=array_values($where);
			$query_values='';
			for($i=0;$i<count($tb_col);$i++){
				
				 if(count($tb_col)>1){
				  $query_values.=$tb_col[$i]."='".$tb_value[$i]."' and ";
				 }else{
					$query_values.=$tb_col[$i]."='".$tb_value[$i]."'";
				 }
			}
			if(count($tb_col)>1){
			   $query="select * from ".$tablename." where ".trim($query_values," and ");
			 }else{
				 $query="select * from ".$tablename." where ".$query_values;
			 }
		}
		$res=mysqli_query($db_connect,$query);
		if(mysql_num_rows($res)!==0){ 
			while($row=mysqli_fetch_array($res)){
				$value[]=$row;
			}
			return $value;
		}
	}
	
	function db_insert($table_name,$value)
	{
		$db_connect = mysqli_connect('localhost', 'bigperluser','bigperlpwd','bigperldb');
		if(!$db_connect){
		die("could not connect".mysql_error());
		}
		$table_col=array_keys($value);
		
		$table_value=array_values($value);
		$columns=implode("`,`",$table_col);
		
		$column_values=implode("','",$table_value);
		$tablevalue="insert into ".$table_name."(`$columns`) values('$column_values')";
		//echo $tablevalue; exit;
		$insert_data= mysqli_query($db_connect, $tablevalue);
		//echo $insert_data; exit;
		
	}				
	function db_update($table_name,$value,$unique_id)
	{	
		$db_connect = mysqli_connect('localhost', 'bigperluser','bigperlpwd','bigperldb');
		if(!$db_connect){
		die("could not connect".mysql_error());
		}
		$unique_key=array_keys($unique_id);		
		$unique_value=array_values($unique_id);	
		
		$table_col=array_keys($value);			
		$table_value=array_values($value);	
		$count=count($table_col);		
		for($i=0;$i<count($table_col);$i++)		
		{		
			$update_list[$i]=$table_col[$i]."='".$table_value[$i]."'";	
		}		
		$list=implode(",",$update_list);
		 $tablevalue="update  ".$table_name." set ".$list." where ".$unique_key[0]." = ".$unique_value[0];
		 
		mysqli_query($db_connect, $tablevalue);	
	}
	
	function deleterow($table_name,$value)
	{
		$db_connect = mysqli_connect("localhost",'bigperluser','bigperlpwd','bigperldb');
		if(!$db_connect){
		die("could not connect".mysql_error());
		}
		$table_col=array_keys($value);
		$table_value=array_values($value);
		$delete='';		
		for($i=0;$i<count($table_col);$i++)		
		{	
			   $delete.="delete from ".$table_name." where ".$table_col[$i]."='".$table_value[$i]."'";
		}
	$res= mysqli_query($db_connect, $delete);
	return $res;
	}
	
	function get_join($table,$joins='',$join_table_to='',$limit_start='',$limit_end='',$where=''){
		$join_table='';
		$join='';
		$joinings='';
		
		for($i=0;$i<count($joins);$i++){
			$join_table.="t".$i.".*".",";
			$joinings.=$joins[$i]." as t".$i.",";
		}
		$join_key=array_keys($join_table_to);
		$join_values=array_values($join_table_to);
		for($j=0;$j<count($join_key);$j++){
			
			 $join.=" t.".$join_key[$j]."=t".$j.".".$join_values[$j]." and";
		}
		if($where){	
			$tb_col=array_keys($where);
			$tb_value=array_values($where);
			$query_values='';
			for($i=0;$i<count($tb_col);$i++){
				
				 $query_values.=$tb_col[$i]."='".$tb_value[$i]."' and ";
			}
			$where_value=$join." ".trim($query_values,' and');
		}else{
			$where_value=trim($join,"and");
		}
		 $query = "select t.*,".trim($join_table,",")." from ".$table." as t,".trim($joinings,",")." where ".$where_value;
		$res=mysqli_query($db_connect, $query);
		if(mysql_num_rows($res)!==0){ 
			while($row=mysqli_fetch_array($res)){
				$value[]=$row;
			}
			return $value;
		}
	}
	
	
?>