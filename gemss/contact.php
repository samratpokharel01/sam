<?php
$name = $_REQUEST["name"]
$email = $_REQUEST["email"]
$subject = $_REQUEST["subject"]
$message = $_REQUEST["message"];
if (empty($name) || empty($email) || empty($subject) || empty($message))
{
    echo"Please fill all the feilds";
}
else
{
    mail("samratpokharelofficial@gmail.com","From Website","$message","From: $name <$email");
echo"<script type='text/javascript'>alert('your message sent successfully');
window.history.log(-1)
</script>
}

?>