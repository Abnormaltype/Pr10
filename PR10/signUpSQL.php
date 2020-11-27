<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

/*// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/

$first_name = $_POST["first_name"];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$password = $_POST['password'];
$id_role = $_POST['id_role'];

$sql = "Insert Into users (id, first_name, last_name, login, password, id_role) VALUES (Null, '$first_name', '$last_name', '$login', '$password', '$id_role')";
if (mysqli_query($conn, $sql)) {
    header('Location: loginSQL.php');
} else {
    echo "Try again, boy: ".'<a class="btn" href="registerSQL.php">Registration</a><hr>';
}
mysqli_close($conn);
?>