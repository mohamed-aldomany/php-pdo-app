<?php require 'header.php'; ?>

<table class="table table-hover" style="margin-top: 30px;">
  <tr>
  	<th>ID</th>
  	<th>TITLE</th>
  	<th>AUTHOR</th>
  	<th>ACTIVATED</th>
  </tr>

<?php
$stmt = $db->prepare("SELECT * FROM detail");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
  <tr>
  	<td><?php echo $row['id']; ?></td>
  	<td><?php echo $row['title']; ?></td>
  	<td><?php echo $row['author']; ?></td>
  	<td><?php echo $row['active']; ?></td>
  </tr>
<?php } ?>

</table>

<?php require 'footer.php'; ?>
