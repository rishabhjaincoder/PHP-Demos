<!-- this file can be imported by other files in order to do database connectivity -->
<?php

// include '_dbconnect1.php';
   // this will throw just a warning but not stop further execution of code when file is not present
require '_dbconnect.php';
       // require will throw fatal error and stop execution of further code if file is not found


$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){ 
    echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo "<br>";
}
?>
