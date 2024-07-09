
<?php
$c=mysqli_connect("localhost","root","","coffee");
if(isset($_POST['b1']))
{
$image=$_FILES['iimage'];
$img_loc=$_FILES['iimage']['tmp_name'];
$img_name=$_FILES['iimage']['name'];
$img_des= "uploadimg/".$img_name;
move_uploaded_file($img_loc,'uploadimg/'.$img_name);
$name=$_POST['iname'];
$quantity=$_POST['iquantity'];
$price=$_POST['iprice'];
$category=$_POST['icategory'];
$desc=$_POST['idesc'];
$size=$_POST['isize'];
$q1=mysqli_query($c,"insert into idetails(image,iname,iquantity,iprice,icategory,idesc,isize) values('$img_des','$name','$quantity','$price','$category','$desc','$size')");
echo "<script>window.location.href='addproducts.php'</script>";
}

?>