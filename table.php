<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="a.css">
<?php
  $t = " ";
for($i=2;$i<=2;$i++)
 {
  for($t=1;$t<=10;$t++)
     {
      printf("%d * %d = %d ",$i,$t,($i*$t));
      echo "  ";
      echo "<br> ";
      if($t==10)
      {
      echo "<br> ";
      }
     }
}
?>
</body>
</html>
