
<?php
include 'database.php';

$id = $_GET['id'];
$sql = "DELETE FROM records WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.html");
?>
