
function form1val()
{
var name=document.form1.name;
var emailid=document.form1.emailid;
var phone=document.form1.phone;
var address=document.form1.address;
var city=document.form1.city;
/* var state=document.form1.state; */
var expyrs=document.form1.expyrs;
var expmonths=document.form1.expmonths;
var details=document.form1.details;
var image=document.form1.image;

var iframe = document.getElementById('ifcap');
var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
var usernameTextBox = innerDoc.getElementById('cap');

// ptitle validations

if(name.value=='')
	{
	   alert("Please Enter Name");
	   document.form1.name.focus();
	   return false;
	}

if(emailid.value=='')
	{
	   alert("Please Enter  Email ID");
	   document.form1.emailid.focus();
	   return false;
	}
	
	
	
if(emailid.value!="")
	{ 
		regexp=/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
		if(document.form1.emailid.value.search(regexp)==-1)
		{
			document.form1.emailid.value="";
			alert('Please  Enter Your Valid Email Address');
			document.form1.emailid.focus();
			return false;
		}
	}



if(phone.value=='')
	{
	   alert("Please Enter Phone");
	   document.form1.phone.focus();
	   return false;
	}	




if(address.value=='')
	{
	   alert("Please Enter your address");
	   document.form1.address.focus();
	   return false;
	}




if(city.value=='')
	{
	   alert("Please Enter your City");
	   document.form1.city.focus();
	   return false;
	}





/*
if(state.value=='')
	{
	   alert("Please Select State");
	   document.form1.state.focus();
	   return false;
	}
	*/


if(expyrs.value=='')
	{
	   alert("Please Select Exp in Years");
	   document.form1.expyrs.focus();
	   return false;
	}
	


if(expmonths.value=='')
	{
	   alert("Please Select Exp in Months");
	   document.form1.expmonths.focus();
	   return false;
	}

if(details.value=='')
	{
	   alert("Please Enter  Details Here");
	   document.form1.details.focus();
	   return false;
	}
	
if(image.value=='')
	{
	   alert("Please Attach Resume");
	   document.form1.image.focus();
	   return false;
	}	

if(document.getElementById('6_letters_code').value==''){
alert('Please Enter above code');
document.getElementById('6_letters_code').focus();
return false;
}
if(document.getElementById('6_letters_code').value!=usernameTextBox.value){
alert('Please Enter Correct Code');
document.getElementById('6_letters_code').focus();
return false;
}

return true;
}


function Numbers1Only(text)
{
	if(text.value.length==0)
		return;
	var regexp=/^[0-9]*$/;
	if(text.value.search(regexp)==-1)
	{
		text.value = text.value.substring(0,(text.value.length-1));
		alert('Please enter only numbers 0-9');		
		
		if(text.value.search(regexp)==-1)
		text.value="";
		
	}	

}

function form2val()
{
var cname=document.form2.cname;
var pname=document.form2.pname;
var emailid=document.form2.emailid;
var phone=document.form2.phone;
var address=document.form2.address;
var city=document.form2.city;
var state=document.form2.state;
var jtitle=document.form2.jtitle;

var details=document.form2.details;
var image=document.form2.image;


// ptitle validations

if(cname.value=='')
	{
	   alert("Please Enter Comapany Name");
	   document.form2.cname.focus();
	   return false;
	}
	

if(pname.value=='')
	{
	   alert("Please Enter Your Name");
	   document.form2.pname.focus();
	   return false;
	}
if(emailid.value=='')
	{
	   alert("Please Enter  Email ID");
	   document.form2.emailid.focus();
	   return false;
	}
	
	
	
if(emailid.value!="")
	{ 
		regexp=/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
		if(document.form2.emailid.value.search(regexp)==-1)
		{
			document.form2.emailid.value="";
			alert('Please  Enter Your Valid Email Address');
			document.form2.emailid.focus();
			return false;
		}
	}



if(phone.value=='')
	{
	   alert("Please Enter Phone");
	   document.form2.phone.focus();
	   return false;
	}	




if(address.value=='')
	{
	   alert("Please Enter your address");
	   document.form2.address.focus();
	   return false;
	}




if(city.value=='')
	{
	   alert("Please Enter your City");
	   document.form2.city.focus();
	   return false;
	}






if(state.value=='')
	{
	   alert("Please Select State");
	   document.form2.state.focus();
	   return false;
	}
	


if(jtitle.value=='')
	{
	   alert("Please Enter Job Title");
	   document.form2.jtitle.focus();
	   return false;
	}
	

if(details.value=='')
	{
	   alert("Please Enter  Job Details Here");
	   document.form2.details.focus();
	   return false;
	}
	
if(image.value=='')
	{
	   alert("Please Select Attachment Here");
	   document.form2.image.focus();
	   return false;
	}	

return true;
}


function Numbers1Only(text)
{
	if(text.value.length==0)
		return;
	var regexp=/^[0-9]*$/;
	if(text.value.search(regexp)==-1)
	{
		text.value = text.value.substring(0,(text.value.length-1));
		alert('Please enter only numbers 0-9');		
		
		if(text.value.search(regexp)==-1)
		text.value="";
		
	}	

}





//-------------------------------------------------------------