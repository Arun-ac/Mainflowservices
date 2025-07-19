
<?php
include 'database.php';

$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO records (name, category, price, email, phone) 
        VALUES ('$name', '$category', '$price', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "Added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

header("Location: index.html");
?>
