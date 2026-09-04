<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO students (name,email,password)
VALUES ('$name' , '$email' , '$password')";

if (mysqli_query($conn,$sql)){
    echo "REgistration successful!";
}else{
    echo "REgistration failed!";
}
}
  ?>  

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Registration<h1>

    <form method ="post">
        <p>
            <label>Student Name: </label><br>
            <input type="text" name="name"
            required>
       </p>
       <p>
        <label>Email: </label><br>
            <input type="email" name="email"
            required>
</p>
<p>
    <label>Password: </label><br>
            <input type="password" name="password"
            required>
</p>
<p>
    <input type="submit" value="Register">
</form>

<a href="login.php">Already have an account? Login</a>
<br><br>
<a href="index.html">Back to Home</a>
 
</body>
</html>