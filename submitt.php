<?php
if ( isset($_POST['name']) || isset($_POST['email']) || isset($_POST['date']) || isset($_POST['phone']) || isset($_POST['restaurantname']) || isset($_POST['time']) || isset($_POST['noofcustomers']));

$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$restaurantname=$_POST['restaurantname'];
$time=$_POST['time'];
$noofcustomers=$_POST['noofcustomers'];
//$name='Ushma';
//$email='uydesai@gmail.com';
//$date='09/10/2020';
//$phone='3158808814';
//$restaurantname='cheesecake';
//$time='9 PM';
//$servername = "restaurantdatabase2.cv7tvm1feofj.us-east-1.rds.amazonaws.com";
$servername = 'restrodb.cv7tvm1feofj.us-east-1.rds.amazonaws.com';
$username = "iparekh";
$password = "qwerty1024";
$dbname = "restaurant";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection 
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
echo "Your table for $noofcustomers has been reserved for: $time";
echo "<br>";
$sql = "INSERT INTO userdetails ( name, emailid, date, phone, restaurantname, time, noofcustomers) values ('$name','$email', '$date', '$phone', '$restaurantname', '$time', '$noofcustomers')";

if ($conn->query($sql) === TRUE) {
	$conn->query('commit;');
	echo "Please kindly arrive 15 minutes prior to your reserved time slot";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>