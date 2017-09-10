<html>
<head>
	<title>Student Edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="container">
<body>
<h1><u>EDIT STUDENT</u></h1>


<?php include "views/templates/dashboard.php" ?>

	<form method="post" action="contoller.php?request=edit">
	<p>ID No.
	<br /><input type="text" name="idno" value="<?php echo $id ?>"/></p>
	<p>Last Name
	<br /><input type="text" name="lname" value="<?php echo $y['lname']; ?>"/></p>
	<p>First Name
	<br /><input type="text" name="fname" value="<?php echo $y['fname']; ?>"/></p>
	<p>Middle Name
	<br /><input type="text" name="mname" value="<?php echo $y['mname']; ?>"/></p>
	<p>Course:
	<br /><input type="text" name="course" value="<?php echo $y['course']; ?>"/></p>

	<input type="submit" name="submit" value="Update" />
	</form>
<?php
}
?>
</body>
</html>