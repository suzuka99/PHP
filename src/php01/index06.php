<?php
for ($i = 2; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i;
        echo "<br />";
    }
}

/* $count = 0;

while($count<20){
    $count += 1;
    echo $count . "<br />";
} */

/* $counter = 0;
while($counter < 100){
    if ($counter % 3 == 0){
        continue;
    }
    if ($counter == 19) {
        break;
    }
    $counter += 1;
    echo $counter . "<br />";
} */

$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}

$num = 0;
do {
    echo 'num = ' . $num . '<br />';
    $num++;
} while ($num < 3);

for ($i = 1; $i <=50; $i++) {
    if ($i % 3 ===0 ) {
        echo "Fizz" . '<br />' ;
    } elseif ($i % 5 === 0 ) {
        echo "Buzz" . '<br />' ;
    } elseif ($i % 15 === 0) {
        echo "FizzBuzz" . '<br />' ;
    } else {
        echo $i . '<br />' ;
    }
}

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++){
        echo $i * $j;
        if ($j < 9) {
            echo ',';
        }
    }
    echo "<br />";
}

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        // もし「行 ($i)」が 5 だったら
        if ($i == 5) {
            echo "★";
        } else {
            echo "●";
        }
    }
    echo "<br />";
}

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        // 行 ($i) と 列 ($j) が同じ数字のとき
        if ($i == $j) {
            echo "■";
        } else {
            echo "□";
        }
    }
    echo "<br />";
}

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($i % 2 === 0) {
            echo "◎";
        } else {
            echo "◻︎";
        }
    }
    echo "<br />";
}

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if (($i + $j) % 2 === 0) {
            echo "◎";
        } else {
            echo "◻︎";
        }
    }
    echo "<br />";
}