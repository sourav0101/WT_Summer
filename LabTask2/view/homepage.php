<?php
    include('../control/verify.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Registration Form</h1><hr>
        <table>
            <tr>
                <td><h3>First Name:</h3></td>
                <td><input type="text" name="firstName" id="">
                    <?php
                        echo $firstnameError;
                    ?>
                    </td>
            </tr>
            <tr>
                <td><h3>Last Name:</h3></td>
                <td><input type="text" name="lastName" id="">
                <?php
                        echo $lastnameError;
                    ?>
                    </td>
                </td>
            </tr>
            <tr>
                <td><h3>Age:</h3></td>
                <td><input type="text" name="age" id="">
                <?php
                        echo $ageError;
                    ?>
                    </td>
            </tr>
            <tr>
                <td><h3>Designation:</h3></td>
                <td>
                    <input type="radio" name="designation" id="" value="Junior Programmer">
                    <label for="designation">Junior Programmer</label>
                    <input type="radio" name="designation" id="" value="Senior Programmer">
                    <label for="designation">Senior Programmer</label>
                    <input type="radio" name="designation" id="" value="Project Lead">
                    <label for="designation">Project Lead</label>
                </td>
                <td>
                    <?php
                        echo $designationError;
                    ?>
                </td>
            </tr>
            <tr>
                <td><h3>Preferred Language:</h3></td>
                <td>
                <input type="checkbox" name="java" id="" value="Java">
                <label for="Java">Java</label>
                <input type="checkbox" name="php" id=""  value="PHP">
                <label for="php">PHP</label>
                <input type="checkbox" name="cpp" id=""  value="C++">
                <label for="cpp">C++</label>
                <?php
                echo $lanError;
                ?>
                </td>
            </tr>
            <tr>
                <td><h3>E-mail:</h3></td>
                <td><input type="email" name="email" id="">
                <?php
                    echo $emailError;
                ?>
            </td>
            </tr>   
            <tr>
                <td><h3>Password:</h3></td>
                <td><input type="password" name="password" id="">
                <?php
                    echo $passError;
                ?>
            </td>
            </tr>
            <tr>
                <td><h3>Please choose a file</h3></td>
                <td><input type="file" value="Choose file" name="dataFile" id="dataFile">
                <?php
                    echo $fileError;
                ?>
            </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="submit" name="submission">
                    <input type="reset" value="Reset">
                    <?php
                        echo $fileUpload;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>