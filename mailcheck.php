<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$msg = $_POST['message'];

}

	$to_email = "rokan.faith@gmail.com";
	$subject =  "Email Test";
	
	$message_body = $msg."\r\n\r\n-".$name."\r\nEmail: ".$email."\r\nPhone Number: ". $mobile ;
	$headers = 'Hello';
    $send_mail = mail($to_email, $subject, $message_body, $headers );

if($sendMail)
{
echo "Email Sent Successfully";
}
else

{
echo "Mail Failed";
}
?>