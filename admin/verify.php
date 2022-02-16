<?php
	include 'includes/sessionoutconnected.php';
	$conn = $app->getPDO();

	if(isset($_POST['submit'])){
		$mail = $_POST['email'];
		$password = sha1($_POST['password']);
		try{
			$stmt = $conn->prepare("SELECT * FROM t_user WHERE mail = ? AND password = ?");
            $stmt->execute(array($mail,$password));
			$nbre = $stmt->rowCount();
			if($nbre == 1){
				$row = $stmt->fetch();
				$_SESSION['CodeUser'] = $row['CodeUser'];
			}
			else{
				$_SESSION['success'] = 'Utilisateur inexistant';
			}
		}
		catch(PDOException $e){
			echo "Erreur de connexion: " . $e->getMessage();
		}
	}
	else{
		$_SESSION['error'] = 'Entrez vos identifiants de connexion d\'abord';
	}
	header('location: index.php');

?>
