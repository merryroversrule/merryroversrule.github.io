<?php
if(isset($_POST['email'])) {
    $email_to = "to@domain.com";
    $email_subject = "Email subject";
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['messageBody']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($messageBody)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <div class="feedback">Thank you for getting in touch! I'll try to respond to you very soon!</div>
  <?php
}
