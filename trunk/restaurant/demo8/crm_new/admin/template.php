<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><link rel="stylesheet" type="text/css" href="../cleditor-master/jquery.cleditor.css" /><script type="text/javascript" src="../cleditor-master/jquery.cleditor.js"></script>	<script> $(document).ready(function() {            $("#textarea").cleditor({                width: 500, // width not including margins, borders or padding                height: 250, // height not including margins, borders or padding                controls: // controls to add to the toolbar                    "bold italic underline strikethrough subscript superscript | font size " +                    "style | color highlight removeformat | bullets numbering | outdent " +                    "indent | alignleft center alignright justify | undo redo | " +                    "rule image link unlink | cut copy paste pastetext | print source",                colors: // colors in the color popup                    "FFF FCC FC9 FF9 FFC 9F9 9FF CFF CCF FCF " +                    "CCC F66 F96 FF6 FF3 6F9 3FF 6FF 99F F9F " +                    "BBB F00 F90 FC6 FF0 3F3 6CC 3CF 66C C6C " +                    "999 C00 F60 FC3 FC0 3C0 0CC 36F 63F C3C " +                    "666 900 C60 C93 990 090 399 33F 60C 939 " +                    "333 600 930 963 660 060 366 009 339 636 " +                    "000 300 630 633 330 030 033 006 309 303",                fonts: // font names in the font popup                    "Arial,Arial Black,Comic Sans MS,Courier New,Narrow,Garamond," +                    "Georgia,Impact,Sans Serif,Serif,Tahoma,Trebuchet MS,Verdana",                sizes: // sizes in the font size popup                    "1,2,3,4,5,6,7",                styles: // styles in the style popup                    [["Paragraph", "<p>"], ["Header 1", "<h1>"], ["Header 2", "<h2>"],                    ["Header 3", "<h3>"],  ["Header 4","<h4>"],  ["Header 5","<h5>"],                    ["Header 6","<h6>"]],                useCSS: false, // use CSS to style HTML when possible (not supported in ie)                docType: // Document type contained within the editor                    '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',                docCSSFile: // CSS file used to style the document contained within the editor                    "",                bodyStyle: // style to assign to document body contained within the editor                    "margin:4px; font:10pt Arial,Verdana; cursor:text"            });        });</script><div id="content" class="span10">
			<!-- content starts -->
		<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="student.php?data=autocomplete">STUDENTS</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> <?php echo(isset($_GET['page'])?'Edit':'Add')?>  STUDENT</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="dbfiles/template.php"  enctype="multipart/form-data">
						  <fieldset>
							<input type="hidden" value="<?php echo $page['id']?>" name="id">
							<div class="control-group">
							  <label class="control-label" for="fileInput">name</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="text" required name="name" value="<?php echo $page['name']?>">
							  </div>
							</div>  														
							<div class="control-group">							  <label class="control-label" for="fileInput">SUBJECT</label>							  <div class="controls">								<input class="input-file uniform_on" id="fileInput" type="text" required name="subject" value="<?php echo $page['subject']?>">							  </div>							</div>  														<div class="control-group">							  <label class="control-label" for="fileInput">BODY</label>							  <div class="controls">								<textarea class="cleditor"  id="textarea" required name="body"><?php echo $page['body']?></textarea>							  </div>							</div> 
                        
							
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="<?php echo(isset($_GET['page'])?'Update':'Add')?>">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
<script>    function fill() {        var txt8 = document.getElementById("TextBox8").value-0;        var txt9 = document.getElementById("TextBox9").value-0;		var tax=(txt8*12.36)/100;		var total=txt8+tax;		document.getElementById("TextBox11").value = tax;        document.getElementById("TextBox10").value = total;    }</script>

					<!-- content ends -->
			</div><!--/#content.span10-->
			
	