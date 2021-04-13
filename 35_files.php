<?php

$fptr = fopen("myfile.txt", "r");  // this will just point to that file if file exists or return false if doesn't
// echo var_dump($fptr);
if(!$fptr){ // return false if file does not exist
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr, filesize("myfile.txt"));

fclose($fptr); // have to close this

echo $content;

?>


<!-- there are mainly three modes for fopen -> r,w,a -->
<!-- https://www.php.net/manual/en/function.fopen.php -->
<!-- for more modes refer above link -->