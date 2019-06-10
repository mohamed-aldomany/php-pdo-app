
<?php require 'header.php'; ?>

<table class="table table-hover">
	<tr>
		<th>ID</th>
		<th>TITLE</th>
		<th>AUTHOR</th>
		<th>ACTIVATED</th>
		<th>ACTION</th>
	</tr>
<?php
$stmt = $db->prepare("SELECT * FROM detail");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
	<tr>
		<td><?php echo $row['id']; ?></td>
  		<td><?php echo $row['title']; ?></td>
  		<td><?php echo $row['author']; ?></td>
  		<td><?php echo $row['active']; ?></td>
		<td> <button type="button" class="btn btn-warning"><a href="edit.php?id=<?php echo $row['id']; ?>" style="color: white;">EDIT</a></button> ||<button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id']; ?>" style="color: white;">DELETE</a></button>
		</td>
	</tr> 

<?php } 
 require 'footer.php';
?>

</table>
