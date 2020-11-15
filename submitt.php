<?php
//$name=$_POST['name'];
//$email=$_POST['email'];
// $date=$_POST['date'];
// $phone=$_POST['phone'];
// $restaurantname=$_POST['restaurantname'];
// $time=$_POST['time'];
$name='Ushma';
$email='uydesai@gmail.com';
$date='09/10/2020';
$phone='3158808814';
$restaurantname='cheesecake';
$time='9 PM';
$servername = "restaurantdatabase2.cv7tvm1feofj.us-east-1.rds.amazonaws.com";
$username = "iparekh";
$password = "qwerty1024";
$dbname = "restaurant";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection 
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
echo "Connected Successfully";
$sql = "INSERT INTO userdetails ( name, emailid, date, phone, restaurantname, time) values ('$name','$email', '$date', '$phone', '$restaurantname', '$time')";

if ($conn->query($sql) === TRUE) {
	$conn->query('commit;');
	echo "New record created";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>