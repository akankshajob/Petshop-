
<?php include("Database/connection.php") ?>
<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['checkout']))
    {
        $query1="INSERT INTO `customer`( `Full_Name`, `Phone_no`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phonenumber]','$_POST[address]','Cash On Delivery')";
        if(mysqli_query($con,$query1))
        {
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `orders`(`Order_Id`, `name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $name=$values['name'];
                    $Price=$values['price'];
                    $Quantity=$values['quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script> 
                alert('order placed');
                window.location.href='index.php';
                </script>";
            }
            else
            {
                echo"<script> 
                alert('sql prepared stmt error');
                window.location.href='cart.php';
                </script>";
            }
        }
        
    }
}
?>