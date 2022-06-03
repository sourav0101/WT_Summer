<?php
$FirstName=$_REQUEST["FirstName"]; 
$LastName=$_REQUEST["LastName"];
$Email=$_REQUEST["Email"];
$Password=$_REQUEST["Password"];
if(is_numeric($FirstName)){
    echo" Your First Name is in correct pattern"."<br>";
}
else{
    echo" Your First Name must have numbers"."<br>";
}
if(is_numeric($LastName)){
    echo" Your Last Name is in correct pattern"."<br>";
}
else{
    echo" Your Last Name must have numbers"."<br>";
}
if(isset($_POST["Designation"])){
    $Designation=$POST["Designation"];
    echo"your gender is ".$Designation;
}
else{
    echo" Please select your Designation first!"."<br>";
}

if(isset($_POST["Java"])){
    echo"You like ".$POST["Java"];
}
if(isset($_POST["PHP"])){
    echo"You like ".$POST["PHP"];
}
if(isset($_POST["C++"])){
    echo"You like ".$POST["C++"];
}
if(isset($_POST["Java"]) || isset($_POST["PHP"]) || isset($_POST["C++"])){
    echo"You have selected Checkbox";
}
else{
    echo"You have not selected any Checkbox"."<br>";
}

if(empty($Email)){
    echo" The Email is empty" .$Email."<br>";
}
else{
    echo" Your Email is".$Email."<br>";
}
if(strlen($Password)<6){
    echo" The Password can not be less than 6 characters!"."<br>";
}
else{
    echo" Your Password is Correct."."<br>";
}
?>
