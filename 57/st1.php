<html>
<?php
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysql_connect($hostname,$username,$password) or die("unable to connect to MySQL");
echo "connected to MySQL<br>";
$selected =mysql_select_db("db",$dbhandle)or die("could not select examples");
$name1=$_POST['name'];
$result = mysql_query("SELECT * FROM tbl WHERE Name = '$name1'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

if(mysql_num_rows($result)==0)
{
echo "could not find in database";
}
else
{
$row = mysql_fetch_row($result);
echo "Name :{$row[0]}  <br> ".
 "Rollno : {$row[1]} <br> ".
         "Department : {$row[2]} <br> ".
         "Father'sName: {$row[3]} <br> ".
         "Mother'sName: {$row[4]} <br> ".
         
         "--------------------------------<br>";
 } 
mysql_close($dbhandle);
?>
</html>