<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
  <section class="admin">
    <h2 class="h2">Admin <span>Login</span></h2>
    <form method="post">
    <div class="input-group">
    <div class="input-box">   
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="pass"  placeholder="Password">
    </div> 
      <button type="submit" class="btn" name="log">Login</button>
    </div>
    </form>
  </section>
</body>
</html>

<?php
$con= new PDO("mysql:host=localhost;dbname=heba","root","");
if (isset($_POST['log'])) {
   
    
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    // $hashedPass= sha1($pass);

    $login= $con->prepare("SELECT * FROM admin WHERE email=:email and pass=:pass");
    $login->bindparam(':email',$email);
    $login->bindparam(':pass',$pass);
    $login->execute();

    if($login->rowCount()===1){
        header('location:comments.php');
    }

}