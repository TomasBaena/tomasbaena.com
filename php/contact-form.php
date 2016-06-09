<?php
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $message=$_POST['message'];         
    $from="From: $name<$email>\r\nReturn-path: $email"; 
    $subject="Message sent using your contact form"; 
    if (mail("lumakiapps@gmail.com", $subject, $message, $from)){
    	echo 'success';
    }else{
    	echo 'error';
    }
    
?>