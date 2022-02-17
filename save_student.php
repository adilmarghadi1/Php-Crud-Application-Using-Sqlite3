<?php
	require_once 'conn.php';
	
 


	if(ISSET($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $département = $_POST['département'];
        $salaire = $_POST['salaire'];
        $fonction = $_POST['fonction'];
        $photo = $_POST['photo'];
		 
		
		$query = "INSERT INTO `student` (firstname, lastname,date,département,salaire,fonction, photo) VALUES(:firstname, :lastname,:date,:département,:salaire,:fonction, :photo)";
		
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':date', $date);
		$stmt->bindParam(':département', $département);
        $stmt->bindParam(':salaire', $salaire);
		$stmt->bindParam(':fonction', $fonction);
        $stmt->bindParam(':photo', $photo);
	
		
		$stmt->execute();
		$conn = null;
		
		header('location: index.php');
		
	}
?>