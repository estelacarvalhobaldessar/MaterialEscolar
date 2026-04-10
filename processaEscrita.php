<?php
include_once 'conexao.php';
// pega os dados -name 
  $marca = $_POST['marca'];
  $cor = $_POST['cor'];
  $id = $_POST['id'];

   if ( empty($id)) {
       //INSERT
      $sql = "INSERT INTO Escrita (Caneta, Cor) 
            VALUES ('$marca', '$cor');";
      }else{
          //UPDATE
          $sql = "UPDATE Escrita 
                 SET Caneta = '$marca', 
                 Cor = '$cor'
                  WHERE EscritaID = $id";

      };
      mysqli_query($conn,$sql);
      //redirecionar a pagina
      header('Location: ./Escrita.php');
?>