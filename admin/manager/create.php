<?php
session_start();
require '../class/app.php';
$app = new App('health-malamu');
$event = $_POST['event'];

if ($event == 'CREATE_TEAM') {
   $filename = $_FILES['photo']['name'];
   $data = [$_POST['nom'], $_POST['postnom'], $_POST['prenom'], $_POST['fonction'], $_POST['telephone'], $_POST['mail'], $filename];
   $sql = "INSERT INTO t_membre(NomMembre,PostnomMembre,PrenomMembre,Fonction, Telephone, Mail, Photo) VALUES(?,?,?,?,?,?,?)";
   if (!empty($filename)) {
      if ($app->prepare($sql, $data, 1)) {
         move_uploaded_file($_FILES['photo']['tmp_name'], '../fichier/' . $filename);
         $_SESSION['success'] = 'Membre ajouté';
      } else {
         $_SESSION['error'] = 'Membre non ajoute';
      }
   }
   header("Location: ../team.php");
}


if ($event == 'CREATE_PARTENAIRE') {
   $filename = $_FILES['photo']['name'];
   $data = [$_POST['nom'], $_POST['telephone'], $_POST['mail'], $_POST['site'], $filename];
   $sql = "INSERT INTO t_partenaire(NomPartenaire,Telephone,Mail,SiteWeb, Avatar) VALUES(?,?,?,?,?)";
   if (!empty($filename)) {
      if ($app->prepare($sql, $data, 1)) {
         move_uploaded_file($_FILES['photo']['tmp_name'], '../fichier/' . $filename);
         $_SESSION['success'] = 'Partenaire ajouté';
      } else {
         $_SESSION['error'] = 'Partenaire non ajoute';
      }
   }
   header("Location: ../partenaire.php");
}

if ($event == 'CREATE_TEMOIGNAGE') {
   $filename = $_FILES['photo']['name'];
   $data = [$_POST['nom'], $_POST['temoignage'], $filename];
   $sql = "INSERT INTO t_temoignage(Auther,Temoignage,Photo) VALUES(?,?,?)";
   if (!empty($filename)) {
      if ($app->prepare($sql, $data, 1)) {
         move_uploaded_file($_FILES['photo']['tmp_name'], '../fichier/' . $filename);
         $_SESSION['success'] = 'Temoignage ajouté';
      } else {
         $_SESSION['error'] = 'Temoignage non ajoute';
      }
   }
   header("Location: ../temoignage.php");
}


if ($event == 'CREATE_FONCTIONNALITE') {
   $filename = $_FILES['photo']['name'];
   $data = [$_POST['titre'], $_POST['detail'], $filename];
   $sql = "INSERT INTO t_fonctionnalite(Titre,Detail,Avatar) VALUES(?,?,?)";
   if (!empty($filename)) {
      if ($app->prepare($sql, $data, 1)) {
         move_uploaded_file($_FILES['photo']['tmp_name'], '../fichier/' . $filename);
         $_SESSION['success'] = 'Fonctionnalité ajoutée';
      } else {
         $_SESSION['error'] = 'Fonctionnalité non ajoutee';
      }
   }else{
      if ($app->prepare($sql, $data, 1)) {
         $_SESSION['success'] = 'Fonctionnalité ajoutée';
      } else {
         $_SESSION['error'] = 'Fonctionnalité non ajoutee';
      }
   }
   header("Location: ../fonctionnalite.php");
}

if ($event == 'CREATE_POST') {
   $filename = $_FILES['photo']['name'];
   $creator = $_SESSION['CodeUser'];
   $data = [$_POST['titre'], $_POST['categorie'], $_POST['contenue'], $creator, $filename];
   $sql = "INSERT INTO t_post(Titre,CodeCategorie,Contenue,Created_by,Photo) VALUES(?,?,?,?,?)";
   $data2 = [$_POST['titre'], $_POST['contenue'], $filename, $creator];
   $sql2 = "UPDATE t_post SET Titre=?, Contenue=?, Photo=?, Created_by=? WHERE CodePost=7";
   if (!empty($filename)) {
      if($_POST['categorie']==1){
         if ($app->prepare($sql2, $data2, 1)) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../fichier/' . $filename);
            $_SESSION['success'] = 'Publication posté';
         } else {
            $_SESSION['error'] = 'Publication non posté';
         }
      }else{
         if ($app->prepare($sql, $data, 1)) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../fichier/' . $filename);
            $_SESSION['success'] = 'Publication posté';
         } else {
            $_SESSION['error'] = 'Publication non posté';
         }
      }
      
   }
   header("Location: ../publication.php");
}

if ($event == 'CREATE_CAPTURE') {
   $filename = $_FILES['photo']['name'];
   $data = [$filename];
   $sql = "INSERT INTO t_capture_apk(Image) VALUES(?)";
   if (!empty($filename)) {
      if ($app->prepare($sql, $data, 1)) {
         move_uploaded_file($_FILES['photo']['tmp_name'], '../fichier/' . $filename);
         $_SESSION['success'] = 'Capture ajoutée';
      } else {
         $_SESSION['error'] = 'Capture non ajoutee';
      }
   }
   header("Location: ../capture.php");
}

if ($event == 'CREATE_QUESTION') {
   $data = [$_POST['question'], $_POST['reponse']];
   $sql = "INSERT INTO t_question(Question,Reponse) VALUES(?,?)";
      if ($app->prepare($sql, $data, 1)) {
         $_SESSION['success'] = 'Question ajoutée';
      } else {
         $_SESSION['error'] = 'Question non ajoutee';
      }
   
   header("Location: ../question.php");
}
