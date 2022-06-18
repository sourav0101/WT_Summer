<?php
    session_start();
?>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>This is home page</h1>
    <?php
        if(empty($_SESSION["username"])){
            echo "<a href='../view/login.php'>Login</a>";
        }
        else{
            echo "Welcome back " . $_SESSION["username"] . "<br>";
            echo "<a href='../control/logout.php'>Logout</a>";
        }
    ?>
</body>
</html>