<?php
include('dbcon.php');
$id=$_GET['id'] ?? null; // Use null coalescing operator to handle undefined index
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$query="INSERT INTO `contact`(`id`,`Name`,`Email`,`Message`) VALUES('$id','$Name','$Email','$Message')";
$data=mysqli_query($conn,$query);
if($data)
{
    ?>
    <script>
    alert("contact successfully...")

    //window.open=("http://localhost/portfolio2/index.html","_self")
    window.location.href='index.html';
    </script>
    <?php
}
else{
    ?>
    <script>
    alert("contact not successfully...")
    </script>
    <?php
}
?>