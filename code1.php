<html>
<head>
<title>
My First Program
</title>
</head>
<body>
    <h2>Code 1</h2>
    
<?php
echo 
"<h3>"."This is my first program"."</h3>";
echo 
"<h5>"."I am trying to print a string in the browser window"."</h5>";
?>
    <h2>Code 2</h2>
<?php
$string1  = 'First String assigned to a variable called $String1';
$string2  = 'Second String assigned to a variable called $String2';
echo 
"<h1>".$string1."</h1>";
echo 
"<h2>".$string2."</h2>";
?>
    <h2>Code 3</h2>
<?php
$number1 = '5';
$number2 = '10';
echo "<h3>I am demonstrating different arithmetic functions</h3>";
echo "Addition : ". ($number1 + $number2) ."<br><br>";
echo "Subtraction : ". ($number1 - $number2) ."<br><br>";
echo "Division : " . ($number1 / $number2) ."<br><br>";
echo "Multiplication : " . ($number1 * $number2) ."<br><br>";
?>
    <h2>Code 4</h2>
<?php
$number1 = '5';
$number2 = '10';
$integer3 = '15';
$integer4 = '20';
echo "<h3>I am demonstrating different arithmetic functions</h3>";
echo "Addition : ". ($number1 + $number2 + $integer3 + $integer4) ."<br><br>";
echo "Subtraction : ". ($number1 - $number2 - $integer3 - $integer4) ."<br><br>";
echo "Division : ". ($number1 / $number2 / $integer3 / $integer4) ."<br><br>";
echo "Multiplication : ". ($number1 * $number2 * $integer3 * $integer4) ."<br><br>";
?>
    <h2>Code 5</h2>
<?php
$d = 'U00123';
    for ($i = 1; $i < 11; $i++) {
        echo $d .$i ."<br>" ;
    }
?>
    <h2>Code 6</h2>
<?php
$color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is ike a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
?>
    <h2>Code 7</h2>
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
"Finland"=>"Helsinki", "France" => "Paris",  
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
"Germany" => "Berlin", "Greece" => "Athens",  
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",  
"Portugal"=>"Lisbon", "Spain"=>"Madrid",  
"Sweden"=>"Stockholm", "United Kingdom"=>"London",  
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",  
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",  
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",  
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
ksort($ceu) ;
foreach($ceu as $country => $capital)
{
    echo "The capital of $country is $capital <br>" ;
}
?>
    <h2>Code 8</h2>
<?php
    for ($i = 0; $i <10; $i++){
        $n = rand(21, 30);
        echo $n ."<br>" ;
    }
?>
    <h2>Code 9</h2>
<?php
for($x=1; $x<=10; $x++)
{
    if($x<10)
    {
        echo "$x-";
    }
    else
    {
        echo "$x";
    }
}
?>
    <h2>Code 10</h2>
<?php
    $sum = 0;
    for ($i = 0; $i < 31; $i++)
    {
        $sum +=$i;
    }
echo "The sum of the numbers 0 to 30 is $sum";
?>
    <h2>Code 11</h2>
<?php
for($x=1; $x<=5; $x++)
{
    for($y=1; $y<=$x; $y++) {
        echo "*";
        if($y<$x)
        {
            echo "";
        }
    }
    echo "<br>";
}
?>
    <h2>Code 12</h2>
    <table style=width: 270px cellspacing=0px cellpadding=0px border=1px>
<?php
       for($row=1; $row<=9; $row++)
       {
           echo "<tr>";
           for($col=1; $col<=9; $col++)
           {
               $total=$row+$col;
               if($total%2==0)
               {
                   echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
               }
               else {
                   echo "<td height=30px width=30px bgcolor=#000000></td>";
               }
           }
           echo "</tr>";
       }
?>
</table>
    <h2>Code 13</h2>

    <p>© <?php echo date('Y'); ?> Rahul Sood</p>
    
    <h2>Code 14</h2>
<?php
    echo  date("y/m/d") . "<br>";
    echo date("y.m.d") . "<br>";
    echo date("d-m-y");
?>
    <h2>Code 15</h2>
<?php
    $sdate = "1981-11-04";  
$edate = "2013-09-04";  
  
$date_diff = abs(strtotime($edate) - strtotime($sdate));  
  
$years = floor($date_diff / (365*60*60*24));  
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));  
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));  
  
printf("%d years, %d months, %d days", $years, $months, $days);  
?>  
    <h2>Code 16</h2>
<?php
print(strtoupper("i am learning how to code.<br>"));      //all uppercase letters  

print(strtolower("I AM LEARNING HOW TO CODE.<br>"));  //all lowercase letters  

print(ucfirst("i am learning how to code.<br>"));  // make a string's first character uppercase  

print(ucwords("i am learning how to code.<br>"));  // make a string's first character of all the words uppercase  
?>
    <h2>Code 17</h2>
<?php
    $path = 'www.example.com/public_html/index.php';  
$file_name = substr(strrchr($path, "/"), 1);  
echo $file_name; // "index.php"  
?>
    <h2>Code 18</h2>
<?php  
function password_generate($chars)   
{  
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';  
  return substr(str_shuffle($data), 0, $chars);  
}  
  echo password_generate(7);  
?>
    <h2>Code 19</h2>
<?php  
    $my_url = 'http://www.example.com/5478631';  
    echo substr($my_url, strrpos($my_url, '/' )+1);  
?>
    <h2>Code 20</h2>
<?php
    for ($x=ord ('a'); $x<= ord('z'); $x++)
        echo chr($x);
?>
    
</body>
</html>