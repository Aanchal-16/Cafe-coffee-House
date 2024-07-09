<?php
session_start();

?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <style>
        *{
            margin:0;
        }
        #name:checked ~ .name{
            display:block;
        }
        #rno:checked ~ .rno{
            display:block;
        }
        table{
            border:5px;
            font-size:20px;
            width:70%;
            float:left;
        }
        .t1{
            font-size:30px;
        }
        .text-center{
            float:right;
            margin-top:-15px;
            margin-right:90px;
            font-size:30px;
        }
        .sidepanel{
            background:rgb(211,211,211);
            width:28%;
            float:right;
            margin-right:15px;
            OPACITY:2.6;
            border-radius:8px;
        }
        .b2{
            background:black;
            color:white;
            font-size:16px;
            border-radius:8px;
            height:30px;
        }
        </style>
        </head>
    <body style='font-size:20px;'><center>
        <h1 style="text-align:center;background:brown;color:white;height:50px; ">
        <a href='homepage.php'><button style='float:left;margin:10px 0 0 10px;height:25px;font-size:15px;background:black;color:white;'>Home</button></a>
        My Cart</h1><br><br>
        
        <table class="table" border='5' style="text-align:center;">
  <thead>
    <tr>
      <th scope="col">Sr no.</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key => $value)
    {
      $sr=$key+1;
      echo "<tr style='height:50px;'>
      <td>$sr</td>
      <td>$value[Item_Name]</td>
      <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
      <td>
      <form action='insertcart1.php' method='post' >
      <input type='number' class='iquantity' name='Mod_Quantity' onchange='this.form.submit()' min=1 max=5 value='$value[Quantity]' style='text-align:center;font-size:15px;'>
      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
      </form>
      </td>
      <td class='itotal'></td>
      <td>
      <form action='insertcart1.php' method='post'>
      <button name='Remove_Item' style='width:70px;background:red;color:white;border:1px solid red;font-size:15px;'>Delete</button>
      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
      </form>
      </td>
      </tr>";
    }
    if(isset($_POST['Remove_Item']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        print_r ($key);
      }
    }
    }
    ?>
  </tbody>
</table>
<div class='sidepanel'><br>
<h3 class='t1'>Grand Total: </h3><br>
    <h3 class='text-center'><div style='margin-right:90px;'>&#8377; &nbsp</div><div id="gtotal" style='margin-top:-34px;'></div></h3><br><br>
  <?php
  $c=mysqli_connect("localhost","root","","newproject");
  $q=mysqli_query($c,"SELECT * FROM `cinfo`");
  while($row=mysqli_fetch_array($q))
  {
$cm=$row['cid'];

  }
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {
  ?>
  <form action="purchase.php" method="post" id='Form'>
    
    <label style='float:left;margin:0 10px 0 20px;'>Full Name </label>
    <input type="text" name="fullname" 
    style='font-size:20px;width:90%;border: none;text-align:center;border-bottom: 2px solid grey;height:30px;' required><br><br>
    <label style='float:left;margin:0 10px 0 20px;'>Phone Number </label>
    <input type="text" class="form-control" name="phone_no"
    style='font-size:20px;width:90%;border: none;text-align:center;border-bottom: 2px solid grey;height:30px;' required><br><br>
    <label style='float:left;margin:0 10px 0 20px;'>Address </label>
    <input type="text" name="address" 
    style='font-size:20px;width:90%;border: none;text-align:center;border-bottom: 2px solid grey;height:30px;' required><br><br>
    <label style='float:left;margin:0 10px 0 20px;'>City </label>
    <input type="text" name="city" 
    style='font-size:20px;width:90%;border: none;text-align:center;border-bottom: 2px solid grey;height:30px;' required><br><br>
    <input type="radio" name="pay_mode" value="COD" checked>
    <label>Cash On Delivery</label>&nbsp&nbsp&nbsp
    <input type="radio" name="pay_mode" value="Card payment" id="name">
    <label>Pay with card</label><br> 
    <div class="Name" hidden><br>
            <label style='font-size:20px;float:left;margin-left:25px;'><br>Card Number : </label><br><input type='text' inputmode='numeric' pattern='[0-9]*' maxlength='16' name='cardno' value='' 
            style='font-size:20px;width:90%;border: none;text-align:center;border-bottom: 2px solid grey;height:40px;'><br>
            <label style='font-size:20px;float:left;margin-left:25px;'><br>Card Holder Name : </label><br><input type='text' name='chname' value='' 
            style='font-size:20px;width:90%;border: none;text-align:center;border-bottom: 2px solid grey;height:40px;'><br><br>

            <label style='font-size:20px;float:left;margin-left:25px;'>Valid till : </label><br><input type='text' name='validtill' value=''
            style='font-size:20px;width:40%;border: none;text-align:center;margin-left:25px;border-bottom: 2px solid grey;height:30px;float:left'>
            <label style='font-size:20px;float:right;margin:-22px 100px 0 0;'>CVV : </label><br><input type='text' name='cvv' value=''
            style='font-size:20px;width:25%;border: none;text-align:center;margin:-22px 50px 0 0;border-bottom: 2px solid grey;height:30px;float:right;'>      
          </div>
          <a href='purchase.php?MMID=$cm'><button type='submit' style='width:190px;margin:10px 0 -10px 160px;' class='b2' name='purchase'>Proceed To Pay</button></a>

          </form>
  <br>

    </div> 
<?php
  echo "";
   }
?>
  <script>

var gt=0;
var iprice=document.getElementsByClassName('iprice');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var gtotal=document.getElementById('gtotal');

function subTotal()
{
  gt=0;
  for(i=0;i<iprice.length;i++)
  {
    itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

    gt=gt+(iprice[i].value)*(iquantity[i].value);
  }
  gtotal.innerText=gt;
}

subTotal();

</script>
        </body>
        </html>