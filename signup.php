<html>
<head>
<title>SignUp</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' type='image/x-icon' href='hqdefault.jpg' />

<style type="text/css">
 .form-style1{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 300px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style1 h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style1 input[type="submit"]{
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
.form-style1 input[type="submit"]:hover{
    background: #2EBC99;
}
</style>
</head>
<body bgcolor="#CCCC99">
<div class="form-style1">
<form name="f1" action="home.php" method="POST">
<input type="submit" value="Sign up" />
</form>
</div>
<div class="form-style1">
<form name="f2" action="home.php" method="POST">
<input type="submit" value="Sign in" />
</form>
</div><hr>
<div class="form-style1">
<?php
$mysqlport=getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
$dbname='db_one';
mysql_select_db($dbname);

$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];

$sql_view="SELECT count(*) FROM users WHERE(username='".$username."')";
$query=mysql_query($sql_view);
$result=mysql_fetch_array($query);

$sql_insert="INSERT INTO
users(email,username,password)VALUES('$email','$username','$password')";
if($email==NULL OR $username==NULL OR $password==NULL)
	die('Please enter values for all the fields');
else
{
 if($result[0]>0)
 {
	 echo"<center><h1>Username already exists.Sign up with different username.</h1></center>";
 }
 else
 {
	if(!mysql_query($sql_insert,$conn))
	{
		die('Error:'.mysql_error());
	}		
	else
		 echo"<h1> 'Signed up successfully!!'</h1>";
 }
	
}
mysql_close($conn)
?>
</div>
</body>
</html>