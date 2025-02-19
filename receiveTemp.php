<?php
$temperature = array(10);
 $fp=fopen("tt.txt","r");
 if($fp==NULL) echo "Erreur ouverture";
 else{
   $hex = fgets($fp);
   $valTemp = base_convert($hex, 16, 10);
   echo $valTemp;
   sleep(1);
   fclose($fp);
 }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>Temperature</h1>
   <h1><?php echo $valTemp; ?></h1>
   <h1>°C</h1>
</body>
</html>