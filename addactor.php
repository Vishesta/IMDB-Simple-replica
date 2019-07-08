
<?php
include("db.php");

	 $name = $_POST['name'];
		$sex = $_POST['sex'];
		$dob = $_POST['dob'];
         $bio = $_POST['bio'];
		$sql = "INSERT INTO 'actor'('id','name','sex','dob','bio') VALUES(NULL,'$name','$sex','$dob','$bio')";
		if ($connect->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>