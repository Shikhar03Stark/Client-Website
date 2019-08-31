<!DOCTYPE>
<html>
<head>
<meta charset ="UTF-8">
  <link rel ="stylesheet" type ="text/css" href = "Tandoor_Express_Asset.css">
<title> Tandoor Express Online</title>
<!--Javascript starts-->
<script type = "text/javascript">
var i = 0;
var total = 0;
  function toCart(n,p){
    var input = document.createElement('input');
    input.value = n;
    input.readOnly = true;
    input.className = 'item';
    input.name = "item"+i;
    document.order.appendChild(input);
    total = total + parseInt(p);
    document.getElementById('total').innerHTML = "Total: " + total + " INR";
    i = i + 1;

    document.order.total.value = total;
    document.order.nOrder.value = i;
  }
</script>
<!--Javascript ends-->
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

<!-- Body starts-->
<div>

  <!--side tile start-->
    <div class = "side_tile">
        Cart
        <hr color = "red">
        <div class = "overflow">
        <form name = "order" method = "post" action = "Confirmation.php">
          <input type = "text" name = "total" value = "0" hidden>
          <input type = "text" name = "nOrder" value = "0" hidden>
          <div class = "but">
            <input type = "Submit" value = "Check Out"> <span id = 'total'>Total: Nil</span>
          </div>
        </form>
      </div>
    </div>
  <!--side tile over-->

  <!--tile start -->
    <div class ="tile">
      Tandoor Express Special !
          <div class = "content" onclick = "toCart('Murg Tandoori','200')">
          <text name = "Murg_Tandoori" id = "200"> Murg Tandoori (Non-Veg)</text><div class = "price">INR 200</div>
          </div>

          <div class = "content" onclick = "toCart('Kadhai Paneer','175')">
          <text  name = "Kadhai_paneer" id = "175">Kadhai Paneer </text><div class ="price">INR 175</div>
          </div>

          <div class = "content" onclick = "toCart('Dal Makhni','150')">
          <text  name = "Dal_Makhni" id = "150">Dal Makhni </text><div class ="price">INR 150</div>
          </div>

          <div class = "content" onclick = "toCart('Tandoori Roti','10')">
          <text  name = "Tandoori_Roti" id = "10">Tandoori Roti</text><div class ="price">INR 10</div>
          </div>
      </div>

  <!-- tile over -->

  <!--Tile start-->
  <div class = "tile">
    Combo Meals
    <div class = "content" onclick = "toCart('Chole Chawal Combo','180')">
    <text  name = "Chole_Chawal" id = "180">Chole Chawal Combo</text><div class ="price">INR 180</div>
    </div>

    <div class = "content" onclick = "toCart('Chiken Curry with Rice Combo','220')">
    <text  name = "Chicken_Rice" id = "220">Chicken Curry with Rice Combo(Non-Veg)</text><div class ="price">INR 220</div>
    </div>

    <div class = "content"  onclick = "toCart('Mutton Curry with Rice Combo','250')">
    <text  name = "Mutton_Rice" id = "250">Mutton Curry with Rice Combo(Non-Veg)</text><div class ="price">INR 250</div>
    </div>
  </div>
  <!--tile over-->

  <!--tile start-->
    <div class = "tile">
      Breads
      <div class = "content" onclick = "toCart('Roomali Roti','20')">
      <text  name = "Roomali_Roti" id = "20">Roomali Roti</text><div class ="price">INR 20</div>
      </div>

      <div class = "content" onclick = "toCart('Tandoori Roti','20')">
      <text  name = "Tandoori_Roti" id = "20">Tandoori Roti</text><div class ="price">INR 20</div>
      </div>

      <div class = "content" onclick = "toCart('Plain Naan','18')">
      <text  name = "Plain_Naan" id = "18">Plain Naan</text><div class ="price">INR 18</div>
      </div>

      <div class = "content" onclick = "toCart('Butter Naan','25')">
      <text  name = "Butter_Naan" id = "25">Butter Naan</text><div class ="price">INR 25</div>
      </div>

      <div class = "content" onclick = "toCart('Lachha Parantha','30')">
      <text  name = "Lachha_Parantha" id = "30">Lachha Parantha</text><div class ="price">INR 30</div>
      </div>

      <div class = "content" onclick = "toCart('Pudina Parantha','40')">
      <text  name = "Pudina_Parantha" id = "40">Pudina Parantha</text><div class ="price">INR 40</div>
      </div>
    </div>
  <!--tile over-->
  <!--tile start-->
    <div class = "tile">
      Main Course
        <div class = "content" onclick = "toCart('Shahi Paneer','180')">
          <text  name = "Shahi_Paneer" id = "180">Shahi Paneer</text><div class ="price">INR 180</div>
        </div>

        <div class = "content" onclick = "toCart('Dal Makhni','150')">
        <text  name = "Dal Makhni" id = "150">Dal Makhni</text><div class ="price">INR 150</div>
      </div>

      <div class = "content" onclick = "toCart('Kadhai Paneer','175')">
        <text  name = "Kadhai_Paneer" id = "175">Kadhai Paneer</text><div class ="price">INR 175</div>
      </div>

      <div class = "content" onclick = "toCart('Pindi Chole','150')">
        <text  name = "Pindi_Chole" id = "150">Pindi Chole</text><div class ="price">INR 150</div>
      </div>

      <div class = "content" onclick = "toCart('Malai Kofta','160')">
        <text  name = "Malai_Kofta" id = "160">Malai Kofta</text><div class ="price">INR 160</div>
      </div>

      <div class = "content" onclick = "toCart('Mater Paneer','180')">
        <text  name = "Mater_Paneer" id = "180">Mater Paneer</text><div class ="price">INR 180</div>
      </div>

      <div class = "content" onclick = "toCart('Dum_Aloo','150')">
        <text  name = "Dum_Aloo" id = "150">Dum Aloo</text><div class ="price">INR 150</div>
      </div>

      <div class = "content" onclick = "toCart('Dal Tadka','160')">
        <text  name = "Dal_Tadka" id = "160">Dal Tadkha</text><div class ="price">INR 160</div>
      </div>

      <div class = "content" onclick = "toCart('Kadhai Chicken','200')">
        <text  name = "Kadhai_Chicken" id = "200">Kadhai Chicken(Non-Veg)</text><div class ="price">INR 200</div>
      </div>

      <div class = "content" onclick = "toCart('Butter Chicken','220')">
        <text  name = "Butter_Chicken" id = "220">Butter Chicken(Non-Veg)</text><div class ="price">INR 220</div>
      </div>

      <div class = "content" onclick = "toCart('Kadhai Mutton','360')">
        <text  name = "Kadhai_Mutton" id = "360">Kadhai Mutton</text><div class ="price">INR 360</div>
      </div>
    </div>
  <!--tile over-->
    <div class = "tile">
      Biryani
      <div class = "content" onclick = "toCart('Veg Biryani','200')">
        <text  name = "Veg_Biryani" id = "200">Veg Biryani</text><div class ="price">INR 200</div>
      </div>

      <div class = "content" onclick = "toCart('Chicken Biryani','250')">
        <text  name = "Chicken_Biryani" id = "250">Chicken Biryani(Non-Veg)</text><div class ="price">INR 250</div>
      </div>

      <div class = "content" onclick = "toCart('Veg Pulao','190')">
        <text  name = "Veg_Pulao" id = "190">Veg Pulao</text><div class ="price">INR 190</div>
      </div>

      <div class = "content" onclick = "toCart('Steamed Rice','160')">
        <text  name = "Steamed_Rice" id = "160">Steamed Rice</text><div class ="price">INR 160</div>
      </div>
    </div>
  <!--tile start-->

  <!--tile over-->
</div>
<!--Body over-->

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

</html>
