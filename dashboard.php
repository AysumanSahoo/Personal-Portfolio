<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONAL PORTFOLIO</title>
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
    margin: 0%;
    padding: auto;

}
body {
    font-family: 'Roboto', sans-serif;
    background-color: rgb(172, 223, 255);
}
nav {
            padding: 14px 16px;
            background-color:rgb(30, 166, 250);
            color: #111;
            position: flex;
            top: 0%;
            width: 100%;

        }
        table, th, td {
        border: 1px solid black;
        

        }
        .center {
        margin-left: auto;
        margin-right: auto;
        }
        
        .footer {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 66px ;
    margin-top: 66px;
    background-color: #87cefa;
    color: rgb(77, 113, 128);
    width: 92.5%;
    position: relative;
    bottom: 0%;
    align-items: flex-start;

}
.footer h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color:#444;
}
.footer .text1 p {
  margin: 5px 0;}
.footer .text1 p a{
    text-decoration: none;
    color: #444;
    font-weight: 500;
}
.design{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 102.3%;
    height: 100px;
    background-color: #87cefa;
    color: rgb(77, 113, 128);
    position: relative;
    bottom: 0%;
    font-weight: bold;
}
</style>
</head>
<body>
    <div class="container">
        <nav>
        <div class="logo">
        </div>
        <h1 style="text-align: center;">ADMIN DASHBOARD</h1>
        </nav>
        <h1 style="text-align: center;color:rgb(30, 166, 250);padding-top:30px;">CONTACT DETAILS</h1>
        <table class="center">
    <tr>
        
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        
    </tr>
    <?php
        include('dbcon.php');
        $q="select * from contact";
        $query = mysqli_query($conn,$q);
        while ($result = mysqli_fetch_array($query)) 
        {
    ?>
    <tr>
       
        <td><?php echo $result['Name']?></td>
        <td><?php echo $result['Email']?></td>
        <td><?php echo $result['Message']?></td>
        <td><a id="edit" href="update.php?id=<?php echo $result['id']; ?>">Edit</a></td>
        <td><a id="delete" href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
       
    </tr> 
    <?php
        }
    ?>
    </table>
    <div class="footer">
        <div class="text1">
            <h3>Contact Me</h3>
            <p>sahooaysuman56@gmail.com</p>
            <p>+91 8770927402</p>
            <p>Sankat mochan nagar parsadipura,morar cantt gwalior-474006(M.P)</p>
        </div>
        <div class="text1">
            <h3>Quick Links</h3>
            <p><a href="aboutus.html">About Us</a></p>
            <p><a href="skills.html">Skills</a></p>
            <p><a href="Experiences.html">Experiences</p>
            <p><a href="Project.html">Project</a></p>
            <p><a href="contactdetails.html">Contact Details</a></p>
        </div>
        <div class="text1">
            <h3>Follow Me</h3>
            <p><a href="https://www.instagram.com/aysumantech/"><i class="fa fa-instagram"> Instagram</i></a></p>
            <p><a href="https://www.linkedin.com/in/aysuman-sahoo-7416bb367?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa fa-linkedin"></i> LinkedIn</a></p>
            <p><a href="https://github.com/AysumanSahoo"><i class="fa fa-github"></i> Github</a></p>
        </div>
    </div>
    <div class="design">
        <p>© 2025 Aysuman Sahoo. All rights reserved.</p>
        <p>Designed by Aysuman Sahoo</p>
    </div>
    </div>
    <script src="index.js"></script>
</table>
</body>
</html>