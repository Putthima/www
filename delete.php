
<?php
	$conn = mysqli_connect('putthimafah.mysql.database.azure.com', 'putthima@putthimafah', 'fhpthms954*', 'itflab');
	$sql = 'DELETE FROM guestbook WHERE id = '.$_GET['id'].'';
?>
<!DOCTYPE html>
<html>
    <title>Delete | page</title>
    <h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
                                echo "Deleted"
								?>
							<script>
			   window.location.replace("show.php");
		   </script>
							<?php
							}
							else {
								echo "Failed";
							}
						?>
						</h2>
</html>