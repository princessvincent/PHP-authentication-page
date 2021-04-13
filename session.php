<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

</body>
</html>
<?php
session_start();

?>


<p>

<?php
if(isset($_SESSION["message"]) && !empty($_SESSION["message"])) {
    session_destroy();}
?>
</p>
Login Form Here

