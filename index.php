 <!DOCTYPE html>
<html>
<head>
<title>my php </title>
</head>
</body>
<p>Register Here.</p>
<!-- <h5> Php Authentication Page. <h5> -->
<?php ?>
<form action= "login.php" method= "post">
<br>
First name:   <input type= "text" name= "name" placeholder= "first Name"required="">
<br>
<br>
Last name:    <input type= "text"  name= "last name" placeholder="last Name"required="">
<br>
<br>
username:    <input type= "text" name= "username" placeholder="user Name" required="">
<br>
<br>
Date of birth: <input type="date" name="date of birth" placeholder="DOB"required="">
<br>
<br>
Gender: <select>
    <option>Female</option>
    <option>Male</option>
</select>
<br>
<br>
password:    <input type= "password" name="password" placeholder="password" required="">
<br>
<br>
Submit Here:  <input type="submit" name="submit">
<br>
<br>
<span> Are you registered already? </span>
<br>
<br>
</form>

<!-- <?php echo $_GET["username"]?> -->



</body>
</html> 