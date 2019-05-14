<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home | Student Voting System</title>
        <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
        <style>
            body{
               color: white;
			
            }
            input{
                width: 250px;
                padding: 10px;
                margin: 5px;
                border-radius: 10px;
            }
            hr{
                align: center;
                width: 500px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="master.css">
    </head>
    <body>
    <center>
        <h1>Student Election System</h1>
		<h3>New User Registration </h3>
		<h3> <a href="index.php">Goto HOME</a></h3>
        <hr>
        <h3>New Record Insertion</h3>
        <form action="registerVoterScript.php" method="post">
			
            <input type="text" placeholder="Name" name="name" >
            <br>
            <input type="text" placeholder="StudentId" name="sid">
            <br>
            <input type="password" placeholder="Password" name="pass">
            <br>
            <input type="text" placeholder="Contact" name="contact">
            <br>
            <input  class="btn btn-primary" type="submit" name="submit" value="Register">
        </form>
        <hr>
        
    </center>
        <?php
            
        ?>
    </body>
</html>
