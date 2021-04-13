</head>
    <body>
    <h2><b> Welcome to princess page </b></h2>
    
<div>
<br>

<form action="index.php" method="GET">
    
    <br>
    <label> Username </label>
    <input type="text" name="User" class="user" placeholder="Username" required="">
    <br>
    <br>
    <label> Password </label>
    <input type="password" name="pass" class="pass" placeholder="password" required="">
    <br>
    <br>
    <input type="button" name="login" id="login" value="login here">
    <br>
    <input type="checkbox" id="check">
    <br>
    <span> Remember me </span>
    <br>
    Forgot<a href="file:///C:/Users/user/Desktop/princess/my%20first%20work/my%20assignment.html" class="para1">  : password </a>
    <br>
    <br>
    <input type="button" name="logout" id="logout" value ="logout">
</form>
<?php
echo "Registration successfull, Login Here. <br>";

if(isset($_POST["submit"])) {
    session_destroy();}
    

    $name= $_POST["name"] !=""? $_POST["name"]:$errorcount++;
      $lastname= $_POST["last_name"] ;
     $username= $_POST["username"];
     $date= $_POST["date_of_birth"] ;
     $pass= $_POST["password"];

    $_SESSION["name"] = "name";
 $_SESSION["lastname"] = "last_name";
 $_SESSION["username"] = "username";
 $_SESSION["date"] = "date_of_birth";
 $_SESSION["pass"] = "password";

    $userObject =[
        "id"=>1,
        "name"=>$name,
        "lastname"=> $last_name,
        "username"=> $username,
        "date"=> $date_of_birth,
        "pass"=> $password
    ];
        
        file_put_contents("password.php",$userObject["last_name"],".json",json_encode($userObject))
    
?>

    
</div></body></html>
