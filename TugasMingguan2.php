<?php
$num1 = 0;
$num2 = 1;

echo $num1 . ", " . $num2;

for ($i = 2; $i < 20; $i++) {
  $num3 = $num1 + $num2;
  if ($num3 <= 20) {
    echo ", " . $num3;
    $num1 = $num2;
    $num2 = $num3;
  } else {
    break;
  }
}
?>