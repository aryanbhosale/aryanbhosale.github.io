<?php 
    if(isset($_POST['submit'])){
        $to = "aryan.bhosale1719@gmail.com"; 
        $from = $_POST['email']; 
        $name = $_POST['name'];
        $subject = "Form submission";
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        $headers = "From: " . $from;
        if(mail($to,$subject,$message,$headers)){
            echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.";
        }
        else{
            echo "Seems like an error occured. Please try again with complete information."
        }
    }
?>