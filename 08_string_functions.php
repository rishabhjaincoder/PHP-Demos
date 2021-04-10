<?php 

$name = "Harry is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name); // dot operator to join multiple strings
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name); // to reverse a string
echo "<br>";
echo strpos($name, "Harry"); // to find position of some word in a string
echo "<br>";
echo str_replace("Harry", "Rohan", $name); // to replace a part of string inside a string
echo "<br>";
echo str_repeat($name, 4); // to make copy of the string
echo "<br>";
echo "<pre>";
echo rtrim("    this is a good boy     "); // trim from right
echo "<br>";
echo ltrim("    this is a good boy     "); // trim from left
echo "</pre>";

?>
