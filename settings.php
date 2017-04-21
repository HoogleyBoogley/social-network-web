<?php

$db_ip = "localhost";
$db_username = "username";
$db_password = "password";
$db_name = "myDB";

// Create connection
$conn = new mysqli($db_ip, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};

$sql = "SELECT color FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_color = $row["color"];
    };
} else {
    echo "0 results";
};

if ($user_color = green) {
	header "Location: green.php";
} else {
	if ($user_color = purple) {
		header "Location: purple.php";
	};
};

$conn->close();

?>
