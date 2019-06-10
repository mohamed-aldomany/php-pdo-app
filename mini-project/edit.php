<?php
require 'connect.php';
require 'header.php';
if (isset($_GET['id'])) {
$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM detail WHERE id=:id");
$stmt->execute(array(':id'=>$id));
$row = $stmt->fetch();
}

if (isset($_POST['submit'])) {
  $id = $_GET['id'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $active = $_POST['active'];

  $stmt = $db->prepare("UPDATE detail SET title=:title,author=:author,active=:active WHERE id=:id");
  $stmt->execute(array(':id'=>$id,
    ':title'=>$title,
    ':author'=>$author,
    ':active'=>$active));
  header('Location:dashboard.php');
}

?>

<form method="post" action="">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="<?php echo $row['title']; ?>">
  </div>
  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" placeholder="<?php echo $row['author']; ?>">
  </div>
  <select class="form-control" name="active">
	<option value="0">un active</option>
	<option value="1">active</option>
  </select>	

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>


<?php
require 'footer.php';

?>