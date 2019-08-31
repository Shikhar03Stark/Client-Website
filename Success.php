<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
<meta charset ="UTF-8">
  <link rel ="stylesheet" type ="text/css" href = "Tandoor_Express_Asset.css">
<title>Success</title>
</head>
<body bgcolor = "#F5F5F5" text = "#585858">
  <!-- Head start-->
  <div class = "head">
    <a href="Tandoor_Express_Online.php" class = "head">Tandoor Express Online<sup>TM</sup></a><div class = "moto">Bon Appetit</div>
  </div>
  <!-- Head Over-->
  <!-- SubHead Start-->
  <div class = "subhead">
    Delhi(NCR) Sector 82
  </div>
  <!-- SubHead over-->

  <!--Tile starts-->
  <div class = "tile">
    Order Success<br><br>
    <div class = "content">
    <?php
    $fname = strtoupper($_REQUEST['fname']); $lname = strtoupper($_REQUEST['lname']);
    $house = $_REQUEST['house']; $street = $_REQUEST['street'];
    $pin = $_REQUEST['pin']; $phone = $_REQUEST['phone'];
    $total = $_REQUEST['total']; $gtotal = $_REQUEST['gtotal'];
    $orderID = $_SESSION['order_number'].date("_j-n-Y");
    //create orderID file

    $location = "OrderIDs.txt";
    $handle = fopen($location, "a+") or die("Unable to Append to file!!");
    $orderID = $_SESSION['order_number'].date("_j-n-Y");
    $txt = "$orderID.\r\n";
    fwrite($handle, $txt);
    $txt = "First:$fname.\r\n";
    fwrite($handle, $txt);
    $txt = "Last:$lname.\r\n";
    fwrite($handle, $txt);
    $txt = "Add1:$house,\r\n";
    fwrite($handle, $txt);
    $txt = "Add2:$street.\r\n";
    fwrite($handle, $txt);
    $txt = "Pin Code:$pin.\r\n";
    fwrite($handle, $txt);
    $txt = "Phone:$phone.\r\n";
    fwrite($handle, $txt);
    $txt = "ORDER:\r\n";
    fwrite($handle, $txt);
    $n = $_SESSION['nOrder'];
    for($i = 0; $i < $n; $i++){
      $item = "item".$i;
      $txt = "$_SESSION[$item]\r\n";
      fwrite($handle, $txt);
    }
    $txt = "Total:$total INR\r\n";
    fwrite($handle, $txt);
    $txt = "Grand Total:$gtotal INR\r\n -------------------- \r\n";
    fwrite($handle, $txt);
    fclose($handle);
    //end file

    $_SESSION['orderID'] = $orderID;
      echo "Dear $fname, your order has been placed at the Kitchen.<br> Delivery Garanteed in under 60 minutes.<br><br>";
      echo "Your OrderID is $orderID <br><br>";
      echo "For any assistance Call: 8826367276."
    ?>
  </div><br>
  <a href = "Tandoor_Express.php" class = "psl">HOME</a>
  </div>
  <!--Tile ends-->

  <!--Footer-->
  <div class="sub_footer">

  </div>

  <div class = "footer">

  Tandoor Express Enterprises &copy <?php echo date('Y'); ?> <br>
  Managed, Designed, Technician:<br>
  <p class = "harshit">Harshit Vishwakarma</p>
  <div class = "logo">
    T E
  </div>
  </div>
  <!--Footer-->
</body>
</html>
