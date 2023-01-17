<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bheeeeeem</title>
    <style type="text/css">
        img{
            height: 310px;
            width: 50%;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
     <div class="topnav">
      <p>Search</p>
      <input type="text" placeholder="Search.." name="search">
      <input type="submit" name="Submit">
    </div> 
</form>
</body>
</html>
<?php
if (isset($_GET['search'])) {
    $php_run=1;
    $search_string = $_GET['search'];
    $file = "data.txt";
    $cmd = "grep -i ".$search_string ." ". $file;
    echo system($cmd);
}
else{
    echo "<br><br><center>Find the word from the data.txt</center>";
}
?>
<?php if ($php_run !== 1): ?>
    <center><img src="https://i.redd.it/43hsiu430hca1.jpg"></center>
  <?php endif; ?>