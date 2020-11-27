<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд
$_SESSION['auth'] = false;

// Встановлення з'єднання
$conn = new mysqli($servername, $username, $password, $database);

/*// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/

$sql = "Select login, password from users";

$user = $conn->query($sql);
if ($user->num_rows > 0) {
    while ($check_user = $user->fetch_assoc()) {
        if ($_POST["login"] == $check_user["login"] && $_POST["password"] == $check_user["password"]) {
            $_SESSION['auth'] = true;
        }
    }
    header('Location: restrictedSQL.php');
} else
    echo "<h4 align='center' style='padding-top: 1rem'> "."No registered users: ". '<a class="btn" href="registerSQL.php">Registration</a><hr>'."</h4>";
mysqli_close($conn);
?>



