
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i id="msg" class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

   <section id="header">
  <nav class="navbar">
  <div class="container-fluid">
      <span class="navbar-brand "><img src="images/images.png" >Ikkat <n>Hub</n></span>
  
 
 <ul class="links" >
     <li><a href="home.php">Home</a></li>
     <li><a href="#">About Us</a></li>
     <li><a href="orders.php">Orders</a></li>
     <li><a href="shop.php">Shop</a></li>
     <li ><a href="#" >Contact </a></li>
     <li><a href="cart.php">Cart<i class="fa-solid fa-cart-shopping"></i>(00)</a></li>
     <li><a id="user-btn"  href="#"><i class="fa-solid fa-user" id="user-btn"></i></a></li>
     <li><a href="login_register.php">Logout</a></li>
 </ul>
     
  </div>
</nav>    
<div class="box ">
    <p>username:</p>
    <p>email:</p>
    <a href="login_register.php">Logout</a>
</div>

</section>
