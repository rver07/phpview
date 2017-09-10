<html>
<head>
	<title>Student View</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="container">
<body>
<div id="title">
<h1><u>VIEW STUDENTS</u></h1>
</div>
<div id="container">

<?php
$query=mysqli_connect("localhost","root","","students");

if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$course=$_POST['course'];
}
$x=mysqli_query($query,"select * from students where idno='$id'");
$y=mysqli_fetch_array($x);

?>

<?php include "views/templates/dashboard.php" ?>


<div id="table1">
<form method="post" action="">
<p>ID No.<input type="text" name="idno" value="<?php echo $id ?>"/></p>
<p>Last Name<input type="text" name="lname" value="<?php echo $y['lname']; ?>"/></p>
<p>First Name<input type="text" name="fname" value="<?php echo $y['fname']; ?>"/></p>
<p>Middle Name<input type="text" name="mname" value="<?php echo $y['mname']; ?>"/></p>
<p>Course:<input type="text" name="course" value="<?php echo $y['course']; ?>"/></p>
<input type="submit" name="submit" value="Back" />
</form>
</div>
</div>
<?php
}

?>
</body>
</html>