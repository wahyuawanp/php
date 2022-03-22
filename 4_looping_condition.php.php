<!DOCTYPE html>
<html>
<body>
<?php
 
  for ($i= 1; $i <= 50; $i++) { 
 echo $i."<br>";
 if ($i % 2 ==0 ){
 echo "foo";
 }elseif ($i % 5==0){
 echo "bar";
 }elseif ($i % 2 ==0 && $i % 5==0 ){
     echo "FooBar";
 }
 }
 ?>
</body>
</html>
