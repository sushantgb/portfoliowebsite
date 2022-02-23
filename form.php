<?php 
if(isset($_POST['submit'])){
    $to = "sgbharat.joint@gmail.com"; // Owner's Email address
    $from = $_POST['email']; // Sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " " . " Wrote to you below:" . "\n\n" . $_POST['comment'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
?>