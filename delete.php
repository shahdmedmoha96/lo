<?php

$name = "";
$username = "";
$password = "";
$email = "";
$db = mysqli_connect('localhost', 'root', '', 'mypage');
if(isset($_GET['deletid'])){
    $query="DELETE FROM items WHERE id=".$_GET['deletid']."";
    $result=mysqli_query($db,$query);
    $query="SELECT * FROM  items";
    $result=mysqli_query($db,$query);
    $index=1;
//     while ($row = mysqli_fetch_assoc($result)) {
//         // $row['id']=$index;
       
//         $query="UPDATE items  SET id = $index";
          
//     $result=mysqli_query($db,$query);
    
// $index++;

    
 
// }
header("location:home.php");
}