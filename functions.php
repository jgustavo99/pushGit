<?php
	function connectDB(){
		$conn = new PDO(
			'mysql:host=localhost;dbname=example-pdo', 'jg', '123456'
		);
		return $conn;
	}
?>
