<!-- for loop  -->
<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

// foreach loop 
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

// while loop 
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

// do while loop 


$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
}
 while ($x <= 5);

//  Break method 
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

//   continue method 
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }

?>