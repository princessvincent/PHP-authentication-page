 <?php
// session_start();
// $errorcount=0;

?>
<!DOCTYPE html>
<html>
</body>
<?php
// $name= $_POST["name"] !=""? $_POST["name"]:$errorcount++;
//  $lastname= $_POST["last_name"] !=""? $_POST["last_name"]:$errorcount++;
//  $username= $_POST["username"] !=""? $_POST["username"]:$errorcount++;
// $date= $_POST["date_of_birth"] !=""? $_POST["date_of_birth"]:$errorcount++;
// $pass= $_POST["password"]!=""? $_POST["password"]:$errorcount++;

// $_SESSION["name"] = "name";
// $_SESSION["lastname"] = "last_name";
// $_SESSION["username"] = "username";
// $_SESSION["date"] = "date_of_birth";
// $_SESSION["pass"] = "password";

// if(errorcount > 0){
// $_SESSION["error"] = "you have"+ $errorcount + "in your form submission";
//  header("location:project.php");
} 
 else{
//  {echo "you are successfully registered"};
$userObject =[
    "id"=>1,
    "name"=>$name,
    "lastname"=> $last_name,
    "username"=> $username,
    "date"=> $date_of_birth,
    "pass"=> $password
];
file_put_contents("db/users/",$name + $last_name +"json","$userObject");
$_SESSION["message"] = "Registration successful, you can now login";
 header("location:login.php");
}
?>
</body>
</html> 