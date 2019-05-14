    
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<style>


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: cyan;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

</style>
<?php 
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
 ?>
    <center>
<h1>Student Election System</h1>

<h4>A Student Election Campaign Management Portal. Voting Made Easy.</h4>
</center>
<p>
<center>
</head>
<body>

<h2>Voter Login Form</h2>

<form action="loginSubmit.php" method="post">

 <div class="parent">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter StudentID" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
	 <p><mark><?php if(isset($_GET['error'])){ echo $_GET['error']; } ?></mark> </p>
    <button type="submit" >Login</button>
   <a href="index.php">New User? Register </a>
  </div>
  </div>


</form>