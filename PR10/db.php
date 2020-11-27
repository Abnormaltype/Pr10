<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд

// Встановлення з'єднання
$conn = new mysqli($servername, $username, $password, $database);

/*// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/

$sql = "SELECT id, login, password, first_name, last_name, id_role FROM users";
$result = $conn->query($sql);
echo '<h1 align="center">Authorised users</h1>';
if ($result->num_rows > 0) {
// output data of each row
    echo '<table border="2" cellpadding = "5" cellspacing ="0" align="center">';
    echo '<tr> 
        <td>ID</td> 
        <td>First name</td> 
        <td>Last name</td> 
        <td>Login</td> 
        <td>Password</td> 
        <td>Id Role</td> 
    </tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr align="center">';

        echo '<td>'. $row["id"] . '</td>';
        echo '<td>' . $row["first_name"] . '</td>';
        echo '<td>' . $row["last_name"] . '</td>';
        echo '<td>' . $row["login"] . '</td>';
        echo '<td>' . $row["password"] . '</td>';
        echo '<td>' . $row["id_role"] . '</td>';

        echo '</tr>';

    }
    echo '</table>';
} else {
    echo '<h4>'."No results.".'</h4>';
}
echo '<br><h6>'."Back to Sign In: ". '<a class="btn" href="loginSQL.php">Sign In</a><hr>'.'<h6>';

