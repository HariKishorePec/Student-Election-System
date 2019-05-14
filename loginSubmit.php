<?php 
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 
 ?>

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'StudentVote');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);   
      $myusername = $_POST['uname'];
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT id FROM users WHERE studentId = '$myusername' and pass_word = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $id=$row['id'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['vid'] = $row['id'];
         
         header("location: dashboard.php?a=$id");
      }else {
         $error = "Your Login Name or Password is invalid";
		  header("location: voterLogin.php?error=$error");
      }
   
?>