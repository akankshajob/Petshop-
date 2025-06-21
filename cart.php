

<?php
   session_start();
 
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pet added</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style7.css">
 

 
  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>



      


      

   <!-- Cart -->
   <div class="container">
      <div  class="col-lg-12 text-center border rounded bg-light my-5">
         <h1> Cart</h1>
      </div>
   </div>
   <div class="container">
    <div class="col-lg-12">
      <table class="table">
       <thead  class="text-center">
        <tr>
          <th scope="col">Serial No.</th>
          <th scope="col"> Name</th>
          <th scope="col"> Price </th>
          <th scope="col">Quantity</th>
          <th scope="col"></th>
          
        </tr>
        <?php
          $total=0;
            if(isset($_SESSION['cart']))
             {
                 foreach($_SESSION['cart'] as  $key => $value)
               {
                 $sr=$key+1;
                 $total=$total+$value['price'];
                 $total=$total*$value['quantity'];
                echo"
                <tr>
                <td> $sr </td>
                <td> $value[name] </td>
                <td> $value[price]</td>
                <td>  
                 <form action='mgcart.php' method='POST'>
                   <input type ='number' name='Mod_Quantity' onchange='this.form.submit();' class = 'text-center' value='$value[quantity]' min='1' max='10'></td>
                   <input type='hidden' name='name' value='$value[name]'>
                 </form>
                <td>
                    <form action='mgcart.php' method='POST'>
                       <button name='remove' class='btn btn-sm btn-outline-danger'> Remove</button> </td>
                      <input type='hidden' name='name' value='$value[name]'>
                     </form>
                 </tr>
                ";
                }
              }
          ?>
        </thead>
      <tbody class="text-center">
  
      </tbody>
      </table>
    </div>
    <div class="col-lg-4">
       <div class="border bg-light rounded p-4 "> 
         <h3>Total:</h3>
         <h5 class="text-right"><?php echo $total; 
            $_SESSION['total']=$total;
         ?></h5>
         <br>
         <?php 
             if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
             {
         ?>
         <form action="checkout.php" method="POST">
           <div class="form-group">
            <label >Full Name</label>
            <input pattern="[a-zA-Z].{1,}" oninvalid="setCustomValidity('Please enter on alphabets only. ')" type="text" class="form-control" name="fullname"  required >
             
             </div>
             <div class="form-group">
            <label >Phone Number</label>
            <input type="text" name="phonenumber" title="Error Message" class="form-control" pattern="[1-9]{1}[0-9]{9}"  required >
             </div>
             <div class="form-group">
            <label >Email Address</label>
            <input type="text" name='emailaddress' class="form-control" required >
             </div>
             <div class="form-group">
            <label >Address</label>
            <input type="text" name='address' class="form-control" required >
             </div>
        
            
          </div>
      
        </div>
        
          <button class="btn btn-primary btn-block"  name="checkout">Checkout</button>
        


       </div>
       </form>
     
        
            
      <?php  
             }
      ?>
    </div>
    </div>
  </div>

  

  

 


</body>

</html>
