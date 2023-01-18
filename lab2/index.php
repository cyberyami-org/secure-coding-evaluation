<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doremon</title>
    <style type="text/css">
        img{
            height: 310px;
            width: 50%;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
     <div class="topnav">
      <p>Name Please</p>
      <input type="text" placeholder="Name" name="name">
      <input type="submit" name="Submit">
    </div> 
</form>
</body>
</html>
<?php
if (isset($_GET['name'])) {
    $php_run = 1;
    echo "<br>Welcome ".$_GET['name']." in the new World";
}
else{
    echo "<br><br><center>Enter Your name</center>";
}
?>
<?php if ($php_run !== 1): ?>
    <center><img src="https://i.redd.it/mqo6uilf9fq91.jpg"></center>
  <?php endif; ?>