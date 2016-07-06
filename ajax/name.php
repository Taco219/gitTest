<?php
if(isset($_POST['postName'])){
	require '../db/connect.php';

	
        $sql = "SELECT naam FROM `login` WHERE `pass` = '". trim($_POST['postName'])."'";
	
	$result = $conn -> query($sql);
	
	if($result -> num_rows != 0){
		echo "<select>";
			while($row = $result -> fetch_assoc()){
				echo "<option>" . $row['naam'] . "</option>";
			}
		echo "</select>";
	} else {
		echo "name not found";
	}
}
?>