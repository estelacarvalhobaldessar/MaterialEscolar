<?php
include_once 'conexao.php';
// pega os dados -name 
  $marca = $_POST['marca'];
  $numeracao = $_POST['numeracao'];
  $cor = $_POST['cor'];
  $id = $_POST['id'];

   if ( empty($id)) {
       //INSERT
      $sql = "INSERT INTO pintura (Tinta, Pincel, CorTinta) 
            VALUES ('$marca','$numeracao', '$cor');";
      }else{
          //UPDATE
          $sql = "UPDATE pintura 
                 SET Tinta = '$marca', 
                 Pincel = '$numeracao'
                 Cor = '$cor'
                  WHERE EscritaID = $id";

      };
      mysqli_query($conn,$sql);
      //redirecionar a pagina
      header('Location: ./Pintura.php');
?>