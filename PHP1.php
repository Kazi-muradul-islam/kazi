<html>
<head> 
<title> 
This is practis
</title>
</head>
<body>
<p><b>writing some thing</b></p>

<?php
$str1 = "hello";
$str2 = "world";
$str3 = $str1." ".$str2;
echo $str3;
echo "<br>";
$str3 = $str1." ";
$str3 = $str3.$str2;
echo $str3."<br>";

$str3 = $str1." ";
$str3.= $str2;
echo $str3."<br>";
//1.converting a string to uppercase
//2.converting a string to lowercase
//3.converting the first letter of a string to uppercase
//4.converting the first letter of a string to lowercase


?>
<br>
<b>1.uppercase of $str3:</b><br><?php echo strtoupper($str3); ?><br><br>
<b>2.lowercase of $str3:</b><br><?php echo strtolower($str3); ?><br><br>

</body>
</html>

<html>
<head>
<h3>This is practic</h3>
</head>
<body>
<?php
echo "Hello world <br>";
$str1 = "BanglaDesh";
$str2 = "is";
$str3 = "  beautiful";
$str4 = $str1." ".$str2." ".$str3;
echo $str4."<br>";
$str4 =  $str1." ".$str2." ";
$str4 = $str4.$str3;
echo $str4."<br>";
?>
<br>
<b>1.uppercase of $str4:</b><br><?php echo strtoupper($str4);?><br><br>
<b>2.lowercase of $str4:</b><br><?php echo strtolower($str4);?><br><br>
<b>3.use capital letter in first letter of $str4:</b><br><?php echo ucfirst($str4);?><br><br>
<b>4.use capital letter in every word of $str4:</b><br><?php echo ucwords($str4);?><br><br>
<b>5.use small letter in first letter of $str4:</b><br><?php echo lcfirst($str4);?><br><br>
<b>6.The lenth of $str4:</b><br><?php echo strlen($str4);?><br><br>
<?php
echo "<b>7.Removin speace</b><br>";
$str5 = "we are";
$str6 = " Bangladeshi";
echo trim($str5.$str6)."<br><br>";
echo "<b>8.Finding stream from another stream</b><br>";
echo strstr($str5,"we")."<br><br>";
echo "<b>9.changeing the word</b><br>";
echo str_replace("we","all",$str5).$str6."<br><br>";
echo "<b>10.showing charecter from where to where</b><br>";
echo substr($str6,0,10)."<br><br>";
echo "<b>11.The positon of a string</b><br>";
echo strpos($str5,"are")."<br><br>";
?>
</body>
</html>

<html>
<head>
<h3> using number</h3>
</head>
<body>
<?php
$n1=10;
$n2=20;
$n3=30;
$n4=40;
$n5=($n3*$n4)/($n2+$n4)-$n1;
echo $n5."<br>";
$n6=10;
$n6-=5;
echo $n6."<br>";
$n6*=5;
echo $n6."<br>";
$n6+=5;
echo $n6."<br>";
$n6/=6;
echo $n6."<br>";
$n6=++$n6;
echo $n6."<br>";
echo "<b>floting number</b><br>";
$a1 = 10.3;
$a2 = 34.4;
$a3 = $a1/$a2;
echo $a3."<br>";
echo round($a3,3)."<br>";
echo ceil($a3)."<br>";
echo floor($a3)."<br>";
echo "<b>squre root :</b><br>";
$b = 9;
echo sqrt($b)."<br>";
echo "<b>power</b><br>";
echo pow($b,5)."<br>";
echo "<b>random number</b><br>";
echo rand(10,1000)."<br><br>";
echo "<b>Alernet random number</b><br>";
echo mt_rand();






?>
</body>
</html>

<html>
<head>
<h4>Array
</h4>
<body>
<?php
$a1= array(11,12,14,12);
$sum = $a1[0]+$a1[1]+$a1[2]+$a1[3];
echo $sum;
echo "<br>";
$a2 = array(23,45,"kazi_monjil",45.44);
echo $a2[0]."<br>";
echo $a2[1]."<br>";
echo $a2[2]."<br>";
echo $a2[3]."<br>";
$a3 = array(10,array("one","two","three"),56);
echo $a3[0]."<br>";
echo $a3[1][0]."<br>";
echo $a3[1][1]."<br>";
echo $a3[1][2]."<br>";
echo $a3[2]."<br>";
echo "<br>";
$a4 = array("First_name" => "Kazi","Last_name" => "Murad","Age" =>20);"<br>";
echo "First name:".$a4["First_name"]."<br>";
echo "Last name:".$a4["Last_name"]."<br>";
echo " Age:".$a4["Age"]."<br>";
$a5 = array(34,67,"kazi murad",56);
echo "<pre>";
print_r ($a5);
echo "</pre>";







?>
</body>
</html>

























