<html>
<head>
<style type=text/css>
body
{background-image: url("thankuback.jpg");
    background-size: cover;
	height:100%;
	background-repeat:no-repeat;
	background-attachment:fixed;
}
</style>
</head>
<body>
<table cellspacing="15px"><td><center><a href="main.html"><img src="p.png" width="50" height="50"></a></center></td>
<td><center><a href="donarform.html"><img src="p1.png" width="50" height="50"></a></center></td>
<td><center><a href="Recipient.html"><img src="p2.png" width="50" height="50"></a></center></td>
<td><center><a href="4.html"><img src="p3.png" width="50" height="50"></a></center></td>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donar";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit1']))
{
$d_id= $_POST['D_Id'];
$f_name= $_POST['First_Name'];
$l_name=$_POST['Last_Name'];
$dob=$_POST['bdate'];
$age=$_POST['Age'];
$pno=$_POST['phone_no'];
$email=$_POST['emailid'];
$occupation=$_POST['occupation'];
$gender=$_POST['r0'];
$d_date=$_POST['ddate'];
$b_group=$_POST['bg'];
$addr=$_POST['address'];
$sql = "INSERT INTO donar_details (d_id,f_name,l_name,dob,age,pno,email,occupation,gender,d_date,b_group,addr)VALUES ('$d_id','$f_name','$l_name','$dob','$age','$pno','$email','$occupation','$gender','$d_date','$b_group','$addr')";
if ($conn->query($sql) === TRUE)
{
echo "<p><br><br><br><br><br><br><br><br><br><br><br><br><center><font face='Cooper Black' size='24'>Thank Tou For Donating!!!</font></center></p>";
}
else
{
echo "Error: ".$sql ."<br>" .$conn->error;
}
}
elseif(isset($_POST['submit2']))
{
$d_id=$_POST['D_Id'];
$sql = "DELETE FROM donar_details WHERE d_id=$d_id";
if ($conn->query($sql) === TRUE)
{
echo "<p><br><br><br><br><br><br><br><br><br><br><br><br><center><font face='Cooper Black' size='24'>Record Is Deleted</font></center></p>";
}
else
{
echo "Error deleting record: " . $conn->error;
}
}
elseif(isset($_POST['submit3']))
{
$d_id= $_POST['D_Id'];
$f_name= $_POST['First_Name'];
$l_name=$_POST['Last_Name'];
$dob=$_POST['bdate'];
$age=$_POST['Age'];
$pno=$_POST['phone_no'];
$email=$_POST['emailid'];
$occupation=$_POST['occupation'];
$gender=$_POST['r0'];
$d_date=$_POST['ddate'];
$b_group=$_POST['bg'];
$addr=$_POST['address'];
$sql = "UPDATE donar_details SET f_name='$f_name',l_name='$l_name',dob='$dob',age='$age',pno='$pno',email='$email',occupation='$occupation',gender='$gender',d_date='$d_date',b_group='$b_group',addr='$addr' where d_id=$d_id";
if ($conn->query($sql) === TRUE)
{
echo "<p><br><br><br><br><br><br><br><br><br><br><br><br><center><font face='Cooper Black' size='24'>Your Details Are Now Updated</font></center></p>";
}
else
{
echo "Error updating record: " . $conn->error;
}
}
elseif(isset($_POST['r_insert']))
{
$r_id= $_POST['D_Id'];
$fname= $_POST['First_Name'];
$lname=$_POST['Last_Name'];
$dor=$_POST['bdate'];
$age=$_POST['Age'];
$ppno=$_POST['phone_no'];
$dis=$_POST['disease'];
$bgroup=$_POST['bg'];
$gender=$_POST['r0'];
$hospital=$_POST['Hospital_Name'];
$hcon=$_POST['Contact_hospital'];
$hemail=$_POST['email_hospital'];
$haddr=$_POST['address'];
$sql = "INSERT INTO r_details (r_id,fname,lname,dor,age,ppno,dis,bgroup,gender,hospital,hcon,hemail,haddr)VALUES ('$r_id','$fname','$lname','$dor','$age','$ppno','$dis','$bgroup','$gender','$hospital','$hcon','$hemail','$haddr')";
if ($conn->query($sql) === TRUE)
{
echo "<p><br><br><br><br><br><br><br><br><br><br><br><br><center><font face='Cooper Black' size='24'>We Wll Try To Help You As Soon As Possible</font></center></p>";
}
else
{
echo "Error: ".$sql ."<br>" .$conn->error;
}
}
elseif(isset($_POST['r_delete']))
{
$r_id=$_POST['D_Id'];
$sql = "DELETE FROM r_details WHERE r_id=$r_id";
if ($conn->query($sql) === TRUE)
{
echo "<p><br><br><br><br><br><br><br><br><br><br><br><br><center><font face='Cooper Black' size='24'>Record Is Deleted</font></center></p>";
}
else
{
echo "Error deleting record: " . $conn->error;
}
}
elseif(isset($_POST['r_update']))
{
$r_id= $_POST['D_Id'];
$fname= $_POST['First_Name'];
$lname=$_POST['Last_Name'];
$dor=$_POST['bdate'];
$age=$_POST['Age'];
$ppno=$_POST['phone_no'];
$dis=$_POST['disease'];
$bgroup=$_POST['bg'];
$gender=$_POST['r0'];
$hospital=$_POST['Hospital_Name'];
$haddr=$_POST['address'];
$sql = "UPDATE r_details SET fname='$fname',lname='$lname',dor='$dor',age='$age',ppno='$ppno',dis='$dis',bgroup='$bgroup',gender='$gender',hospital='$hospital',haddr='$haddr' where r_id=$r_id";
if ($conn->query($sql) === TRUE)
{
echo "<p><br><br><br><br><br><br><br><br><br><br><br><br><center><font face='Cooper Black' size='24'>Your Details Are Now Updated</font></center></p>";
}
else
{
echo "Error updating record: " . $conn->error;
}
}

$conn->close();
?>
</body>
</html>