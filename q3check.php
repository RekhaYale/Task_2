<?php
session_start();
$ans_given=$_POST['answer'];
//echo $ans_given;
$mysqlport=getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
$dbname='db_one';
mysql_select_db($dbname);
$sql="Select answer from quiz WHERE level='3'";
$result=mysql_query($sql);
$row=mysql_fetch_array(mysql_query($sql),MYSQL_ASSOC);
$crct_ans=$row['answer'];
//echo $crct_ans;
if($ans_given==$crct_ans)
{
	header('Location: thankyou.php'); 
}
else
{
	header('Location: q3.php'); 
}
mysql_close($conn)
?>