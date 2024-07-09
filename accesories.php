<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<style>
    main{
    margin: 10px;
    display: flex;
    flex-wrap: wrap;
    padding:0;
}
main .card{
    max-width:300px;
    flex: 1 1 210px;
    text-align: center;
    height: 410px;
    border: 1px solid lightgray;
    margin: 20px;
}
.part{
    margin-top:;
    font-size:20px;
    text-align:left;
    margin-left:10px;
}
</style>
</head>
<body style="margin-top:80px;">

<main>
<?php
$c=mysqli_connect("localhost","root","","coffee");
$record=mysqli_query($c,"SELECT * FROM `idetails`");
while($row=mysqli_fetch_array($record))
{
    $check_page=$row['category'];
    if($check_page === 'Accesories')
    {
echo "
<div class='card'>
<div class='image'>
<form action='insertcart1.php' method='post' enctype='multipart/form-data'>
<img src='$row[image]' style='width:260px;height:330px;'></a><br>
</div>
<div class='part'>
<font>$row[iname]</font>
<input type='hidden' name='iname' class='prodname' value='$row[iname]'>
<input type='hidden' name='iprice' value='$row[price]'>
<br><b>&#8377; $row[price]</b>
<a href='singlepg.php?PID=$row[iid]'
style='float:right; margin-right:10px;color:blue;cursor:pointer;'>View Product</a>
</div>
</form>
</div>";
}
}
?>
</main>
</body>
</html>