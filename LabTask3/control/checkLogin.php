<?php
    $loginError = "";
    
    $verifyAdmin = file_get_contents("../data.json", true);
    $data =  json_decode($verifyAdmin);

    if(isset($_POST["submit"])){
        if(empty($_REQUEST["username"])||empty($_REQUEST["password"])){
            $loginError = 'None of the fields cannot be empty';
        }
        else{
        
            foreach($data as $key=>$value){
                if($value->username == $_REQUEST["username"] && $value->password == $_REQUEST["password"]){
                    $_SESSION["username"] = $_REQUEST["username"];
                    header("Location: ../view/home.php");
                }
                else{
                    $loginError = 'No User found';
                }
            }
        }
}
?>