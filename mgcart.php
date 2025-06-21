<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['s']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'name');
            if(in_array($_POST['name'],$myitems))
            {
                echo"   
                    <script>
                            alert('Already added to cart');
                            window.location.href='cart.php';
                        </script>";
            }
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'quantity'=>1);
             echo"   
                 <script>
                      alert(' Added to cart');
                 window.location.href='cart.php';
                </script>";
            }

        }
        else
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'quantity'=>1);
            echo"   
                <script>
                    alert(' Added to cart');
                    window.location.href='cart.php';
                </script>";
        }
    
    
    }
    if(isset($_POST['remove']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['name']==$_POST['name'])
            {

              unset($_SESSION['cart'] [$key]);
             $_SESSION['cart']==array_values($_SESSION['cart']);
             echo "<script> 
                   alert('ITEM REMOVED'); 
                    window.location.href='cart.php';  
             </script>";
             }
         }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['name']==$_POST['name'])
            {
               $_SESSION['cart'][$key]['quantity']=$_POST['Mod_Quantity'];
              
             echo "<script> 
                 
                    window.location.href='cart.php';  
                  </script>";
             }
         }
    }
}

?>