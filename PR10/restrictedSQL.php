<?php
// Start the session
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            width: 550px;
        }
    </style>
</head>
<body style="padding-top: 1rem;">
<h1 align="center">Personal Account</h1>
<div class="container">
    <?php
    if ($_SESSION['auth'] == true) {
        echo '<img src="wttc.jpg" alt="Welcome to the club!" width="633" height="260"><br>';
        echo "<h4 align='center'>You are authorised.</h4>";
        echo '<br><h6">'."Return to Sign In: ". '<a class="btn" href="loginSQL.php">Sign In</a><hr>'.'<h6>';
    } else {
        echo "Incorrect username or password.<br>";
        echo "Try again: ".'<a class="btn" href="loginSQL.php">Login</a><br>';
        echo "<br></br>If you don't have the account, join to the club!: ".'<a class="btn" href="registerSQL.php">Registration</a><hr>';
    }
    ?>
</div>
</body>
</html>

