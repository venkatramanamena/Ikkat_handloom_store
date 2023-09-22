
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
  
 
<div class="links">
    <a href="#">Home</a>
    <a href="#">About us</a>
    <a href="#">Shop</a>
    <a href="#">Orders</a>
    <a href="#">contact</a>
    <a href="#">MyCart<i class="fa-solid fa-user"></i></a>

</div>
     
  </div>
</nav>    


</section>
