<?php include'db_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <center><h1>Delete Space books</h1>
                <table border="1">
                    <tr>
                        <th>Book_ID</th>
                        <th>Book_name   </th>
                        <th>Author</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Book_pdf</th>
                        <th>Operation</th>
                    </tr>
                    <tr>
                        <td> <?php 
    $sql = "SELECT * FROM space";
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
                
                <td><a href="deletespace.php?id=<?php echo $rows['id']; ?>">Delete</a></td>              
                

                </tr>



                <?php

           }  } ?></td>


                    </tr>

                </table>


            </div>

</body>
</html>