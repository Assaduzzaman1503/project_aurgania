<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name   = validate($_POST['name']);
  $email  = validate($_POST['email']);
  $mobile = validate($_POST['mobile']);
  $msg    = validate($_POST['message']);

}

  $to_email = "asaduzzaman1503@gmail.com";
  $subject =  "Email Test";
  
  $message_body = $msg."\r\n\r\n-".$name."\r\nEmail: ".$email."\r\nPhone Number: ". $mobile ;
  $headers = 'Hello';
    $send_mail = mail($to_email, $subject, $message_body, $headers );

function validate ($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($sendMail)
{
echo "Email Sent Successfully";
}
else

{
echo "Mail Failed";
}
?>