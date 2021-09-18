<?php
$x = 10;
if($x==10)
{
    echo "holi :) \n";
}
elseif($x == 100)
{
    echo "no holi :c \n";
}
else 
{
    echo "menos aun holi :c \n";
}

switch($x)
{
    case 10:
        echo "otro holi pero en un switch :) \n";
        break;
    case 9:
        echo "esto no se va a ver :( \n";
        break;
    default:
        echo "menos aun se va a ver :( \n";
        break;
}

$i = 0;
while($i<5)
{
    echo "$i \n";
    $i++;
}

$j = 100;
do
{
    echo $j;
} while($j<10);