<html>
<?php
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysql_connect($hostname,$username,$password) or die("unable to connect to MySQL");
echo "connected to MySQL<br>";
$selected =mysql_select_db("db",$dbhandle)or die("could not select examples");
$rollno1=$_POST['rollno'];
$result = mysql_query("SELECT * FROM tbl WHERE Rollno = '$rollno1'");
$sqlimage = "SELECT Image FROM tbl where Rollno = '$rollno1'";
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

$imageresult1 = mysql_query($sqlimage);

while($rows = mysql_fetch_assoc($imageresult1))
{       
    $image = $rows['Image'];    
    print $image;
echo "<img src='D:\wamp\www\57\photos' >";
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
<a href="name.php">enter</a> 

</html>