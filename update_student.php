<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$student_id = $_POST['student_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $département = $_POST['département'];
        $salaire = $_POST['salaire'];
        $fonction = $_POST['fonction'];
        $photo = $_POST['photo'];
	 
		
		$query = "UPDATE `student` SET `firstname` = :firstname, `lastname` = :lastname,`date` = :date,`département` = :département,`salaire` = :salaire,`fonction` = :fonction, `photo` = :photo  WHERE `student_id` = :student_id";
		
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':date', $date);
		$stmt->bindParam(':département', $département);
        $stmt->bindParam(':salaire', $salaire);
		$stmt->bindParam(':fonction', $fonction);
        $stmt->bindParam(':photo', $photo);
		 
		$stmt->bindParam(':student_id', $student_id);
		
		$stmt->execute();
		$conn = null;
		
		header('location: index.php');
		
	}
?>