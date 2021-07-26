<?php
$age = rand(18,22);
echo "ageの中身:".$age."\n";
if($age <= 19){
  echo $age."才は飲酒不可。\n";
}else{
  echo $age."飲酒可能。\n";
} ?>
