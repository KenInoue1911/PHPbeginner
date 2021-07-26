<?php
$place = rand(1,12);
echo "placeの中身:".$place."\n";
if($place <= 6){
  echo $place."位入賞";

}else{
  echo $place."位入賞圏外";
}
 ?>
