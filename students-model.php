<?php 

	/**
	* student model
	*/
	class students
	{
		private $db;
		function __construct($db) {
			$this->db = $db;
		}

		public function dataview($query) {
			$number = 1;
			$stmt = $this->db->prepare($query);
			$stmt->execute();

			if ($stmt->rowCount()>0) {
				while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
		<tr>
			<td><?php echo $number ?></td>
			<td><?php echo $rows['id_student']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['address']; ?></td>
			<td><?php echo $rows['in_year']; ?></td>
			<td><?php echo $rows['date_of_birth']; ?></td>
			<td><?php echo $rows['id_room']; ?></td>
			<td>
		    	<a href=""><span class="glyphicon glyphicon-edit">Edit</span></a></td>
		    <td>
		    	<a href=""><span class="glyphicon glyphicon-remove">Remove</span></a></td>
		</tr>
		<?php		
			$number++;} // end while
			} // end if
		} // end function dataview

		public function insert_data($id, $name, $address, $in_year, $date_of_birth, $id_room) {
			$stmt = $this->db->prepare("INSERT INTO students VALUES (?,?,?,?,?,?)");
			$stmt->execute();
			
			// contoh insert pake bindparam
			// $calories = 150;
			// $colour = 'red';
			// $sth = $dbh->prepare('SELECT name, colour, calories
			//     FROM fruit
			//     WHERE calories < ? AND colour = ?');
			// $sth->bindParam(1, $calories, PDO::PARAM_INT);
			// $sth->bindParam(2, $colour, PDO::PARAM_STR, 12);
			// $sth->execute();

		}

	} // end class
  	?>