<?php
include('dbcon.php');

$id=$_GET['id'] ?? null;

$query="DELETE FROM `contact` WHERE `id`='$id'";
$data=mysqli_query($conn,$query);
if($data){
    ?>
<script>
    alert("contact Deleted Successfully");
    window.location.href='dashboard.php';
    </script>
<?php

}
else{
    ?>
    <script>
    alert("Failed to Delete contact");
    </script>
<?php
}
?>