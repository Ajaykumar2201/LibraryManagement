<?php
if (isset($_POST['science'])) {
	include "db_conn.php";
	echo "<pre>";
	print_r($_FILES['image']);
	print_r($_FILES['book_pdf']);
	

	echo "</pre>";
	$book_name=$_POST['book_name']; 
	$author=$_POST['author'];
	$detail=$_POST['detail'];
	$img_name=$_FILES['image']['name'];
	$img_size=$_FILES['image']['size'];
	$tmp_name=$_FILES['image']['tmp_name'];
	$error=$_FILES['image']['error'];

	$pdf_name=$_FILES['book_pdf']['name'];
	$pdf_size=$_FILES['book_pdf']['size'];
	$pdf_tmp_name=$_FILES['book_pdf']['tmp_name'];

	$err=$_FILES['book_pdf']['error'];
	
	
	

	if ($error === 0 && $err ===0){
		if($img_size > 3000000000 ) {
			$em = "Sorry your file is too lorge";
			header("location: alter.php?error=$em");
		}else{
			$img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$pdf_ex=pathinfo($pdf_name, PATHINFO_EXTENSION);
			$pdf_ex_lc = strtolower($pdf_ex);

			
			$allowed_exs= array("jpg","jpeg","png");
			$allowed_exss= array("pdf");


			

			if (in_array($img_ex_lc, $allowed_exs)&&in_array($pdf_ex_lc,$allowed_exss) ) {
				$new_img_name= uniqid("IMG-",true).'.'.$img_ex_lc;
				$img_upload_path = 'cs/image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path); 

				$new_pdf_name= uniqid("PDF-",true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'cs/'.$new_pdf_name;
				move_uploaded_file($pdf_tmp_name, $pdf_upload_path);
				$sql ="INSERT INTO cs(book_name,author_name,details,image_url,pdf_url) VALUES ('$book_name','$author','$detail','$new_img_name','$new_pdf_name')";
				
				mysqli_query($conn, $sql);
				header("location: upcsfr.php");
			}else{
  				$em = "You cont upload this file";
				header("location: upcsfr.php?error=$em");
			}
		}

	}else{
		$em = "Pdf Is Not Support";
		header("location: upcsfr.php?error=$em");
	}
}
else{
	$em = "error";
	header("location: upcsfr.php?error=$em");
}