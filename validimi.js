function validimi1()
{
var username=document.getElementById("username").value;
var emaill=document.getElementById("email").value;
var password=document.getElementById("password").value;
var cpassword=document.getElementById("confirmpassword").value;

submitOK="true";

if(username=="")
{
    alert("Username required");
    submitOK = "false";
}

else if(username.length>20)
{
    alert("You can't write more than 24letters");
    submitOK = "false";
}
if(password=="")
{
    alert("Username required");
    submitOK = "false";
}
 else if (password.length < 7 || password.length >16) {
        alert("Password should have more than 7 and less than 16 characters");
		submitOK = "false";
        }
else if (password.search(/[a-z]/i) < 0) {
        alert("Password should have at last one letter");
		submitOK="false";
       }
else if (password.search(/[0-9]/) < 0) {
        alert("Your password should have at least one digit."); 
		submitOK="false";
     }
else if(password.search(/[!#$%&? "]/)<0)
	  {
	  alert("Your password should have at least one special character."); 
		submitOK="false";
      }
 if(cpassword!=""){
     alert("Confirm password is required");
     submitOK="false";
 }     
     if(!password.match(cpassword))
     {
      alert("Passwords doesnt match");
      submitOK="false";
     }
    if (submitOK == "false") {
    return false;
   }	
}
function validimi2()
{
    var username=document.getElementById("usernamee").value;
    var password=document.getElementById("password").value;
   submitOK="true";
    if(username=="" && password=="")
    {
        alert("Please write username and password");
        submitOK="false";
    }
    else if(username=="")
    {
        alert("Please write username");
        submitOK="false";
    }
    else if(password=="")
    {
        alert("Please write password");
        submitOK="false";
    }
    if (submitOK == "false") {
        return false;
       }	
}