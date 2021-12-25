<?php


if($_POST["message"]) {


mail("aryan.bhosale1719@gmail.com", $_POST['subject'],


$_POST['message']. "From:" $_POST['email']);


}


?>