<?php
	
class person{

	private $db;

	public function __construct($dbname){

		$this->db = $dbname;
	}


	public function insert($firstname,$lastname,$email,$address){

		try{
			$stmt = $this->db->prepare("INSERT INTO `user` (`firstname`, `lastname`, `email`, `address`) VALUES ( $firstname, $lastname, $email, $address");
			$stmt->bindparams(":firstname",$firstname);
			$stmt->bindparams(":lastname",$lastname);
			$stmt->bindparams(":email",$email);
			$stmt->bindparams(":address",$address);
			$stmt->execute();
			return true;
	}catch(PDOException $e){
		echo"th error : ".$e;
	}
	}

	public function update($id,$firstname,$lastname,$email,$address){

		try{
			$stmt = $this->db->prepare("UPDATE `user` SET `id`=:id,`firstname`=:firstname,`lastname`=:lastname,`email`=:email,`address`=:address WHERE id=:id");
			$stmt->bindparams(":firstname",$firstname);
			$stmt->bindparams(":lastname",$lastname);
			$stmt->bindparams(":email",$email);
			$stmt->bindparams(":address",$address);
			$stmt->bindparams(":id",$id);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
		echo"th error : ".$e;
		}
	}

	public function select($id){
		$stmt = $this->db->prepare("SELECT * FROM `user` WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$edit_row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $edit_row ;
	}


	public function delete($id){
		$stmt = $this->db->prepare("DELETE FROM `user` WHERE id=:id");
		$stmt->bindparams(":id",$id);
		$stmt-exec();
		return true; 
	}

	// start of DataView Function
	public function DataView(){
		$stmt = $this->db->prepare("SELECT * FROM `user`");
		$stmt->execute();
		if ($stmt->rowCount()>0) {?>
		
    	<thead>
        	<tr>
	            <th>ID</th>
	            <th>First Name</th>
	            <th>Last Name</th>
	            <th>E-mail</th>
	            <th>Address</th>
	            <th>Action</th>
        	</tr>
    	</thead>	
		<?php	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
   		<tbody>
	        <tr>
	            <td><?php echo $row['id']; ?></td>
	            <td><?php echo $row['firstname']; ?></td>
	            <td><?php echo $row['lastname']; ?></td>
	            <td><?php echo $row['email']; ?></td>
	            <td><?php echo $row['address']; ?></td>
	        	<td><a href="" class="uk-icon-button" uk-icon="file-edit"></a> <i>&nbsp</i> <a href="" class="uk-icon-button" uk-icon="trash"></td>
	        </tr>
    	</tbody>
			<?php }
		}



	}  // end of DataView Function

}

?>

	
