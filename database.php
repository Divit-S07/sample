<?php
$conn = mysqli_connect("localhost", "root", " ", " ");
$sql = "CREATE TABLE students (
id INT,
name VARCHAR(50),
email VARCHAR(100),
department VARCHAR(20)
)";
if (mysqli_query($conn, $sql)) {
echo "Table created successfully!";
} else {
echo "Error: " . mysqli_error($conn);
mysqli_close($conn);
?>