<?php

$fptr = fopen("myfile.txt", "r");
// this will read file line by line and take pointer to the point till the file have been read.
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr); 
// echo var_dump(fgets($fptr));
// and return false when whole file is read 

//------------------------------------------------------------------

/*
// Reading a file line by line
// this loop will run until fgets return false
while($a=fgets($fptr)){
    echo $a;
}
echo "End of the file has been reached";
*/

//------------------------------------------------------------------

// echo fgetc($fptr); 
/*
// Reading a file character by character
while($a=fgetc($fptr)){
    echo $a;
    // break;
}
echo "End of the file has been reached";
*/

//------------------------------------------------------------------

// Write a program which reads the content of a file until . has been encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);

?>
