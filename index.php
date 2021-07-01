
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/alpha.css">
    <title>Library System</title>
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">  
</head>


<body style="background-color: darkgreen; color: black;">
    
              
		<div class="welcome">
			<p>Welcome to SEKU LIbrary</p>
		</div>
		  
			<div class="btn"><a href="admin/index.php" class="button">admin</a>
			 <a href="index.php" class="button1">student</a></div>
	       
		
			
		<div class="status">
			<p class="text-align-center"><b>Library status:- Number of student:</b> 
			<?php 
			include_once "includes/conn.php";
			$sql = "SELECT * FROM students ORDER BY id DESC ";
			$result = mysqli_query($conn, $sql);
			$tatresults = mysqli_num_rows($result);
			echo $tatresults;
			?> of <?php
			$studentFull = 250;
			echo $studentFull;
				?></p>
			<p>Space available: <?php
				$retainedResults =  $studentFull -  $tatresults;
				if($retainedResults < $studentFull){
					echo "There is about ".$retainedResults." available space in the library";
				}else{
					echo "Space is full, Please wait";
				}
			?></p>
			</div>
			

</body>
</html>