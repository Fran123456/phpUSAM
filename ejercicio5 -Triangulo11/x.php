<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style media="screen">
    body{
      font-size: 30px;
    }
  </style>
</head>
<body>
<br><br>
<div class="text-center">
<?php
for ($i=0; $i <=11 ; $i++) {
     for ($y=0; $y<$i ; $y++) {
       echo " * ";
     }

     echo " <br> ";
}
 ?>
</div>
</body>
</html>
