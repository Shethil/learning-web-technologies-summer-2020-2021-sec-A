<?php
$arr = array (
  array(1,2,3,"A"),
  array(1,2,"B","C"),
  array(1,"D","E","F"),
);
  
echo $arr[0][0]."\t\t". $arr[0][1]. "\t\t". $arr[0][2]. "\t\t". $arr[0][3]."<br>";
echo $arr[1][0]."\t\t". $arr[1][1]."\t\t". $arr[1][2]. "\t\t".$arr[1][3]."<br>";
echo $arr[2][0]."\t\t". $arr[2][1]. "\t\t".$arr[2][2]. "\t\t".$arr[2][3]."<br>";



?>