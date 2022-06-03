<?php
$email=$_POST['email'];
$password=$_POST['password'];
$fp = fopen('log.txt', 'r');
$a=array(); 
while($line = fgets($fp)) {
        array_push($a,"$line");
} 
fclose($fp);
$a=array_map('trim', $a);
$ar=array_values($a);
if (in_array($email, $ar)){
         #echo "Successful";
         $check=true;
     }
if (in_array($password, $ar)){
        #echo "Successful";
        $check1=true;
    }
if($check==true && $check1==true){
    include("sucess.html");
}
else{
echo "YOUR PASSWORD IS WRONG";
echo "
";
echo"Retype Your Password";
include("in.html");
}
?>
