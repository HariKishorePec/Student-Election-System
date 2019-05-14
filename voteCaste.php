<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "","studentVote") or die(mysqli_error($conn));
$vid = $_SESSION['vid'];
echo '<br><h1><center>Student Election System</center></h1>';
echo "<div class='c1'>";
ECHO "Your vote was successfully recorded.<br>";
$cand_id=$_POST['chosen_candidate'];
echo "voted to candidate with id= ".$cand_id;

echo "</div>";
$sql1 = "update users set voted='1' where id='$vid'";
$query1_result = mysqli_query( $conn, $sql1) or die(mysqli_error($conn));
//echo "Done.<br>";

$sql2 = "update candidate set voteCount = voteCount+1 where id='$cand_id' ";
$query2_result = mysqli_query( $conn, $sql2) or die(mysqli_error($conn));
//echo "<br>All Set.<br>";
 ?>
 <h3><a href="dashboard.php">Goto Dashboard</a></h3>
 <h3><a href="logout.php">LOGOUT</a></h3>
 <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<style type="text/css">
	*{
		text-align: center;
	}
	.c1{
		border: 2px solid yellow;
		display: inline-block;
		padding: 10px 20px;
	}
	h1{
		color: aqua;
	}
</style>