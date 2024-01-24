<?php
if (isset($_POST['submit'])) {
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
		if($img_size > 30000000 ) {
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
				$img_upload_path = 'pdf/history/image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path); 

				$new_pdf_name= uniqid("PDF-",true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'pdf/history/'.$new_pdf_name;
				move_uploaded_file($pdf_tmp_name, $pdf_upload_path);
				
				$sql ="INSERT INTO images(book_name,author_name,details,image_url,pdf_url) VALUES ('$book_name','$author','$detail','$new_img_name','$new_pdf_name')";
				mysqli_query($conn, $sql);
				header("location: index.php");
			}else{
  				$em = "You cont upload this file";
				header("location: alter.php?error=$em");
			}
		}

	}else{
		$em = "Pdf Is Not Support";
		header("location: alter.php?error=$em");
	}
}
else{
	$em = "errorrss";
	header("location: alter.php?error=$em");
}



if (isset($_POST['delete']))
{

header("location:index.php");
	
}else{
	echo "not";
}





if (isset($_POST['general'])) {
	include "db_conn.php";
	echo "<pre>";
	print_r($_FILES['image']);
	print_r($_FILES['book_pdf']);
	

	echo "</pre>";
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
				$img_upload_path = 'pdf/general/image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path); 

				$new_pdf_name= uniqid("PDF-",true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'pdf/general/'.$new_pdf_name;
				move_uploaded_file($pdf_tmp_name, $pdf_upload_path);
				
				$sql ="INSERT INTO general(image_url,pdf_url) VALUES ('$new_img_name','$new_pdf_name')";
				mysqli_query($conn, $sql);
				header("location: index.php");
			}else{
  				$em = "You cont upload this file";
				header("location: alter.php?error=$em");
			}
		}

	}else{
		$em = "Pdf Is Not Support";
		header("location: alter.php?error=$em");
	}
}
else{
	$em = "error";
	header("location: alter.php?error=$em");
}


if (isset($_POST['science'])) {
	include "db_conn.php";
	echo "<pre>";
	print_r($_FILES['image']);
	print_r($_FILES['book_pdf']);
	

	echo "</pre>";
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
				$img_upload_path = 'pdf/cs/image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path); 

				$new_pdf_name= uniqid("PDF-",true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'pdf/cs/'.$new_pdf_name;
				move_uploaded_file($pdf_tmp_name, $pdf_upload_path);
				
				$sql ="INSERT INTO cs(image_url,pdf_url) VALUES ('$new_img_name','$new_pdf_name')";
				mysqli_query($conn, $sql);
				header("location: index.php");
			}else{
  				$em = "You cont upload this file";
				header("location: alter.php?error=$em");
			}
		}

	}else{
		$em = "Pdf Is Not Support";
		header("location: alter.php?error=$em");
	}
}
else{
	$em = "error";
	header("location: alter.php?error=$em");
}


if (isset($_POST['space'])) {
	include "db_conn.php";
	echo "<pre>";
	print_r($_FILES['image']);
	print_r($_FILES['book_pdf']);
	

	echo "</pre>";
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
				$img_upload_path = 'pdf/space/image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path); 

				$new_pdf_name= uniqid("PDF-",true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'pdf/space/'.$new_pdf_name;
				move_uploaded_file($pdf_tmp_name, $pdf_upload_path);
				
				$sql ="INSERT INTO space(image_url,pdf_url) VALUES ('$new_img_name','$new_pdf_name')";
				mysqli_query($conn, $sql);
				header("location: index.php");
			}else{
  				$em = "You cont upload this file";
				header("location: alter.php?error=$em");
			}
		}

	}else{
		$em = "Pdf Is Not Support";
		header("location: alter.php?error=$em");
	}
}
else{
	$em = "error";
	header("location: alter.php?error=$em");
}





if (isset($_POST['tamil'])) {
	include "db_conn.php";
	echo "<pre>";
	print_r($_FILES['image']);
	print_r($_FILES['book_pdf']);
	

	echo "</pre>";
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
				$img_upload_path = 'pdf/tamil/image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path); 

				$new_pdf_name= uniqid("PDF-",true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'pdf/tamil/'.$new_pdf_name;
				move_uploaded_file($pdf_tmp_name, $pdf_upload_path);
				
				$sql ="INSERT INTO tamil(image_url,pdf_url) VALUES ('$new_img_name','$new_pdf_name')";
				mysqli_query($conn, $sql);
				header("location: index.php");
			}else{
  				$em = "You cont upload this file";
				header("location: alter.php?error=$em");
			}
		}

	}else{
		$em = "Pdf Is Not Support";
		header("location: alter.php?error=$em");
	}
}
else{
	$em = "error";
	header("location: alter.php?error=$em");
}



if (isset($_POST['delete'])) {
	include "db_conn.php";

$rows=$_POST['deletekey'];
$query=mysql_query("DELETE * FROM images WHERE id='$rows'") or die("not found".mysql_error());


if (mysql_num_rows($query)>0) {
	$querydel=mysql_query("DELETE FROM images WHERE id='$rows") or die("not delete".mysql_error());
	echo "<font color='green'>record delete";
}
else{
		echo "not extst";
}

}else{
	echo "errorr";
}
