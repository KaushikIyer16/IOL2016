 


<?php
 $email = $_POST['email'];
 
$servername = "localhost";
$username = "iol2016";
$password = "ploMysorein14";
$dbname = "IOL2016";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO email_list (email_id)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo " Hello ".$email." Your email has been stored successfully. we will connect you soon. thank you";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>