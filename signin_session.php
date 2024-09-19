<?php
include 'conn.php';

session_start();


// session_destroy();

if($id = $_SESSION['dbLogin']){

    $query = "select * from signup where U_id = $id";
    $runn=  mysqli_query($conn , $query);

    $rows = mysqli_fetch_array($runn);

    $name  = $rows['U_name'];

}
else{

    header('location:signin.php');

}

?>
?>