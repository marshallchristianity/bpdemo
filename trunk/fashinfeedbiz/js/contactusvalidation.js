// JavaScript Document

  function contactusval()
{
var name=document.form1.name;
var emailid=document.form1.emailid;
var phone=document.form1.phone;
var details=document.form1.details;



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


if(subject.value=='')
	{
	   alert("Please Enter Subject");
	   document.form1.subject.focus();
	   return false;
	}	


if(query.value=='')
	{
	   alert("Please Enter Details");
	   document.form1.query.focus();
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



