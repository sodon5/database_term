<?php
echo 'Hello!!';

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database ="c9";
$dbport=3306;

// Create connection
$conn = new mysqli($servername, $username, $password,$database,$dbport);

//Check connection
if($db->connect_error){
    die("Connection failed: ".$db->connect_error);
}

echo "Connected successfully (".$db->host_info.")";

$sql = "INSERT INT MyGuests firstname, lastname, email
VALUES ('john','Doe','John@example.com')";

// Check connection
if ($conn->query($sql) ===TRUE) {
   echo "New record created successfully";
} 
else{
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close()

?>