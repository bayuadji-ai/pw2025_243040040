<?php
//while
// 1. Nilai Awal / initial value
// 2. Kondisi Terminasi / kapan loping berhenti
// 3. Increment / Decrement
$i = 10;
while ($i >= 1) {
    echo "Hello World $i x<br>";
    //$i = $i - 1;
    $i--;
}

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo "Hello World $i x<br>";
}
