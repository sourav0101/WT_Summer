<?php
$firstnameError = "";
$lastnameError = "";
$ageError = '';
$designationError = "";
$emailError = "";
$passError = "";
$lanError = "";
$fileError = "";
$designation = "";
$fileUpload = "";

if(isset($_POST["submission"])){
    $firstName = $_REQUEST["firstName"];
    if($firstName == ""){
        $firstnameError = "can not be empty";
    }
    elseif(is_numeric($_REQUEST["firstName"])){
        $firstnameError = "First name cannot contain numaric values"  . "<br>";
    }
    else{
        
    }
    $lastName = $_REQUEST["lastName"];
    if($lastName == ""){
        $lastnameError = "can not be empty";
    }
    elseif(is_numeric($_REQUEST["lastName"])){
        $lastnameError = "Last name cannot contain numaric values"  . "<br>";
    }
    else{
        
    }

    $age = $_REQUEST["age"];
    if($age == ""){
        $ageError = "can not be empty";
    }
    elseif(is_numeric($_REQUEST["age"] == false)){
        $lastnameError = "Age must contain numaric values"  . "<br>";
    }
    else{

    }
    
    
    if(empty($_REQUEST["designation"])){
        $designationError = "Please select your designation";
    }
    else{
        $designation = $_REQUEST["designation"];
    }
    
    $email = $_REQUEST["email"];
    if($email == ""){
        $emailError = "Email field cannot be empty"  . "<br>";
    }
    else{
       
    }
    
    $password = $_REQUEST["password"];
    if(strlen($password) < 7){
        $passError =  "Password must contain more then 6 charecters."  . "<br>";
    }
    $preferredLan = "";
    if(isset($_REQUEST["java"]) || isset($_REQUEST["php"]) || isset($_REQUEST["cpp"])){
        if(isset($_REQUEST["java"]) && isset($_REQUEST["php"])){
            $preferredLan = $_REQUEST["java"] . " and " . $_REQUEST["php"];
        }
        elseif(isset($_REQUEST["php"]) && isset($_REQUEST["cpp"])){
            $preferredLan = $_REQUEST["php"] . " and " . $_REQUEST["cpp"];
        }
        elseif(isset($_REQUEST["java"]) && isset($_REQUEST["cpp"])){
            $preferredLan = $_REQUEST["java"] . " and " . $_REQUEST["cpp"];
        }
        elseif(isset($_REQUEST["java"])){
            $preferredLan = $_REQUEST["java"];
        }
        elseif(isset($_REQUEST["php"])){
            $preferredLan = $_REQUEST["php"];
        }
        else{
            $preferredLan = $_REQUEST["cpp"];
        }
    }
    else{
        $lanError =  "Please select a preferred Language";
    }
    $file = "";
    if(empty($_FILES["dataFile"]["name"])){
        $fileError = "No file attached";
    }
    else{
        if(move_uploaded_file($_FILES["dataFile"]["tmp_name"], "../uploads/".$_FILES["dataFile"]["name"])){
            $file = "../uploads/".$_FILES["dataFile"]["name"];
        }
        else{
            $fileError = "Failed to upload file";
        }
    }
    
    $filecontents=file_get_contents("../data/data.json",true);
    $arrphp=json_decode($filecontents);
    $myarray = array(
        "username"=>$firstName . " " . $lastName,
        "age" => $age,
        'designation' => $designation,
        'preferredLanguage' => $preferredLan,
        'email' => $email,
        'password' => $password,
        'fileName' => $file
  
    );
    
    $arrphp []=$myarray;
    $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
    if(file_put_contents("../data/data.json",$jsonarr))
    {
        $fileUpload = "Submited";
    }
}
?>