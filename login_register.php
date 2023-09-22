<?php
include 'config.php';

if(isset($_POST['submit1'])){
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
       $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
      $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $result=mysqli_query($conn,"SELECT *FROM login_register where email='$email' && password='$pass'");
    if(mysqli_num_rows($result)>0){
    $message['']='user already exists !';
    }else if($pass != $cpass){
       $message['']='password not matched'; 
    }
    else{
        $insert="insert into login_register(name,email,password)  values('$name','$email','$pass')";
        mysqli_query( $conn,$insert);
         $message[''] = 'registered sucessfully !';
     
       
         
       
    }
    
}

?>
<?php
include 'config.php';
session_start();
if(isset($_POST['submitlogin'])){

$email=mysqli_real_escape_string($conn,$_POST['email']);
     $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $result=mysqli_query($conn,"SELECT *FROM login_register where email='$email' && password='$pass'");
    if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
                 $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
        
    } else{
        $message[''] = 'incorrect email or password!';
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
      
        <link rel="stylesheet" href="img">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oleo+Script&display=swap" rel="stylesheet">
        
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
</head>
<body>
   <?php include 'header.php' ?>
    <div class="container">
       
        <div class="card">
            <div class="innerbox " id="card">
                <div class="frontcard">
                   <form action="" method="post">
                    <h3>Login Form</h3>
                    <input type="text" name="email" placeholder="enter email id" required>
                    <input type="password" name="password" placeholder="enter password" required>
                       <button type="submit" name="submitlogin"  class="btn"> Login</button>
                   
                    <p>Don't have an account?</p>
                    <button type="button"  onclick="openregister()" class="btn">Register Now</button>
                    </form>
                </div>
                <div class="backcard">
                    
                     <form action="" method="post">
                      <h3>Registration Form</h3>
                    <input type="text" name="name" placeholder="enter name" required>
                      <input type="text" name="email" placeholder="enter email" required>
                    <input type="password" name="password" placeholder="enter password" required>
                        <input type="password" name="cpassword" placeholder="confirm password" required>
                       <button type="submit" name="submit1"  class="btn"> Register</button>
                   
                    <p>already have an account</p>
                    <button type="button"   onclick="openlogin()" class="btn">Login Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    var card=document.getElementById("card");
        function openregister(){
            card.style.transform="rotateY(-180deg)";
        }
        function openlogin(){
            card.style.transform="rotateY(0deg)";
        }
    </script>
</body>
</html>