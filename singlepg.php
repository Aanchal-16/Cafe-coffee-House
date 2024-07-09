
<?php 
$PID=$_GET['PID'];
$c=mysqli_connect("localhost","root","","coffee");
$q=mysqli_query($c,"select * from idetails WHERE iid=$PID");
while($row=mysqli_fetch_array($q))
    {   
        $check_page=$row['category'];
        if($check_page === 'Shoes')
        {
            echo "<div style='margin-top:60px;'>
            <input type='image' class='img' src='$row[image]'
            style='height:500px;width:500px;border:1px solid grey;margin:30px 0 0 20px;'
            value='$row[image]' name='iimage'>
            <form action='insertcart10.php' method='post' enctype='multipart/form-data'>
            <div class='align2'>
            <h3 style='text-align:center;font-size:26px;'>$row[iname]</h3><br>
            <hr><br>
            <h3 style='color:grey;'>$row[Description]</h3><br>
            <h4>Price: &#8377; $row[price]</h4>
            <span style='font-size:22px;'>Quantity : <select name='iquantity'
            style='text-align:center;width:50px;
            height:25px;font-size:18px;margin-top:20px;'>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option></select>
            </span><br>
            <input type='hidden' name='iname' class='prodname' value='$row[iname]'>
            <input type='hidden' name='iprice' value='$row[price]'>
            <input type='hidden' name='Img' value='$row[image]'>
            <input type='hidden' name='category' value='$row[category]'>
            <button type='submit' class='b1' name='add_to_cart'>ADD TO CART</button>&nbsp&nbsp&nbsp&nbsp
            <button type='submit' class='b2' name='add_to_cart'>BUY NOW</button>
            </div>
            </form></div>";
        }  
        else{
            echo "<div style='margin-top:60px;'>
            <input type='image' class='img' src='$row[image]'
            style='height:500px;width:500px;border:1px solid grey;margin:30px 0 0 20px;'>
            <form action='insertcart10.php' method='post' enctype='multipart/form-data'>
            <div class='align2'>
            <h3 style='text-align:center;font-size:26px;'>$row[iname]</h3><br>
            <hr><br>
            <input type='hidden' name='iname' class='prodname' value='$row[iname]'>
            <input type='hidden' name='iprice' value='$row[price]'>
            <h3 style='color:grey;'>$row[Description]</h3><br>
            <h4>Price: &#8377; $row[price]</h4>
            <span style='font-size:22px;'>Quantity : <select name='iquantity'
            style='text-align:center;width:50px;
            height:25px;font-size:18px;margin-top:20px;'>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option></select>
            </span><br>
            <br><button type='submit' class='b1' name='add_to_cart'>ADD TO CART</button>&nbsp&nbsp&nbsp&nbsp
            <button type='submit' class='b2' name='add_to_cart'>BUY NOW</button>
            </div>
            <input type='hidden' name='iname' class='prodname' value='$row[iname]'>
            <input type='hidden' name='iprice' value='$row[price]'>
            <input type='hidden' name='Img' value='$row[image]'>
            <input type='hidden' name='r1' value='-'>
            <input type='hidden' name='category' value='$row[category]'>
            </form></div>";
        }
    }
?>

<html>
    <head>
        <style>
            *{
                margin:0;
                padding:0;
            }
            .align2{
                margin-left:600px;
                font-size:30px;
                margin-top:-500px;
            }
            .b1{
                font-size:18px;
                width:300px;
                height:40px;
                background-color:yellow;
                border:none;
                border-radius:10px;
                box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);
            }
            .b2{
                font-size:18px;
                width:300px;
                height:40px;
                border:1px solid blue;
                background-color:white;
                color:blue;
                border-radius:10px;
                box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);
            }
            .b2:hover{
                background-color:blue;
                color:white;
            }
            .b1:hover{
                border:1px solid black;
            }
            hr{
                width:730px;
            }
            input[type='radio']{
                width:50px;
                height:20px;
                accent-color:blue;
            }
            label{
                font-size:22px;
            }
        </style>
            <link rel="stylesheet" href="homepgstyle.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <form>
        </form>
    </body>
</html>