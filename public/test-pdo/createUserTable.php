<?php

// returns true if $tableName exists
function tableExists($dbh, $tableName)
{
	$result = $dbh->query("SHOW TABLES LIKE '$tableName'");
	return ($result !== false && $result->rowCount() > 0);
}

	try {

		if(!tableExists($pdo,'users')) {
			$pdo->exec("CREATE TABLE IF NOT EXISTS users (id INT not null AUTO_INCREMENT, name VARCHAR(30), password VARCHAR(30), email VARCHAR(30), tel VARCHAR(30), primary key (id))");

			$pdo->exec("DELETE FROM users");
			$pdo->exec("INSERT INTO users (name,password,email,tel) VALUES('riri', '123456', 'riri@disney.com','0612345678')");
			$pdo->exec("INSERT INTO users (name,password,email,tel) VALUES('fifi', '789010', 'fifi@disney.com','0712345678')");
			$pdo->exec("INSERT INTO users (name,password,email,tel) VALUES('loulou', '111213', 'loulou@disney.com','0312345678')");
		}
	}
	catch (PDOException $erreur) {
		myLog('Erreur : '.$erreur->getMessage());
	}

?>


