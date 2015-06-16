<?php
	function connectDB(){
		$conn = new PDO(
			'mysql:host=localhost;dbname=example-pdo', 'jg', '123456'
		);
		return $conn;
	}
	
	function base_url($url){
		$newUrl = "http://www.meusite.com/".$url;
		return $newUrl;
	}
?>
