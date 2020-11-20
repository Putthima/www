<?php
	$conn = mysqli_connect('putthimafah.mysql.database.azure.com', 'putthima@putthimafah', 'fhpthms954*', 'itflab');

	$id = $_GET['id'];

	$sql = 'SELECT * FROM guestbook WHERE id = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: show.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "update.php" method = "post" >
  <input type="text" name="id" value="<?php echo $data['id']; ?>" class="form-control d-none" required>
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name" value="<?php echo $data['name']; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"><?php echo $data['comment']; ?></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link" value="<?php echo $data['link']; ?>"> <br><br>
    <input type="submit" id="commentBtn">
  </form>
</body>
</html>
