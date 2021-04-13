
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "name";
$_SESSION["lastname"] = "last_name";
$_SESSION["username"] = "username";
$_SESSION["date"] = "date_of_birth";
$_SESSION["pass"] = "password";

echo "Session variables are set.";

if(isset($_SESSION["message"]) && !empty($_SESSION["message"])) {
    session_destroy();
}
?>

</body>
</html>
