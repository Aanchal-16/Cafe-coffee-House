
<?php
$c=mysqli_connect("localhost","root","","coffee");

$q=mysqli_query($c, "SELECT * FROM `idetails");

echo "<div class='productform'>
<form method='post' action='insert.php' enctype='multipart/form-data'>";
echo "<center><h2 style='color:brown;'>Add new product </h2></center><br>";
echo "<span>Name of Product : </span><br><input type='text' name='iname' required><br><br>";
echo "<span>Quantity : </span><br><input type='number' name='iquantity' required><br><br>";
echo "<span>Price : </span><br><input type='text' name='iprice' required><br><br>";
echo "<span>Category : </span><br><select name='icategory' required>
<option value='Drinks'>Drinks</option>
<option value='Beans'>Beans</option>
<option value='Accesories'>Accesories</option>
</select><br><br>";
echo "<span>Description : </span><br>
<textarea name='idesc' required></textarea><br><br>";
echo "<div class='proimage'><span>Size : </span><br><select name='isize' style='width:450px;' required>
<option value='S'>S</option>
<option value='M'>M</option>
<option value='L'>L</option>
</select><br><br>";
echo "<span>Image : </span><br><br>
<div class='sep'>
<span style='margin-left:10px;color:grey;'><center>Upload your file here</center></span>
<input type='file' name='iimage' accept='.jpg, .jpeg, .png' 
style='margin:20px 0 0 90px;font-size:15px;' required>
</div>
<br><br>";
echo "<input type='submit' name='b1' value='Go' style='width:450px;padding:5px;'></div>";
echo "</form></div>";
?>
<html>
    <head>
        <style>
            *{
                background: white;
                padding:0;
                margin:0;
            }
            .productform span{
                font-size: 25px;
            }
            .productform input{
                font-size: 20px;
                width: 50%;
                text-align:center;
            }
            .productform select{
                font-size: 20px;
                width: 50%;
                text-align:center;
            }
            textarea{
                width:50%;
                height:100px;
                font-size:20px;
            }
            .proimage{
                margin-left:550px;
                margin-top:-446px;
            }
            .sep{
                height:200px;
                width:450px;
                border: 1px solid grey;
                border:dashed grey;
            }
            th{
                height:50px;
                font-size:22px;
            }
            td{
                height:30px;
                font-size:18px;
            }
            .productform{
                background-color:white;
                margin-left:270px;
                width:1050px;
                height: 520px;
                padding:20px;
                margin-top:80px;
            }
        </style>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        
    </body>
</html>

<!--uploads/<?php echo $row['image']; ?>' alt='i1' height='75' width='75'>-->
<!--<img src="data:image;base64,'.base64_encode($row['image']).'" alt="i1" style="width:80px;height:60px;" >-->