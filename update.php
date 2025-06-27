<?php
include 'dbcon.php';
$id=$_GET['id'];
$select="SELECT * FROM contact WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="contactdetails.css">
<body>
    <div id="contact">
                <div class="contacts">
                    
                        <form action="" method="post">
                            <div class="contact-item">
                            <h2> Edit Contact Details</h2>
                           
                            <input type="text"  value="<?php echo $row['Name']?>"name="Name" placeholder="Enter Name"  required>
                            
                            <input type="text"  value="<?php echo $row['reply']?>"name="reply" rows="4" placeholder="Enter reply" required>
                            <button type="submit" name="edit" style="Color:black;" class="button">Edit</button>
                            <button class="button"><a href="dashboard.php">Back</button>
                            
                        </form>
                </div>
            </div>

</body>
</html>

<?php
 if (isset($_POST['edit']))
 {
    $Name=$_POST['Name'];
    $reply=$_POST['reply'];
    $update="UPDATE contact SET Name='$Name',reply='$reply'WHERE id='$id'";
    $data=mysqli_query($conn,$update);
    if($data)
    {
        ?>
        <script>
            alert ("Contact Details update successfully")
            window.location.href="dashboard.php";
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("please try again")
        </script>
       <?php
    }
 }
 ?>