<?php include'db_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" href="css/intex.css">
	
	
</head>
<body>



            <center>
            <ul>
                
                <li><a href="#history">History</a></li>
                <li><a href="#general"> General</a></li>
                <li><a href="#science">Computer Science</a></li>
                <li><a href="#space">Space</a></li>
                <li><a href="#english">Tamil</a></li>
            </ul>    
        </center>    
    

	
	<?php if (isset($_GET['error'])):?>
		<p><?php echo $_GET['error']; ?></p>

	<?php endif ?>
		<form action="upload.php"  method="post"  enctype="multipart/form-data">
			
			<hr>
			<div class="input">
				<table id="history" border="1">
					<center>History</center>
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
						<td><input type="submit" name="submit" id="upload" value="Upload"></td>


					</tr>

				</table ><br>
			</form>
			<form action="delete.php"  method="post"  enctype="multipart/form-data">
				<table border="1">
					<tr>
						<th>Book_ID</th>
						<th>Book_name	</th>
						<th>Author</th>
						<th>Details</th>
						<th>Image</th>
						<th>Book_pdf</th>
						<th>Operation</th>
					</tr>
					<tr>
						<td> <?php 
    $sql = "SELECT * FROM images";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res)>0) {
        while ($rows=mysqli_fetch_array($res)) {?>
        		
        		<tr>
        		<td>"<?php echo $rows['id']; ?>"</td>
        		<td>"<?php echo $rows['book_name'];?>"</td>
        		<td>"<?php echo $rows['author_name']?>"</td>
        		<td>"<?php echo $rows['details'];?>"</td>
        		<td>"<?php echo $rows['image_url'];?>"</td>
        		<td>"<?php echo $rows['pdf_url'];?>"</td>
        		
        		<td><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>         		
        		

        		</tr>



        		<?php

           }  } ?></td>


					</tr>

				</table>


			</div>
		</form>

		<form action="upload.php"  method="post"  enctype="multipart/form-data">
			
			<hr>
			<div class="input">
				<table id="general" border="1">  
					<center>General</center>
					<tr>
						<th>Book_name	</th>
						<th>Author</th>
						<th>Details</th>
						<th>Image</th>
						<th>Book_pdf</th>
					</tr>
					<tr>
						<td><input  type="text" name="Book_name[]"></td>
						<td><input type="text" name="Author"></td>
						<td><input type="text" name="Details"></td>
						<td><input type="file" name="image"></td>
						<td><input type="file" name="book_pdf"></td>
						<td><input type="submit" name="general" id="upload" value="Upload"></td>


					</tr>

				</table>


			</div>

		</form>


<form action="upload.php"  method="post"  enctype="multipart/form-data">
			
			<hr>
			<div class="input">
				<table id="science" border="1">
					<center>computer science</center>
					<tr>
						<th>Book_name	</th>
						<th>Author</th>
						<th>Details</th>
						<th>Image</th>
						<th>Book_pdf</th>
					</tr>
					<tr>
						<td><input  type="text" name="Book_name[]"></td>
						<td><input type="text" name="Author"></td>
						<td><input type="text" name="Details"></td>
						<td><input type="file" name="image"></td>
						<td><input type="file" name="book_pdf"></td>
						<td><input type="submit" name="science" id="upload" value="Upload"></td>


					</tr>

				</table>


			</div>

		</form>

		<form action="upload.php"  method="post"  enctype="multipart/form-data">
			
			<hr>
			<div class="input">
				<table id="space" border="1">
					<center>Space</center>
					<tr>
						<th>Book_name	</th>
						<th>Author</th>
						<th>Details</th>
						<th>Image</th>
						<th>Book_pdf</th>
					</tr>
					<tr>
						<td><input  type="text" name="Book_name[]"></td>
						<td><input type="text" name="Author"></td>
						<td><input type="text" name="Details"></td>
						<td><input type="file" name="image"></td>
						<td><input type="file" name="book_pdf"></td>
						<td><input type="submit" name="space" id="upload" value="Upload"></td>


					</tr>

				</table>


			</div>

		</form>


		<form action="upload.php"  method="post"  enctype="multipart/form-data">
			
			<hr>
			<div class="input">
				<table id="english" border="1">
					<center>Tamil</center>
					<tr>
						<th>Book_name	</th>
						<th>Author</th>
						<th>Details</th>
						<th>Image</th>
						<th>Book_pdf</th>
					</tr>
					<tr>
						<td><input  type="text" name="Book_name[]"></td>
						<td><input type="text" name="Author"></td>
						<td><input type="text" name="Details"></td>
						<td><input type="file" name="image"></td>
						<td><input type="file" name="book_pdf"></td>
						<td><input type="submit" name="tamil" id="upload" value="Upload"></td>


					</tr>

				</table>


			</div>

		</form>

		
		
	</body>
</html>