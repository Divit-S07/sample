<?php
$conn = mysqli_connect("localhost", "root", " ", " ");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . "<br>";
}
mysqli_close($conn);
?>