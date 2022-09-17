<?php
    include 'connect.php';

$arr=array();
$sql='SELECT * FROM `navigation`';
$result=mysqli_query($conn,$sql);
$arr=array();
   while($row=mysqli_fetch_array($result)){
    $arr[]=$row;
   }

   
//    print_r($row);
     

?>
