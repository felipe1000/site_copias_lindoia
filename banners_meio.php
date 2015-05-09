<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
  
   $banner[1]="<img src='ban1.png' width='595' height='600' />";
   $banner[2]="<img src='ban2.png' width='595' height='600' />";
   $banner[3]="<img src='ban3.png' width='595' height='600' />";
   $banner[4]="<img src='ban4.png' width='595' height='600' />";
   
   $rand= rand(1,4);

   echo $banner[$rand];
 ?> 
</body>
</html>