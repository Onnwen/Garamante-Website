<?php
require_once('connection.php');

$user_id = $_POST['user_id'] ?? '';

$sql = "INSERT INTO Garamante.chronology (user_id, event_id, content_name) VALUES (:user_id, 1, 'garamante.it')";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();

echo shell_exec('sh ../pull.sh');