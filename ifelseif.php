<?php
// PHP Conditional Statements

// The if Statement
$number = 12;

if ($number < 20) {
  echo "Have a good day!";
}


// The if...else Statement

if ($number < 11) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

// The if...elseif...else Statement

if ($number < 14) {
    echo "Have a good morning!";
  } elseif ($number < 2) {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
?>