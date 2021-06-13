<?php

echo "First pattern : <br>";
for($x=0;$x<=2;$x++)
{
   for ($y=0;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}

echo " <br> <br>  <br> <br>";

echo "Second pattern : <br>";

for($x=2;$x>=0;$x--)
{
   for ($y=$x;$y>=0;$y--)
    {
	 echo 1+$y;
	    if($y < $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}


echo " <br> <br>  <br> <br>";


echo "Third pattern : <br>";
for($x=0;$x<=2;$x++)
{
   for ($y=0;$y<=$x;$y++)
    {
	 echo chr(65+$y);
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}


?>