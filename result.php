<?php

$name = $_POST['name'];
$marks = $_POST['marks'];
    
echo "Result of ".$name." ";
if($marks > 100 || $marks <= 0 )
{
    echo "invalid";
}     
else  if($marks >= 80){
  echo "A+";
}
else if($marks >= 60)
{
    echo "A";
}
else if($marks >= 60)
{
    echo "A";
}
else if($marks >= 50)
{
    echo "B";
}
else if($marks >= 40)
{
    echo "C";
}
else if($marks >= 33)
{
    echo "D";
}
else if($marks < 33)
{
    echo "fail";
}  


?>