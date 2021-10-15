<?php
	include_once 'db.php';
	$comment_id = $_POST['comment_id'];
	$conn = mysqli_connect("localhost:3306","root","","shanilv_Story");
	$sql_del = "DELETE FROM comments WHERE id = $comment_id";
	$stmt = $conn->prepare($sql_del);
	$stmt->execute();
	header('Location: reviews.php');
	if (! empty($stmt)) {
		echo true;
	}
?>