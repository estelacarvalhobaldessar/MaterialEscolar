<?php
include_once 'conexao.php';
// pega os dados -name 
  $mochila = $_POST['marcaMochila'];
  $estojo = $_POST['estojo'];
  $garrafa = $_POST['garrafa'];
  $escritaID = $_POST['escrita'];
  $escritaID = $_POST['pintura']
  $id = $_POST['id'];

   if ( empty($id)) {
       //INSERT
      $sql = "INSERT INTO materialescolar (EscritaID, PinturaID, Mochila, Estojo, Garrafa) 
            VALUES ('$escritaID','$escritaID','$mochila','$estojo', '$garrafa');";
      }else{
          //UPDATE
          $sql = "UPDATE materialescrita 
                 SET EscritaID = $escritaID, 
                 PinturaID = $PinturaID,
                 Mochila = '$mochila',
                 Estojo = '$estojo',
                 Garrafa = '$garrafa'
                  WHERE MaterialEscolarID = $id";

      };
      mysqli_query($conn,$sql);
      //redirecionar a pagina
      header('Location: ./MaterialEscolar.php');
?>