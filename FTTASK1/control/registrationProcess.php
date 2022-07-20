<?php
    include("../model/databaseConnection.php");
    $data = "";
    $registrationError = "";
    $language = "";

    if(isset($_REQUEST["java"]) || isset($_REQUEST["php"]) || isset($_REQUEST["cpp"])){
        if(isset($_REQUEST["java"]) && isset($_REQUEST["php"])){
            $language =  $_REQUEST["java"] . "," . $_REQUEST["php"];
        }
        elseif(isset($_REQUEST["php"]) && isset($_REQUEST["cpp"])){
            $language = $_REQUEST["php"] . "," . $_REQUEST["cpp"];
        }
        elseif(isset($_REQUEST["java"]) && isset($_REQUEST["cpp"])){
            $language = $_REQUEST["java"] . "," . $_REQUEST["cpp"];
        }
        elseif(isset($_REQUEST["java"])){
            $language = $_REQUEST["java"];
        }
        elseif(isset($_REQUEST["php"])){
            $language = $_REQUEST["php"];
        }
        else{
            $language = $_REQUEST["cpp"];
        }
    }

    $connection = new databaseConnection();
    $connectionObject = $connection->openConnection();
    $data = $connection->showAll($connectionObject);
    if($data->num_rows > 0){
        $datas = $data;         
    }

    if(isset($_POST['registration'])){
    
        $registerUser = $connection->userRegistration($connectionObject, "employee", $_REQUEST["firstName"] , $_REQUEST["lastName"], $_REQUEST["age"],$_REQUEST["designation"], $language, $_REQUEST["email"], $_REQUEST["password"], $_FILES["myfile"]["name"]);
        if($registerUser){
            $registrationError = "Registration Successful";
        }
        else{
            $registrationError = $connection->error;
        }
    
        
        }
        $connection->closeConnection($connectionObject);
?>