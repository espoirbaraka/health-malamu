<?php
session_start();
require '../class/app.php';
$app=new App('health-malamu');
$event=$_POST['event'];


if($event=='UPDATE_INFORMATION'){
   $nom = $_POST['nom'];
   $abbreviation = $_POST['abbreviation'];
   $presentation = $_POST['presentation'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];
   $video = $_POST['video'];
   $objectif = $_POST['objectif'];
   $adresse = $_POST['adresse'];
   $filename = $_FILES['avatar']['name'];
   $data1=[$nom, $telephone, $email, $video, $abbreviation, $presentation, $objectif, $adresse];
   $data2=[$nom, $telephone, $email, $video, $abbreviation, $presentation, $objectif, $adresse, $filename];
   $sql1="UPDATE t_information SET DesignationAPK=?, Telephone=?, Email=?, VideoYoutube=?, Abbreviation=?, Presentation=?, Objectif=?, Adresse=? WHERE CodeInformation=1";
   $sql2="UPDATE t_information SET DesignationAPK=?, Telephone=?, Email=?, VideoYoutube=?, Abbreviation=?, Presentation=?, Objectif=?, Adresse=?, Avatar=? WHERE CodeInformation=1";
   if($filename!=''){
      if($app->prepare($sql2,$data2,1)){
      move_uploaded_file($_FILES['avatar']['tmp_name'], '../fichier/'.$filename);
       $_SESSION['success'] = 'Information modifié';
      }else{
         $_SESSION['error'] = 'Information non modifié';
      }
   }else{
      if($app->prepare($sql1,$data1,1)){
            $_SESSION['success'] = 'Information modifié';
         }else{
            $_SESSION['error'] = 'Information non modifié';
         }
   }
   
   header("Location: ../information.php");
}
