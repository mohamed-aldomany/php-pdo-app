<?php require 'header.php'; 

if (isset($_POST['submit'])) {
	
	$title = $_POST['title'];
	$author= $_POST['author'];
	$active= $_POST['active'];

	if (empty($title)||empty($author)||empty($active)) {
		$error = "<div class='alert alert-danger' style='margin-top:30px;' role='alert'>Oh snap! Change a few things up and try submitting again.</div>";
	}else{
		$stmt = $db->prepare("INSERT INTO detail VALUES(NULL,:title,:author,:active)");
		$stmt->bindParam(':title',$title);
		$stmt->bindParam(':author',$author);
		$stmt->bindParam(':active',$active);
		$stmt->execute();
		$done = '<div class="alert alert-success" style="margin-top:30px;"" role="alert">Well done! You successfully read this important alert message.</div>';
	}

}

?>

<form action="" method="post">
	<?php
	if (isset($done)) {
		echo $done;
	}
	 if (isset($error)) {
		echo $error;
	} ?>
  <div class="form-group">
    <label>title</label>
    <input type="text" class="form-control" name="title" placeholder="title">
  </div>
  <div class="form-group">
    <label>author</label>
    <input type="text" class="form-control" name="author" placeholder="author">
  </div>
  <select class="form-control" name="active">
	<option value="0">un active</option>
	<option value="1">active</option>
  </select>	
 
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

<?php require 'footer.php'; ?>
