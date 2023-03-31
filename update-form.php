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
        <?php 
            if(isset($_GET['updateid']))
            {
                    extract($_GET);
            }
        ?>
        <section class="section">
            <div class="img">
            <div class="table">
            <table border="4" cellpadding="5" cellspacing="0">
          <form method="POST">
            <tr>
                <td collspan="2"><h2>Registration Form</h2></td>
            </tr>
            <tr>
              <td>ID:</td>
              <td> <input type="text" name="id" value="<?php echo $updateid; ?>"<br></td>
</tr>
    <tr>
           <td> Name:</td>
           <td> <input type="text" name="name" value="<?php echo $name; ?>"><br></td>
</tr>
<tr>
           <td> Mobile:</td>
           <td> <input type="mobile" name="mob" maxlength="10" value="<?php echo $mobile; ?>"><br></td>
            </tr>
            <tr>
            <td>City:</td>
            <td><input type="text" name="city"value="<?php echo $city; ?>"><br></td>
</tr>
<tr>
            <td>Password:</td>
             <td><input type="password" name="pwd"><br></td>
            </tr>
            <tr>
           <td colspan="2"><center> <input type="submit" name="updated" value="Update"></center></td>
            </tr>

          </form>
          </table>
          </div>
            </div>
        </section>
        <footer class="footer">
            <h1>All Rights Reserved by manix@Os act2023||</h1>
        </footer>

        <?php 
        
            if(isset($_POST['updated']))
            {
                extract($_POST);
                $con=mysqli_connect("localhost","root","","ass7");
                $q="update m4 set Name = '$name',Mobile='$mobile',City='$city',Password='$password' where ID='$updateid'";
                $res=mysqli_query($con,$q);
                header("location:update.php");
            }
        ?>
</body>
</html>