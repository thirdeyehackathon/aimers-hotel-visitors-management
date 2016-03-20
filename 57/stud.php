<html>
<?php
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysql_connect($hostname,$username,$password)or die("unable to connect to MySQL");
echo "connected to MySQL<br>";
$selected =mysql_select_db("datab",$dbhandle)or die("could not select examples");
$name1=$_POST['Name'];
$rollno1=$_POST['Rollno'];
$department1=$_POST['Department'];
$fathersname1=$_POST['FatherName'];
$mothersname1=$_POST['MotherName'];
print"Name is".$name1."<br>";
print"Rollno is".$rollno1."<br>";
print"Department is".$department1."<br>";
print"Father'sName is".$fathersname1."<br>";
print"Mother'sName is".$mothersname1."<br>";


$ins="insert into tbl(name,rollno)values('$name1','$rollno1','$department1','$fathersname1','$mothersname1')";
$ins1=mysql_query($ins,$dbhandle);
if($ins1)
{
print "data inserted";
}
else
{
print "data not inserted";
}
mysql_close($dbhandle);
?>
<body>
<a href="sam.html">click</a>
</html>