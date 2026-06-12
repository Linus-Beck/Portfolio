<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])){
    if(filter_var(trim($_POST['email'], FILTER_VALIDATE_EMAIL))){
        $email = $_POST["email"];
        $massage = "Hey ich hätte Interesse, Grüße: $email" ;
        mail("linus.beck.kl@icloud.com", "Interesse durch Portfolio", $massage);
        header('Location: ./templates/linus.html');
        exit();
    }else{
        $emailErr = "Invalid E-Mail Format";
    }
}