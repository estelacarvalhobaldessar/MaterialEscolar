<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Pintura.css">
</head>
<body>
    <header>
        <div class="box1">
            <h1 class="ME">PINTURA</h1>
            <div class="caixaMenu">
                <nav>
                    <ul>
                        <li><a href="Escrita.php"><h2>Escrita</h2></a></li>
                        <li><a href="MaterialEscolar.php"><h2>Material Escolar</h2></a></li>
                        <li><a href="Pintura.php"><h2>Pintura</h2></a></li>
                        <li><a href="salvaPintura.php" class="adiciona"><h2>+</h2></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <body>
        <div class="box2">
            <div class="ListaPintura">
                <h1 class="IP">ITENS DE PINTURA</h1>
                <div class="CaixaPintura">
                    <table>
                        <?php 
                            $sql = "SELECT PinturaID,Tinta,Pincel,CorTinta FROM pintura;";
                            $result = mysqli_query($conn, $sql);
                        ?>

                        <tr>
                            <th>ID</th>
                            <th>Tinta</th>
                            <th>Pincel</th>
                            <th>Cor da Tinta</th>
                            <th>Ações</th>
                        </tr>

                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                             echo '<tr>
                                <th>'.$row["PinturaID"].'</th>
                                <th>'.$row["Tinta"].'</th>
                                <th>'.$row["Pincel"].'</th>
                                <th>'.$row["CorTinta"].'</th>
                                <th>
                                    <a href="salvaPintura.php?id='.$row["PinturaID"].'">Editar</a>
                                    <a href="acaoExcluirPintura.php?id='.$row["PinturaID"].'">Excluir</a></th>
                            </tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</body>
</html>