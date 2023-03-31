<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header class="header">
            <div class="logo">
                <img src="logo2.png" alt="not yet">
            </div>
            <div class="head">
                <h1>STUDENT MANAGEMENT SYSTEM</h1>
            </div>
            <div class="links">
               <a href="index.html">Home</a>
               <a href="insert.php">Insert</a>
               <a href="select.php">display</a>
               <a href="delete.php">Delete</a>
               <a href="update.php">Update</a>
            </div>
        </header>
        <section class="section">
            <div class="table">
                <table border="2" cellpadding="5" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            <?php
            $con=mysqli_connect("localhost","root","","ass7");
            $q="select * from m4";
            $res=mysqli_query($con,$q);

            while($row=mysqli_fetch_array($res))
            {?>
                
            <tr>
                <td><?php echo $row['ID'];?> </td>
                <td><?php echo $row['Name'];?> </td>
                <td><?php echo $row['Mobile'];?> </td>
                <td><?php echo $row['City'];?> </td>
                <td><?php echo $row['Password'];?> </td>
                <td><a href="update-form.php?updateid=<?php echo $row['ID'];?>
                &name=<?php echo $row['Name'];?>
                &mobile=<?php echo $row['Mobile'];?>
                &city=<?php echo $row['City'];?>
                &password=<?php $row['Password'];?>">Update</td>
            </tr>

         <?php }?>
         </table>
          </div>
        </section>
        <footer class="footer">
            <h1>All Rights Reserved by manix@Os act2023||</h1>
        </footer>
      
</body>
</html>