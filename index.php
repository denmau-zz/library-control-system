<?php include 'includes/session.php'; ?>
<?php
	$where = '';
	if(isset($_GET['category'])){
		$catid = $_GET['category'];
		$where = 'WHERE category_id = '.$catid;
	}
?>
<?php include 'includes/header.php'; ?>
<title>LMS</title>
<link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
<body class="hold-transition layout-top-nav">
<div class="wrapper bg-darkgreen">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper bg-green">
	    <div class="container bg-green">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-8 col-sm-offset-2">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div class="box">
	        			<div class="box-header with-border">
	        				<div class="input-group">
				                <input type="text" class="form-control input-lg" id="searchBox" placeholder="Search for ISBN, Title or Author">
				                <span class="input-group-btn">
				                    <button type="button" class="btn btn-primary btn-flat btn-lg"><i class="fa fa-search"></i> </button>
				                </span>
				            </div>
	        			</div>
	        			<div class="box-body">
	        				<div class="input-group col-sm-5">
				                <span class="input-group-addon">Category:</span>
				                <select class="form-control" id="catlist">
				                	<option value=0>ALL</option>
				                	<?php
				                		$sql = "SELECT * FROM category";
				                		$query = $conn->query($sql);
				                		while($catrow = $query->fetch_assoc()){
				                			$selected = ($catid == $catrow['id']) ? " selected" : "";
				                			echo "
				                				<option value='".$catrow['id']."' ".$selected.">".$catrow['name']."</option>
				                			";
				                		}
				                	?>
				                </select>
				             </div>
	        				<table class="table table-bordered table-striped" id="booklist">
			        			<thead class="bg-green">
			        				<th>ISBN</th>
			        				<th>Title</th>
			        				<th>Author</th>
			        				<th>Status</th>
			        			</thead>
			        			<tbody>
			        			<?php
			        				$sql = "SELECT * FROM books $where";
			        				$query = $conn->query($sql);
			        				while($row = $query->fetch_assoc()){
			        					$status = ($row['status'] == 0) ? '<span class="label label-success">available</span>' : '<span class="label label-danger">not available</span>';
			        					echo "
			        						<tr>
			        							
			        							<td class='bg-green'>".$row['isbn']."</td>
			        							<td class='bg-green'>".$row['title']."</td>
			        							<td class='bg-green'>".$row['author']."</td>
			        							<td class='bg-green'>".$status."</td>
			        						</tr>
			        					";
			        				}
			        			?>
			        			</tbody>
			        		</table>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	      </section>
	     

		  <div class="container">
			  <div class="row lg-3 sm-3 xsl-1">
				  <p class="text-align-center">Library status:- Number of student: <?php 
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
		  </div>
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#catlist').on('change', function(){
		if($(this).val() == 0){
			window.location = 'index.php';
		}
		else{
			window.location = 'index.php?category='+$(this).val();
		}
		
	});
});
</script>
</body>
</html>