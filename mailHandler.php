<?php 
    if(isset($_POST['submit'])){
        $to = "aryan.bhosale1719@gmail.com"; 
        $from = $_POST['email']; 
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        $headers = "From: " . $from;
        if(mail($to,$subject,$message,$headers)){
            echo "Messages recieved";
        }
        else{
            echo "Seems like an error occured. Please try again with complete information.";
        }
    }
?>