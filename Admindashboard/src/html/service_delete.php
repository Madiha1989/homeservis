<?php
include 'conn.php';
include 'signin_session.php';

$id = $_GET['id'];
$query = "DELETE from services WHERE S_id =  $id ";
$runn = mysqli_query($conn , $query);

if($runn){
    echo "
    <script>
    alert ('Record Deleted!!!');
    window.location.href='service.php';
    </script>
    ";
}

?>