<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'jason' && $password == 'christopher') {
    header('Location: dashboard.php');
    exit;
  } 
  else {
    $error_message = 'Incorrect Username or Password';
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <?php if (isset($error_message)): ?>
    <p style="color:red;"><?php echo $error_message; ?></p>
  <?php endif; ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
