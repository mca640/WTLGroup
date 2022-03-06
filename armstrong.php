<!DOCTYPE html>
<html>
<body>
 
<?php  
 
$n=371;  
$sum=0;  
$num=$n;
 
while($num!=0)  
{  
$x=$num%10;  
$sum=$sum+$x*$x*$x;  
$num=$num/10;  
}
 
if($n==$sum)  
{  
echo "$n is an Armstrong Number.";  
}  
 
else  
{  
echo "$n is not an Armstrong Number.";  
}  
?> 
 
</body>
</html>