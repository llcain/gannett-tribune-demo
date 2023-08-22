<?php
    if(!empty($_POST["send"])) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $userPhone = $_POST["userPhone"];
        $userMessage = $_POST["userMessage"];
        $toEmail = "llcain2012@gmail.com";

        $mailHeaders = "Name: " . $firstName . $lastName .
        "\r\n Email: " . $email .
        "\r\n userPhone: " . $userPhone .
        "\r\n Message: " . $userMessage . "\r\n";

        if(mail($toEmail, $firstName, $lastName, $mailHeaders)) {
            $message = "Your information is Received!";
        }


    }


?>