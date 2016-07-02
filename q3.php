<?php
session_start();
?>
<html>
<head>
<script type="text/javascript">
function checkForm(form)
  {
	if(form.answer.value=="")
   {
	   alert("Error:You have not answered the question!!");
	   return false;
   }
   return true;
  }
</script>
<title>LEVEL 3</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' type='image/x-icon' href='hqdefault.jpg' />
<style type="text/css">
.form-style{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
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
<h1>Level 3</h1><hr>
<?php
$mysqlport=getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
$dbname='db_one';
mysql_select_db($dbname);
$sql="Select question from quiz WHERE level='3'";
$result=mysql_query($sql);
$row=mysql_fetch_array(mysql_query($sql),MYSQL_ASSOC);
echo"<center><h1>Welcome&nbsp".$_SESSION['username']."&nbsp!</h1></center>";
echo"
<form name='form1' onsubmit='return checkForm(this);' action='q3check.php' method='POST'>".$row['question']."
<br/><br/><input type='text' name='answer' placeholder='Answer' /><br/>
<input type='submit' value='Submit answer' />
</form></div><div class='form-style'>
<form name='f3' action='logout.php'><input type='submit' value='Logout'/></form>"
?>
</div>
</body>
</html>