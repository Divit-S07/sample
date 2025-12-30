<?php
$conn = mysqli_connect("localhost", "root", " ", " ");
$sql = "INSERT INTO students (name, email, department)
VALUES ('Gayathri', 'gayathri@gmail.com', 'CSE')";
if (mysqli_query($conn, $sql)) {

echo "Record inserted!";
} else {
echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>