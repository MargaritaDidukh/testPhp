<?php
$servername = 'a_level_nix_mysql';
$username = 'root';
$password = 'cbece_gead-cebfa';
$dbname = 'a_level_nix_mysql';
$conn = new mysqli($servername, $username, $password, $dbname);
if (empty($_POST['name']) || empty($_POST['review'])) {
    echo 'name and review are required';
} else {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);
    $sql = "INSERT INTO review (name,review) VALUES ('$name','$review')";
    if ($conn->query($sql) === true) {
        echo 'Record Added Sucessfully';
    } else {
        echo 'Error' . $sql . '<br/>' . $conn->error;
    }
    $conn->close();
}
