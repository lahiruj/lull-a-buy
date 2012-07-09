// JavaScript Document
function validate()
{
var str=true;

if(document.register.fname.value=='')
{
document.getElementById("msg1").innerHTML="Please Enter User ID";
str=false;
}

var alphaExp=/^[a-zA-Z]+$/;
if(!document.register.fname.value=='')
{
 if(!document.register.fname.value.match(alphaExp))
	{
			document.getElementById("msg1").innerHTML='Please enter letters only';
			str=false;
	}
}

if(!document.register.lname.value=='')
{
 if(!document.register.lname.value.match(alphaExp))
	{
			document.getElementById("msg2").innerHTML='Please enter letters only';
			str=false;
	}
}

 if (!document.register.gender[0].checked && !document.register.gender[1].checked)
  {
    	document.getElementById("msg3").innerHTML='Please select one';
    	str=false;    
		}
		
 if (!document.register.state[0].checked && !document.register.state[1].checked)
  {
    	document.getElementById("msg4").innerHTML='Please select one';
    	str=false;    
		}
		
if(document.register.hname.value=='')
{
document.getElementById("msg51").innerHTML="Please enter Home name or number";
str=false;
}

var alphaExp=/^[a-zA-Z0-9"']+$/;
if(!document.register.hname.value=='')
{
 if(!document.register.hname.value.match(alphaExp))
	{
			document.getElementById("msg51").innerHTML='Please type correct one';
			str=false;
	}
}

if(document.register.street.value=='')
{
document.getElementById("msg52").innerHTML="Please Enter Your Street.";
str=false;
}

var alphaExp=/^[a-zA-Z ]+$/;
if(!document.register.street.value=='')
{
 if(!document.register.street.value.match(alphaExp))
	{
			document.getElementById("msg52").innerHTML='Please enter letters only';
			str=false;
	}
}

if(document.register.city.value=='')
{
document.getElementById("msg53").innerHTML="Please Enter Your City.";
str=false;
}

var alphaExp=/^[a-zA-Z ]+$/;
if(!document.register.city.value=='')
{
 if(!document.register.city.value.match(alphaExp))
	{
			document.getElementById("msg53").innerHTML='Please enter letters only';
			str=false;
	}
}
var alphaExp=/^[0-9]+$/;

if(document.register.hphone.value=='' && document.register.mobile.value=='')
{
document.getElementById("msg71").innerHTML="Please Enter at least one phone number.";
str=false;
}
if(!(document.register.hphone.value==''))
{
	if(!(document.register.hphone.value.length==10))
	{
		document.getElementById("msg72").innerHTML="Please Enter valide phone number.";
		str=false;
		}
	if(!document.register.hphone.value.match(alphaExp))
	{
			document.getElementById("msg72").innerHTML='Please enter numbers only';
			str=false;
	}
}
if(!(document.register.mobile.value==''))
{
	if(!(document.register.mobile.value.length==10))
	{
		document.getElementById("msg71").innerHTML="Please Enter valide phone number.";
		}
	if(!document.register.mobile.value.match(alphaExp))
	{
			document.getElementById("msg71").innerHTML='Please enter numbers only';
			str=false;
	}
}
	
	
if(document.register.email.value=='')
{
document.getElementById("msg8").innerHTML="Please Enter email";
str=false;
}

var alphaExp=/^[a-zA-Z0-9._]+$/;
if(!document.register.email.value=='')
{
 if(!document.register.email.value.match(alphaExp))
	{
			document.getElementById("msg8").innerHTML='Please enter correct email';
			str=false;
	}
}

if(document.register.remail.value=='')
{
document.getElementById("msg9").innerHTML="Please Re-Enter email";
str=false;
}

if(!document.register.remail.value=='')
{
  if(!((document.register.email.value==document.register.remail.value)&&(document.register.etype.value==document.register.retype.value)))
    {
	document.getElementById("msg9").innerHTML="Re-Entered email not matched";
	str=false;
	}
}

if(document.register.pw.value=='')
{
document.getElementById("msg10").innerHTML="Please create password";
str=false;
}

if(!document.register.pw.value=='')
{
   if(!(document.register.pw.value.length>=6))
    {
	document.getElementById("msg10").innerHTML="Please create strong password";
	str=false;
	}
	if(!(document.register.pw.value.length<=20))
    {
	document.getElementById("msg10").innerHTML="Password is longer than allowed";
	str=false;
	}
}

if(document.register.rpw.value=='')
{
document.getElementById("msg11").innerHTML="Please Re-Enter password";
str=false;
}

if(!document.register.pw.value=='')
{
  if(!(document.register.pw.value== document.register.rpw.value))
    {
    document.getElementById("msg11").innerHTML="Re-Entered password not matched";
    str=false;
     }
}

if(document.register.check1.checked == false) 
{
	document.getElementById("msg12").innerHTML="You have to have a good understanding about our policy.";
	str=false;
}

if(document.register.check2.checked == false) 
{
	document.getElementById("msg13").innerHTML="You have to agree with our terms and conditions.";
	str=false;
}

return str;
}
