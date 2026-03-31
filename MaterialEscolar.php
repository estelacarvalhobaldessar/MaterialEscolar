<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="MaterialEscolar.css">
</head>
<body>
    <header>
        <div class="box1">
            <h1 class="ME">MATERIAL ESCOLAR</h1>
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
            <div class="ListaME">
                <h1 class="ME">MATERIAL ESCOLAR</h1>
                <div class="CaixaME">
                    <table>
                        <?php
                            $sql = "SELECT MaterialEscolarID,EscritaID,PinturaID,Mochila,Estojo,Garrafa FROM materialescolar;";
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <tr>
                            <th>ID</th>
                            <th>EscritaID</th>
                            <th>PinturaID</th>
                            <th>Mochila</th>
                            <th>Estojo</th>
                            <th>Garrafa</th>
                          </tr>
                        <?php  
                            while($row = mysqli_fetch_assoc($result)){  
                            echo '<tr>
                                <th>'.$row["MaterialEscolarID"].'</th>
                                <th>'.$row["EscritaID"].'</th>
                                <th>'.$row["PinturaID"].'</th>
                                <th>'.$row["Mochila"].'</th>
                                <th>'.$row["Estojo"].'</th>
                                <th>'.$row["Garrafa"].'</th>
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