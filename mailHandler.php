<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $to = "aryan.bhosale1719@gmail.com"; 
        $from = $_POST['email']; 
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        $headers = "From: " . $from;
        mail($to,$subject,$message,$headers);
        if(mail($to,$subject,$message,$headers)){
            echo "Messages recieved";
        }
        else{
            echo "Seems like an error occured. Please try again with complete information.";
        }
    }
?>