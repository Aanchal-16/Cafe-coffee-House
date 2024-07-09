
    
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
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    $sql=("INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')");
    $sql=mysqli_query($conn,$sql);
#echo "<script>window.location.href='drink.html'; </script>";

if($sql){
echo " inserted";
}
else{
echo "not";
}
#echo "<script>window.open('drink.html')</script>";

include "drink.html";
}
}
#mysqli_close($conn);

?>
