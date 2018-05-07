<?php
include('metalPrice.php');
$metalPrice = new metalPrice();
echo "Gold EURO Price : " . $metalPrice->goldToEUR();
echo "<br>Gold USD Price : " . $metalPrice->goldToUSD();
echo "<br>Gold GPB Price : " . $metalPrice->goldToGPB();
echo "<br><br>Silver EURO Price : " . $metalPrice->silverToEUR();
echo "<br>Silver USD Price : " . $metalPrice->silverToUSD();
echo "<br>Silver GPB Price : " . $metalPrice->silverToGPB();
echo "<br><br>platinum EURO Price : " . $metalPrice->platinumToEUR();
echo "<br>platinum USD Price : " . $metalPrice->platinumToUSD();
echo "<br>platinum GPB Price : " . $metalPrice->platinumToGPB();
?>