<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
	<?php

    try{
        $pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=przychodniatworzenie','root','');
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("ERROR: Could not connect. " . $e->getMessage());
    }
    
	?>
	</body>
</html>