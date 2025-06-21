<?php include("Database/connection.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pets</title>
    <link rel="stylesheet" href="stylep.css">
</head>
<body>
    <div class="container">
    <h1>
        OUR FRIENDS WHO ARE LOOKING FOR A HOUSE
        </h1>
        <br>
            <table class="products" border="2" width=" 950" height="955">
                <tr>
                    <td>SR.NO</td>
                    <td>PETS</td>
                    <td>NAME</td>                    
                    <td>QUANTITY</td>
                    <td>PRICE</td>
                    <td>ADD TO CART</td>
                </tr>
                
                <div class="row">


<?php
                     $sr=0;
                     $query="SELECT * FROM `product`  ";
                     $user_result=mysqli_query($con,$query);
                     while($user_fetch=mysqli_fetch_assoc($user_result))
                       {   
                              $id= $user_fetch['id'];
                              $name=$user_fetch['name'];
                              $price =$user_fetch['price'];
                              $image= $user_fetch['image'];
                              $sr+=1;

                           echo '
                           <tr>
                    
                           <td>'.$id.'</td>
                           <td><img src="images/'.$image.'" width="230" height="210"></td>
                           <td>'.$name.'</td>                    
                           <td> 5 </td>
                           <td>RS.'.$price.'</td>
                           <td> <form action="mgcart.php" method="post">
                           <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="price"   value="'.$price.'">
                            <input type="submit" name="s" value="Add to cart" style=" font-size: 40px;"> 
                           </form>
                           </td>
                       </tr>
                           
                           
                           ';
                        }
                ?>
  

</div>
                  </table>
    </div>
</body>
</html>