<?php 
require("Database/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS Stylesheets -->
     <link rel="stylesheet" href="style4.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class ="myform">
            <form action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                <h2>ADMIN LOGIN</h2>
                <input type="text" placeholder="Admin Name" name="admin">
                <input type ="password"  placeholder="Password" name="password">
                <button type ="submit" name="Login">Login </button>
            </form>
        </div>
        <div class="image">
                <img src="images/man.png" alt="img1" >

        </div>
        <?php 
        #filtering and escapestring  , for secure admin login
              function input_filter($data)
              {
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
              }
              if(isset($_POST['Login']))
              {
                $Admin=input_filter($_POST['admin']);
                $Password=input_filter($_POST['password']);
                $Admin=mysqli_real_escape_string($con,$Admin);
                $Password=mysqli_real_escape_string($con,$Password);
                $query="SELECT * FROM `admin` WHERE `Admin`=? AND `Password`=? ";
                if($stmt=mysqli_prepare($con,$query))
                {
                   mysqli_stmt_bind_param($stmt,"ss",$Admin,$Password);
                   mysqli_stmt_execute($stmt);
                   mysqli_stmt_store_result($stmt);
                   if(mysqli_stmt_num_rows($stmt)==1)
                   {
                         session_start();
                         $_SESSION['AdminLoginId']=$Admin;
                         header("location:adminpanel.php");
                   }
                   else
                   {
                    echo"
                    <script>
                    alert(invalid name or password);
                    window.location.href='adminlogin.php';
                    </script>";
                   } mysqli_stmt_close($stmt);
                }
                else
                {
                    echo"
                    <script>
                    alert(prepared stmt error);
                    window.location.href='adminlogin.php';
                    </script>";
                }
            
            }
        ?>
</body>
</html>