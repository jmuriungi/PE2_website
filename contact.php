<?php
if(isset($_POST['email']) && isset($_POST['feedback']))
{
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];
  
  $to = 'preciousafh@outlook.com';
  $subject = "Feedback From Website";
  $feedbackMsg = $email." has the following feedback from the website:"."\n\n".$feedback;
  $headers = "From: ".$email;
  
  $send = mail($to, $subject, $feedbackMsg, $headers);
  if($send)
  {
    echo "Your feedback is greatly appreciated.";
  }
  else
  {
    echo "Something went wrong!";
  }
}
?>