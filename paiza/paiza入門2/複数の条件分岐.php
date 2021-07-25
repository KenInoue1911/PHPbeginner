<?php
$place = rand(1,5);
echo "placeの中身:".$place."\n";
if($place == 1){
  echo "金賞";
}elseif($place == 2){
  echo "銀賞";
}elseif($place == 3){
  echo "銅賞";
}else{
  echo $place."位";
}
?>
