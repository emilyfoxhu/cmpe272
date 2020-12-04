<?PHP
session_start();
session_destroy();
header('location:products.php');
?>