<?php include 'db_conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<style>
		
		.alb{
			
			
		}
	</style>
</head>
<body>
<a href="index.php">&#8592;</a>
 <?php 
 	$sql = "SELECT * FROM images";
 	$res = mysqli_query($conn, $sql);

 	if (mysqli_num_rows($res)>0) {
 		while ($rows=mysqli_fetch_array($res)) {?>
 			<div class="alb">
 			<img src="upload/<?php echo $rows['image_url']?>"alt="errorr">
 			</div>
 	<?php	}  } ?>

</body>
</html>