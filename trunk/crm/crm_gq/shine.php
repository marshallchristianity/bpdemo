<!DOCTYPE HTML>
<html>
<head>
<title>Shine information</title>
<link rel='stylesheet' href='css/jquery-ui-custom.css'/>
<link rel='stylesheet' href='css/ui.jqgrid.css'/>


<script src='js/jquery-1.9.0.min.js'></script>
<script src='js/grid.locale-en.js'></script>
<script src='js/jquery.jqGrid.min.js'></script>


<style>
@font-face{font-family: Lobster;src: url('css/Lobster.otf');}
body{width:100%;padding:0px;margin:0px;}
.wrapper{ margin: 20px 0 0 250px;}
.cvteste{color:#000;font-size:12px;font-family:verdana}
h1{text-align:center;font-family: Lobster;}
.ui-widget-content {margin-left:-85px;}
.ui-widget{font-family:Arial; color:#fff;}
.ui-jqgrid .ui-jqgrid-hdiv {height:25px;}
.ui-jqgrid tr.jqgrow td{height:40px;}
.ui-jqgrid .ui-jqgrid-pager {height:40px;}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
  background: #4297d7;font-weight: bold;color:#000;font-size:13px;border: 1px solid #4297d7;}
.ui-widget-content{border: 1px solid #4297d7;}
.txt{width:250px;height:30px;border-radius:5px;border: 1px solid #4297d7;}
.myAltRowClass { background-color: #DDDDDC; background-image: none; }
#editlogo {
  background-image: url(images/file_edit.png);
  background-repeat: no-repeat;
  display: block;
  margin: 0 auto;
  text-indent: -9999px;
  width: 20px;
  height: 20px;
}
.header{
margin-top: -20px !important;
width: 1100px;
margin: 0 auto;
}
</style>

</head>
<body>
	<div class="header">
		<img src="images/logo.png">
		<?php include('menu.php'); ?>
	</div>
  <h1>SHINE INFORMATION</h1>
  
  <div style='padding:20px 0 0 370px;'> Search : 
  <input type="text" id="item" onkeydown="doSearch(arguments[0]||event)" placeholder='name' class='txt'/>
  <input type="text" id="empid" onkeydown="doSearch(arguments[0]||event)" placeholder='Location' class='txt'/>

  </div>
  
	<div style='width:830px;margin:0 auto;margin-top:20px;'>
		<form action="export.php" method="post" enctype="multipart/form-data" id="export_form" name="mail_form">
		<input type="file" name="import" id="import">
		<input type="submit" value="upload" name="file_upload">
		<?php if(isset($_GET['status']) && $_GET['status'] == 'failed'){ ?>
		<span style="color:red;"><?php echo "please upload the file"; ?></span>
		<?php } 
		else if(isset($_GET['status']) && $_GET['status'] == 'wrong_extension'){?>
		<span style="color:red;"><?php echo "only .csv files are allowed"; ?></span>
		<?php }else{ ?>
		<span style="color:red;"></span>
		<?php } ?>
		</form>
		<div style="float:right;">
		<a href="admin/student.php?data=shine_data">Shine Register</a>
		<input type="submit" id="delete" name="delete" value="delete">
		<input type="submit" id="mail" name="send_mail" value="send mail"></div>
	</div>
  <div class='wrapper' style="margin-bottom:20px;">
	<table id="rowed2"></table> 
	<div id="prowed2"></div>
  </div>
	
	<script>
$(function () {		
	var selectedRows = {};
	 var agentsGrid = jQuery("#rowed2");
	agentsGrid.jqGrid({
   	url:'server.php',
	datatype: "json",
	altRows:true,
	altclass:'myAltRowClass',
	 multiselect:true,
   	 colNames:['ID','NAME', 'EMAIl','PHONE', 'BIRTH DATE','LOCATION','WORK EXP','RESUME','ACTIONS'], 
	   colModel:[ 
	   {name:'id',index:'id', width:80,classes: 'cvteste'}, 
	   {name:'name',index:'name', width:100,classes: 'cvteste',editable:true}, 
	   {name:'email',index:'email', width:150,classes: 'cvteste',editable:true},
	   {name:'phone',index:'phone', width:100,classes: 'cvteste',editable:true},
	   {name:'dob',index:'dob', width:100,align:"center",classes: 'cvteste',editable:true},
       {name:'location',index:'location', width:140, sortable:false,classes: 'cvteste',editable:true},
	   {name:'work_exp',index:'work_exp', width:100, sortable:false,classes: 'cvteste',editable:true},
	   {name:'resume',index:'resume', width:150, sortable:false,classes: 'cvteste',editable:true},
       {name:'act',index:'act', width:50,sortable:false}	   
	   ],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#prowed2',
   	sortname: 'id',
    viewrecords: true,
	height:'100%',
    sortorder: "asc",
	onSelectAll: function (rowIds, status) {
		if (status === true) {
			for (var i = 0; i < rowIds.length; i++) {
				selectedRows[rowIds[i]] = true;
			}
		} else {
			for (var i = 0; i < rowIds.length; i++) {
				delete selectedRows[rowIds[i]];
			}
		}
	},
	onSelectRow: function (rowId, status, e) {
		if (status === false) {
			delete selectedRows[rowId];
		} else {
			selectedRows[rowId] = status;
		}

	},
	gridComplete: function(){
		$("tr.jqgrow:odd").css("background", "#DDDDDC");
		for (var rowId in selectedRows) {
			agentsGrid.setSelection(rowId, true);
		}
		
		var ids = jQuery("#rowed2").jqGrid('getDataIDs');
		
		for(var i=0;i<ids.length;i++){
			var cl = ids[i];
			be = "<a href='admin/student.php?data=editshine&page="+cl+"' id='editlogo'>EDIT</a>"; 
			 
			jQuery("#rowed2").jqGrid('setRowData',ids[i],{act:be});
		}	
	},
	editurl: "update.php"
	
});
$("#delete").click(function(){
	var res = [];
	for (var rowId in selectedRows) {
	 res.push(rowId); 
	}
	if(res == ''){
	alert("please select the list");
	return false;
	}
	var json_ids = JSON.stringify(res, null);
	$.post('delete.php?table=shinedata', {
            val1 : json_ids,
        }, function(response){
			location.reload();
        });   
});
$("#mail").click(function(){
	var res = [];
	for (var rowId in selectedRows) {
	 res.push(rowId); 
	}
	if(res == ''){
	alert("please select the list");
	return false;
	}
	var json_ids = JSON.stringify(res, null);
	var redirectUrl = "mail.php";
var form = $('<form action="' + redirectUrl + '" method="post" id="mail_form" name="mail_form">' +
'<input type="hidden" name="values" value="' + res + '" />' +
'<input type="hidden" name="table" value="shinedata" />' +
'</form>');
$('body').append(form);
$(form).submit();
});		
});
var timeoutHnd; 
var flAuto = true;
 function doSearch(ev){ 
 if(!flAuto)return; 
 if(timeoutHnd) clearTimeout(timeoutHnd);
  timeoutHnd = setTimeout(gridReload,500);
 }
function gridReload(){
 var nm_mask = jQuery("#item").val();
 var cd_mask = jQuery("#empid").val();
jQuery("#rowed2").jqGrid('setGridParam',{url:"server.php?nm_mask="+nm_mask+"&cd_mask="+cd_mask,page:1}).trigger("reloadGrid");   
}	
   	   
	</script>
</body>
</html>



