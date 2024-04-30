<?php

$to = "nikhilrathore8866@gmail.com";
$message = "Madhu-Cookwares";

$headers = "From: Shree-Enterprises-Madhu\r\n";
$headers .= "Reply-To: info@madhucookwares.com\r\n";
$subject = "Enquiry From website :Madhu Cookware";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";




$message = "";
$message .= "
  
    Name :".$_REQUEST['name']."
    Email :".$_REQUEST['email']."
    Mobile :".$_REQUEST['Phone']."
    Type   :".$_REQUEST['cars']." 
    Message :".$_REQUEST['message']."
";
$message .= "";

mail($to, $subject, $message, $headers);
if($mail)
{
?>
<script language="javascript">

  document.location="thanks.html";
</script>

<?php
}
else
{
?>  
<script language="javascript">

  document.location="thanks.php";
</script>
<?php }?>