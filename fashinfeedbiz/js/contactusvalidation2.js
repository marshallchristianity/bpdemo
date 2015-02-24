// JavaScript Document for Contact us

function validateform(){
var catg= document.form1.cat;
var nam=document.form1.name;
var oname=document.form1.orgname;
var eml=document.form1.email;
var phn=document.form1.phone;
var phn2=document.form1.phone2;
var loc=document.form1.location;
var cb=document.form1.dte;
var ct=document.form1.tme;
var findit=document.form1.findit;

var iframe = document.getElementById('ifcap');
var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
var usernameTextBox = innerDoc.getElementById('cap');

ctg=/^[a-zA-Z. ]{2,30}$/;
nm=/^[a-zA-Z. ]{4,30}$/;
onm=/^[a-zA-Z.0-9 ]{4,30}$/;
em=/^[a-zA-Z0-9._-]+@[a-z0-9]+\.[a-z]{2,4}$/;
num=/^[0-9]{10,12}$/;
num2=/^[0-9]{10,12}$/;
lct=/^[a-zA-Z. ]{2,50}$/;
cbd=/^[a-zA-Z,-.\/0-9 ]{2,50}$/;

if(catg.value==''){
alert('Please select Your Type');
catg.focus();
return false;
}
if(!ctg.test(catg.value)){
alert('Please select valid Type');
catg.focus();
return false;
}
if(nam.value==''){
alert('Please Enter Your Name');
nam.focus();
return false;
}
if(!nm.test(nam.value)){
alert('Please Enter Valid Name');
nam.focus();
return false;
}
if(oname.value==''){
alert('Please Enter Your Organisation Name');
oname.focus();
return false;
}
if(!onm.test(oname.value)){
alert('Please Enter Valid Organisation Name');
oname.focus();
return false;
}
if(eml.value==''){
alert('Please Enter Your EmailId');
eml.focus();
return false;
}
if(!em.test(eml.value)){
alert('Please Enter Valid EmailId');
eml.focus();
return false;
}
if(phn.value==''){
alert('Please Enter Your Phone Number');
phn.focus();
return false;
}
if(!num.test(phn.value)){
alert('Please Enter Valid Phone Number');
phn.focus();
return false;
}
if(phn2.value==''){
alert('Please Enter Your Alternate Number');
phn2.focus();
return false;
}
if(!num2.test(phn2.value)){
alert('Please Enter Valid Alternate Phone Number');
phn2.focus();
return false;
}
if(loc.value==''){
alert('Please Enter Your Location');
loc.focus();
return false;
}
if(!lct.test(loc.value)){
alert('Please Enter Your Valid Location');
loc.focus();
return false;
}

if(document.getElementById('tchk').checked==''){
if(document.getElementById('pchk').checked==''){
if(document.getElementById('ppchk').checked==''){
if(document.getElementById('rchk').checked==''){
if(document.getElementById('achk').checked==''){
alert('Please select At least One Requirement');
return false;
}
}
}
}
}

if(cb.value==''){
alert('Please Enter Your Call back date');
cb.focus();
return false;
}
if(!cbd.test(cb.value)){
alert('Please Enter Your Valid call back date');
cb.focus();
return false;
}
if(ct.value==''){
alert('Please Set Time');
ct.focus();
return false;
}

if(findit.value==''){
alert('Please Select Where You find Us');
findit.focus();
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

