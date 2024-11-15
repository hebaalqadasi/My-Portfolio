
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Commens</title>
    <link rel="stylesheet" href="admin.css">
  </head>
<?php

$con= new PDO("mysql:host=localhost;dbname=heba","root","");
   
    $com= $con->prepare("SELECT * FROM user");
    $com->execute();
    foreach($com AS $data){
    echo '
    <div class="box">
    <div>
       <h2 class="name"> '. $data['name'] .'</h2>
    </div>
    <hr>
    <div>
       <p class="mass"> '.$data['massage'].'</p>
    </div>
    
    <div class="contact">
   <h4> Email: '. $data['email'] .'</h4>
   <h4> Phone: '.$data['phone'].'</h4>
    </div>
    </div>';
 
    }

?>