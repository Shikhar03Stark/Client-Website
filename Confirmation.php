<?php
session_start();
 ?>
<!DOCTYPE>
<html>
<head>
  <meta charset ="UTF-8">
    <link rel ="stylesheet" type ="text/css" href = "Tandoor_Express_Asset.css">
  <title>Confirmation</title>
<!--form validation-->
<?php
  if(!isset($_SESSION['currentday'])){
  $_SESSION['currentday'] = date('j');
}
$today = date('j');
  if($today = $_SESSION['currentday']){
    if(!isset($_SESSION['order_number'])){
      $_SESSION['order_number'] = 1;
    }else{
  $_SESSION['order_number'] = $_SESSION['order_number'] + 1;
}
}
else{
  $_SESSION['currentday'] = date("j");
  $_SESSION['order_number'] = 1;
}

?>
<!--form validtation end-->
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

  <!--tile starts-->
  <div class = "tile">
    Personal Information<br><br>
    <form name = "conf" method="post" action = "Success.php">
      First Name*: <input type = text class = 'psl' name = "fname" placeholder="Your First Name"><br>
      Last Name*: <input type = "text" class = "psl" name = "lname" placeholder="Your Last Name"><br><br>
      House*: <input type = "text" class = psl name = "house" placeholder="1st Line of Address"><br>
      Street*: <input type = "text" class = psl name = "street" placeholder="2st Line of Address"><br>
      Pin Code*: <input type = "text" class = psl name = "pin" placeholder="000000" maxlength="6"><br><br>
      Phone*: <input type = "text" class = "psl" placeholder="10-digit Phone Number" name = "phone" maxlength="10"><br><br>
      Your Order:<br><br>
      <?php
        $n = $_REQUEST['nOrder'];
        $_SESSION['nOrder'] = $_REQUEST['nOrder'];
        for($i = 0;$i < $n; $i++ ){
          $file_name = "item".$i;
          $_SESSION[$file_name] = $_REQUEST[$file_name];
        echo $_REQUEST[$file_name]."<br>";
      }
      ?>
      <br><br>
      Total: <input type = "text" class = "psl" name = "total" id = "total" value ="<?php echo $_REQUEST['total']." INR"?>" readOnly><br>
      Grand Total: <input type="text" class = "psl" name= "gtotal" id= "gtotal" value = "<?php echo $_REQUEST['total']*(1.18)." INR"?>" readOnly>(18% tax)<br><br>
      <input type = "submit" value = "Place Order" class = "psl"> <br><br> <a href = "Tandoor_Express.php" class = "psl">HOME</a>
    </form>
  </div>
  <!-- tile ends-->

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
