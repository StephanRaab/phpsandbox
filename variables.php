<?php

#variables
# - prefixed with $
# - start with letter or underscore
# - case sensitive

$output = "hello world";
echo "$output";

$num1 = 12;
$num2 = 4;
$sum = $num1 + $num2;

echo "$num1 + $num2 = $sum";

# Constants are defined with all caps
# They are case sensitive
# This example is only good if the greeting will never change  
# Adding the "true" makes it case insensitive

define("CONSTANT", "Hello Everyone", true);
echo CONSTANT;
?>
