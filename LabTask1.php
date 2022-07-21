<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Webtech_A";
$name="sadia";
$email="sadia@gmail.com";

//$apple=new Fruit();
//$apple->x;
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//$q="CREATE TABLE Student(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL)";
	//$q="INSERT INTO Student(Name,Email) VALUES('Eva','eva@gmail.com')";
	//$q="INSERT INTO Student(Name,Email) VALUES('".$name."','".$email."')";
	//$q="DELETE FROM Student where ID=1003";
	//$q="INSERT INTO Teacher(ID,Name,Email) VALUES(20024,'".$name."','".$email."')";
	$q="INSERT INTO Teacher(Name,Email) VALUES('Arafat','mala@gmail.com')";
	
	$result=$conn->query($q);
	if($result)
		echo "data inserted successfully";
	else
		echo "data not inserted"."<br>";
	//update data
}
	$sql = "UPDATE Teacher SET Email='arafat@gmail.com' WHERE id=20025";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
	//echo "successful connection";
?>