<!DOCTYPE html>
<html>
<head>
    <title>XSS 3</title>
<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>
    
<div align="center">
<form method="GET   " action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="submit" value="Submit">
</form>
    </div>

<?php 
if (isset($_GET["username"])) {
    $user = str_replace("<script>", "", $_GET["username"]);
    echo "Your name is "."$user";
}
 ?>

</body>
</html>