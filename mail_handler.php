<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$to=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];  
		$subject='From HR';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$to;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>