<?php
    require_once('lib/api.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>PHP App</title>
</head>
<body>

<div class="container">
<ul class="collection with-header">
                <center><li class="collection-header"><h4>Index overview of respositories</h4></li></center>
                <li class="collection-item">
                <?php $fullname;
 $string;
 $someObject = json_decode($content);
 foreach($someObject as $value){
    $fullname = $value->full_name;  
    $string =  $fullname.'<i class="small material-icons" style="float: right; color:rgb(0, 153, 0);">arrow_drop_down_circle</i>'."<br><hr>";  
    echo $string;  
 }
    ?></li>
    </ul>
              
    <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
     </div>   
</body>
</html>