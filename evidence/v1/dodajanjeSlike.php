<?php 

require_once 'C:/xampp/htdocs/evidence/includes/DbOperations.php';

$response = array(); 

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['username']) and isset($_POST['img'])){
		$db = new DbOperations(); 

		if($db->dodajSliko($_POST['username'], $_POST['img'])){
			$slike = $db->getSlikeByUser($_POST['username']);
			$response['error'] = false; 
			$response['img'] = $slike['img'];
			$response['username'] = $slike['username'];
		}else{
			$response['error'] = true; 
			$response['message'] = "Invalid username or img";			
		}

	}else{
		$response['error'] = true; 
		$response['message'] = "Required fields are missing";
	}
}

echo json_encode($response);