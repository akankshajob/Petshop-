<?php include("Database/connection.php") ?>

<?php 

   session_start();
   
   if(!isset($_SESSION['AdminLoginId']))
   {
    header("location:adminlogin.php");
   }
   ?>

<?php 
    if(isset($_GET['deleteid']))
    {
        $id=$_GET['deleteid'];
        $query="DELETE from `product` where id=$id";
        $result=mysqli_query($con,$query);
        if($result)
        {
            echo "<script>
                  alert('deleted');
                  window.location.href='Products.php';
                  </script>";
                  
        }
        else
        {
            die(mysqli_error($con));
        }
    }
    else
    {
        echo "deleteid not set";
    }
            
      
?>   