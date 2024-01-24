<?php include'db_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php if (isset($_GET['error'])):?>
		<p><?php echo $_GET['error']; ?></p>

	<?php endif ?>
		<form action="uploadtamil.php"  method="post"  enctype="multipart/form-data">
			
			<hr>
			<div class="input">
				<table  border="1">
					<center><h1>Upload Tamil books</h1></center>
					<tr>
						<th>Book_name	</th>
						<th>Author</th>
						<th>Details</th>
						<th>Image</th>
						<th>Book_pdf</th>
					</tr>
					<tr>
						<td><input  type="text" name="book_name"></td>
						<td><input type="text" name="author"></td>
						<td><input type="text" name="detail"></td>
						<td><input type="file" name="image"></td>
						<td><input type="file" name="book_pdf"></td>
						<td><input type="submit" name="tamil" id="upload" value="Upload"></td>


					</tr>

				</table ><br>
			</form>
			<center>
			<table border="1">

					<tr>
						
						<th>Book_name	</th>
						<th>Author</th>
						<th>Details</th>
						
						
					</tr>
					<tr>
						<td> <?php 
    $sql = "SELECT * FROM tamil";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res)>0) {
        while ($rows=mysqli_fetch_array($res)) {?>
        		
        		<tr>
        		
        		<td>"<?php echo $rows['book_name'];?>"</td>
        		<td>"<?php echo $rows['author_name']?>"</td>
        		<td>"<?php echo $rows['details'];?>"</td>
        		
        		       		
        		

        		</tr>



        		<?php

           }  } ?></td>


					</tr>

				</table></center>

</body>
</html>