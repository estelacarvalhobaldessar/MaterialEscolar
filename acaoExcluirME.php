<?php
// conexao com o banco - include
include_once 'conexao.php';

// pegar o ID via GET
$id = $_GET['id'];

// montar o SQL que precisa excluir o dado
$sql = "DELETE FROM materialescolar WHERE MaterialEscolarID = ".$id;

if (mysqli_query($conn, $sql)) {
    header("Location: MaterialEscolar.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

  mysqli_close($conn);
  ?>