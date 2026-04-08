<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Escrita.css">
</head>
<body>
    <header>
        <div class="box1">
            <h1 class="ME">ESCRITA</h1>
            <div class="caixaMenu">
                <nav>
                    <ul>
                        <li><a href="Escrita.php"><h2>Escrita</h2></a></li>
                        <li><a href="MaterialEscolar.php"><h2>Material Escolar</h2></a></li>
                        <li><a href="Pintura.php"><h2>Pintura</h2></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <body>
        <div class="box2">
            <div class="ListaEscrita">
                <h1 class="IE">ITENS DE ESCRITA</h1>
                <div class="CaixaEscrita">
                    <table>
<?php
                    $sql = "SELECT EscritaID,Caneta,Cor FROM escrita;";
                    $result = mysqli_query($conn, $sql);
                    ?>
                        <tr>
                            <th>ID</th>
                            <th>Caneta</th>
                            <th>Cor</th>
                            <th>Ações</th>
                        </tr>

                        <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                        <th>'.$row["EscritaID"].'</th>
                                        <th>'.$row["Caneta"].'</th>
                                        <th>'.$row["Cor"].'</th>
                                        <th>
                                            <a href="">Editar</a>
                                            <a href="acaoExcluirEscrita.php?id='.$row["EscritaID"].'">Excluir</a>
                                        </th>
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