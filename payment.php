
    
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
$servername= "localhost";
    $username= "root";
    $password= "";
    $database="coffee";
$conn= mysqli_connect($servername,$username,$password,$database);
if($conn){
echo"connection established";
}
else{
echo"not connected";
}
if(isset($_POST['submit'])) 
{
    $name=$_POST['name'];
    $floor=$_POST['floor'];
    $land=$_POST['land'];
    $phno=$_POST['phno'];
    $mail=$_POST['mail'];
    $pay=$_POST['pay'];
    $cardholder=$_POST['cardholder'];
    $email=$_POST['email'];
    $cno=$_POST['cno'];
    $cvv=$_POST['cvv'];
    $id=$_POST['id'];
    
    
    $sql=("INSERT INTO `paymentc`(`name`, `floor`, `land`, `phno`, `mail`, `pay`, `cardholder`, `email`, `cno`, `cvv`, `id`) VALUES ('$name','$floor','$land','$phno','$mail','$pay','$cardholder','$email','$cno','$cvv','$id')");
    $sql=mysqli_query($conn,$sql);
#echo "<script>window.location.href='drink.html'; </script>";

if($sql){
echo "inserted";
}
else{
echo "not";
}
#echo "<script>window.open('drink.html')</script>";

include "lastpg.html";
}
}
#mysqli_close($conn);

?>
