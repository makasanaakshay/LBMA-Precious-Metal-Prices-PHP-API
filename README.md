# LBMA Precious Metal Prices

This API collecting data from LBMA's official site http://www.lbma.org.uk. Which update gold price twice in a day onr this page http://www.lbma.org.uk/precious-metal-prices.

The London bullion market is a wholesale over-the-counter market for the trading of gold and silver. Trading is conducted among members of the London Bullion Market Association (LBMA), loosely overseen by the Bank of England. Most of the members are major international banks or bullion dealers and refiners.

From 1 April 2018, the LBMA Gold and Silver Prices on this page will not be available until midnight London time on the date that the prices are set. This is in line with the revised arrangements for delayed redistribution of the LBMA Gold Price and LBMA Silver Price recently announced by ICE Benchmark Administration (IBA) and is consistent with the timing of the publication of the LBMA Platinum prices. Customers that wish to access the LBMA Gold and Silver Prices in real-time should contact a market data redistributor.

## Getting Started

This is very simple API to intigrate as it onle single class by using this class you can call class method using object of that class. So using below link daonload that class file. and check example to implement it

## Download this file 

![metalPrice.php](https://github.com/makasanaakshay/Precious-Metal-Prices-PHP-API/blob/master/metalPrice.php)


## Example

Once you have metalPrice.php, first you need to include this file and then you can call method as listed below to get metal price using.


```php
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
```

