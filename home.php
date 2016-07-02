<html>
<head>
<script type="text/javascript">
function checkForm(form)
  {
	if(form.email.value=="")
   {
	   alert("Error:Fill the 'Email Address' field!!");
	   return false;
   }
   var emailID = form.email.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
       alert("Please enter correct email ID");
       document.form.email.focus() ;
       return false;
   }
   if(form.username.value=="")
   {
   alert("Error:Fill the 'UserName' field");
   return false;
   }
   
      re = /[0-9]/;
      if(re.test(form.username.value))
	  {
        alert("Error: UserName cannot have numbers!");
        form.name.focus();
        return false;
      }
      re = /[!,@,#,$,%,^,&,*]/;
      if(re.test(form.username.value))
	  {
        alert("Error: UserName cannot have special character!");
        form.name.focus();
        return false;
      }
    if(form.password.value=="")
   {
   alert("Error:Fill the 'Password' field");
   return false;
   }
   return true;
  }
 function checkForm1(form)
 {
	 if(form.uname.value=="")
   {
   alert("Error:Fill the 'UserName' field");
   return false;
   }
   
      re = /[0-9]/;
      if(re.test(form.uname.value))
	  {
        alert("Error: UserName cannot have numbers!");
        form.uname.focus();
        return false;
      }
      re = /[!,@,#,$,%,^,&,*]/;
      if(re.test(form.uname.value))
	  {
        alert("Error: UserName cannot have special character!");
        form.uname.focus();
        return false;
      }
    if(form.pass.value=="")
   {
   alert("Error:Fill the 'Password' field");
   return false;
   }
   return true;
 }
</script>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' type='image/x-icon' href='hqdefault.jpg' />

<style type="text/css">
.form-style{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 300px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style input[type="text"],
.form-style input[type="password"],
.form-style input[type="email"],
.form-style select 
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.form-style input[type="text"]:focus,
.form-style input[type="password"]:focus,
.form-style input[type="email"]:focus,
.form-style select:focus
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.form-style input[type="submit"],
.form-style input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: #fff;
}
.form-style input[type="submit"]:hover,
.form-style input[type="button"]:hover{
    background: #2EBC99;
}
</style>

</head>
<body bgcolor="#CCCC99">
<div class="form-style">
<h1>Sign up</h1>
<form name="form1" onsubmit="return checkForm(this);" action="signup.php" method="POST">
Email:<br/><input type="text" name="email" placeholder="Email Address" /><br/>
Username:<br/><input type="text" name="username" placeholder="Username" /><br/>
Password:<br/><input type="password" name="password" placeholder="Password" /><br/>
<input type="submit" value="Sign up" />
</form>
</div>
<br/>
<div class="form-style">
<h1>Sign in</h1>
<form name="form1" onsubmit="return checkForm1(this);" action="signin.php" method="POST">
Username:<br/><input type="text" name="uname" placeholder="Username" /><br/>
Password:<br/><input type="password" name="pass" placeholder="Password" /><br/>
<input type="submit" value="Sign in" />
</form>
</div>
</body>
</html>