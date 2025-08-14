<?php
include "../BackEnd/connectDB.php";

$bookISBN = mysqli_real_escape_string($conn, $_POST['book_isbn']);
$newBookName = mysqli_real_escape_string($conn, $_POST['new_book_name']);


$checkBook = "SELECT * FROM books WHERE book_isbn = '$bookISBN'";
$checkBookResult = mysqli_query($conn, $checkBook);
if (mysqli_num_rows($checkBookResult) > 0) 
{
    $deleteQuery ="delete from books where book_isbn= '$bookISBN'";
	$query_run = mysqli_query($conn,$deleteQuery);
	header("Location: ../FrontEnd/adminStockF.php");
}
else {
	echo "<script>alert('Error: Book not found.');</script>";
}
?>