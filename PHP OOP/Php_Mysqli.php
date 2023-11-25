<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if($result->num_rows> 0){
    while($row = $result->fetch_assoc()){
        echo "Name: {$row["Name"]} - Subject: {$row["Subject"]} - Age: {$row["Age"]}  " . "<br>";
    }
}
else{
    echo "No result Found";
}
$conn->close();

?>