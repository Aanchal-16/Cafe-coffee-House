
    
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $servername= "localhost";
    $username= "root";
    $password= "";
    $database="coffee";
$conn= mysqli_connect($servername,$username,$password,$database);
if($conn){
echo"connection established ";
}
else{
echo"not connected";
}
if(isset($_POST['submit'])) 
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pass2=$_POST['pass2'];
    
    
    $sql=(" INSERT INTO `register`(`name`, `email`, `password`, `pass2`) VALUES ('$name','$email','$password','$pass2')");
    $sql=mysqli_query($conn,$sql);
#echo "<script>window.location.href='drink.html'; </script>";

if($sql){
echo " inserted";
}
else{
echo " not";
}
#echo "<script>window.open('drink.html')</script>";

include "drink.html";
}
}
#mysqli_close($conn);

?>
