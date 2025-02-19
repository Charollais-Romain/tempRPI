<?php
$temperature = array(10);
 $fp=fopen("/home/pi/tt.txt","r");
 if($fp==NULL) echo "Erreur ouverture";
 else{
   $hex = fgets($fp);
   $valTemp = base_convert($hex, 16, 10);
   echo $valTemp;
   echo "test";
   sleep(1);
   fclose($fp);
 }

?> 