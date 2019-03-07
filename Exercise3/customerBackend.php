<link rel = "stylesheet" href = "style.css">
<center>
<h1>Magic Sale!</h1><br>
<h3><i>Receipt</i></h3>
</center>

<table align = "center" style="width:80%">
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  function shipping($s){
    if($s == "3day"){
      return 5;
    }
    else if($s == "overnight"){
      return 50;
    }
    else if($s == "7day"){
      return 0;
    }
  }

  $rabbits = $_POST["rabbit"];
  $wands = $_POST["wand"];
  $handkerchiefs = $_POST["handkerchief"];
  $user = $_POST["user"];
  $password = $_POST["password"];
  $ship = $_POST["shipping"];
  $total = 19.99*$rabbits + 9.99*$sandwiches + 4.99*$dogs + shipping($ship);

  echo "<p>Username: ".$user."</p>";
  echo "<p>Password: ".$pass."</p>";

  echo "<tr>";
  echo  "<th></th>";
  echo  "<th>Quantity</th>";
  echo  "<th>Price</th>";
  echo  "<th>Subtotal</th>";
  echo "</tr>";
  echo "<tr>";

  echo  "<td>Rabbits</td>";
  echo "<td>".$rabbits."</td>";
  echo "<td>$19.99</td>";
  echo "<td>$".($rabbits*19.99)."</td>";
  echo "</tr>";
  echo "<tr>";

  echo  "<td>Wands</td>";
  echo "<td>".$wands."</td>";
  echo "<td>$9.99</td>";
  echo "<td>$".($wands*9.99)."</td>";
  echo "</tr>";
  echo "<tr>";

  echo  "<td>Handkerchiefs</td>";
  echo "<td>".$handkerchiefs."</td>";
  echo "<td>$4.99</td>";
  echo "<td>$".($handkerchiefs*4.99)."</td>";
  echo "</tr>";
  echo "<tr>";

  echo "<th>Total:</th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th>$".$total.".00</th>";
  echo "</tr>";
?>
</table>
