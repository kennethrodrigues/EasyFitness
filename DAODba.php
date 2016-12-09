<?php
$host = "localhost";
$user = "root";
$password = "donald";

$basedados = "easyfitnessdb";

try {
	$conn = new pdo ( 'mysql:host=localhost;dbname=easyfitnessdb', 'root', 'donald', array (
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	) );
	$conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$conn->beginTransaction ();
	$consulta = $conn->prepare ( "select * from tipo where label = :rotulo or value = :valor;" );
	$consulta = $conn->prepare ( "select * from tipo where label = ? or value = ?;" );
	$consulta->bindParam ( 2, $_GET ['valor'], PDO::PARAM_STR );
	$consulta->bindParam ( 1, $_GET ['rotulo'], PDO::PARAM_STR );
	$consulta->execute ();
	$conn->commit ();
} catch ( PDOException $e ) {
	$conn->rollBack ();
	echo $e->getMessage ();
	echo $e->getTraceAsString ();
}
?>