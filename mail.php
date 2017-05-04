<?php
     if(isset($_POST['submit'])){
     	$name=$_POST['name'];
     	$email=$_POST['email'];
     	$subjt=$_POST['subject'];
     	$msg=$_POST['message'];
     	$to='reddysrikanth096@gmail.com';
     	$subject='Form Submission';
     	$message="Name: ".$name."\n"."Subject: ".$subjt."\n"."Message: "."\n".$msg;
     	$headers="From: ".$email;
     	if(mail($to, $subject, $message, $headers)){
     		echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
     	}
     	else{
     		echo "Something went wrong!";


     	}

     	}
     	?>