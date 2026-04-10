<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="salvaEscrita.css">
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
                <h1 class="CE">CADASTRO ESCRITA</h1>                    
                </div>
                <div class="cadastro">
                    <form action="./processaEscrita.php" method="post">
                        <input type="hidden" name="id">

                        <h2 class="MC">Marca Tinta</h2>
                        <input type="text" name="marca" placeholder="Digite a marca da tinta" class="MarcaCanetas">
                        
                        <h2 class="MC">Numeração Pincel</h2>
                        <input type="text" name="numeracao" placeholder="Digite a numeração do pincel" class="MarcaCanetas">
                        
                        <h2 class="MC">Cor Tinta</h2>                        
                        <input type="text" name="cor" placeholder="Digite a cor da tinta" class="MarcaCanetas">
                        
                        <input type="submit" value="Salvar">
                    </form>
                </div>
            </div>
        </div>
    </body>
</body>
</html>