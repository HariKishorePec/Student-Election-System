<?php
session_start();
if(!isset($_SESSION['vid'])) 
{ 
   header("location: voterLogin.php"); 

} 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<?php 
//$id=$_GET['a'];
$id = $_SESSION['vid'];
$db = mysqli_connect("localhost","root","","StudentVote");
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$amt = $row['amt'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
               background-color: #27ace854;
			
            }
            input{
                width: 250px;
                padding: 5px;
                margin: 5px;
                border-radius: 10px;
            }
            hr{
                align: center;
                width: 500px;
            }
        </style>
    </head>
    <body>
    <center>
        <h1>Student Election System </h1>
		<h3>  Voter's Dashboard </h3>
		
        <hr>
         <p ><b> Hello, <span style="text-transform: uppercase;"><?php echo $row['name']; ?></span></b></p>
		 
		
		<p>Student ID: <?php echo $row['studentId']; ?> </p>
		<hr>
		<?php 
			$voted = $row['voted'];
			if($voted==1){
				echo "<b>You have already voted.</b>";
			}else{
				echo "You have not voted. Please Vote";
				echo "<h2><a href='vote.php'>VOTE HERE</a></h2>";
			}
		?>
      
        <div class="jumbotron">
		
		
		<p>		
		
		
		</p>
		</div>
		<hr>
        <h3>Update Your Details</h3>
        <form action="update.php" method="post">    
        <input type="text" placeholder="Enter your Registered Email:" name="email3" value="<?php echo $row['studentId']; ?>" readonly >
            <br>
            <input type="text" placeholder=" NEW Name" name="name2" >
           
            <br>
            <input type="password" placeholder=" NEW Password" name="pass2" value="">
            <br>
            <input type="submit" name="submitUpd" value="Update">
        </form>
		 <hr>
		<h3><a href="logout.php">LOGOUT</a></h3>	
        <h3> <a href="index.php">Goto HOME</a></h3>
    </center>
        <?php
            
        ?>
    </body>
</html>
