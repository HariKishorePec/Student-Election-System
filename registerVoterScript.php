<?php
    $con = mysqli_connect("localhost", "root", "", "StudentVote") or die (mysqli_error($con));
        
    echo '<br><h2><center>Student Election System</center></h2>';
   echo '<h3><center>Your details has successfully been recorded</center></h3>';
  // if(isset($_POST['submitIns'])){
        echo "<center><hr>"."Your details are:<br> ";
        $name = $_POST["name"];
        $email = $_POST["sid"];
        $pass = $_POST["pass"];
        $phone = $_POST["contact"];
        echo "Name : $name <br>";
        echo "Email : $email <br>";
        echo "Contact : $phone <br>";
        echo "Password : ****** <br> <hr> </center>";

        $insert_query = "insert into users( name, studentId, pass_word, mobileNumber) VALUES('$name','$email','$pass','$phone')";
        $insert_submit= mysqli_query($con, $insert_query) or die(mysqli_error($con));
   //} elseif (isset($_POST['submit'])) {
//}
  ?>
<style>
    hr{
        align: center;
        width: 500px;
    }
    </style>
    <center>
        <a href="./index.php">Home</a>
    </center>
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
