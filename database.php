<?php
$conn = mysqli_connect("localhost", "root", " ", " ");
$sql = "DELETE FROM students WHERE id=1";
if (mysqli_query($conn, $sql)) {
echo "Record is deleted!";
} else {
echo "Error in delete the file: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
