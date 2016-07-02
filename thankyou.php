<?php
session_start();
?>
<html>
<head>
<title>ThankYou</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' type='image/x-icon' href='hqdefault.jpg' />
<style type="text/css">
 .form-style1{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 500px;
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
<?php
echo"<h1>Thank you&nbsp".$_SESSION['username']."!</h1>";
echo"<br/>Congratulations!!&nbspYou have completed the game successfully.<br/><br/><form name='f3' action='logout.php'><input type='submit' value='Logout'/></form>";
?>
</div>
</body>
</html>