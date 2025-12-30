<?php
$conn = mysqli_connect("localhost", "root", " ", " ");
$sql = "UPDATE students SET email='newmail@gmail.com' WHERE id=1";
if (mysqli_query($conn, $sql)) {
echo "Record updated!";
} else {
echo "Error: " . mysqli_error($conn);

}
mysqli_close($conn);
?>