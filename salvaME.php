<?php
include_once 'conexao.php';


$id = $_GET['id'];

// montar o SQL que precisa excluir o dado
$sql = "SELECT * FROM materialescolar WHERE MaterialEscolarID = ".$id;

$result = mysqli_query($conn, $sql);
$dados1 = mysqli_fetch_assoc($result);
$dados2 = mysqli_fetch_assoc($result);
print_r($dados);
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
                        <li><a href="MaterialEscolar.php" class="volta"><h2><</h2></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <body>
        <div class="box2">
            <div class="ListaEscrita">
                <h1 class="CE">CADASTRO MATERIAL ESCOLAR</h1>                    
                </div>
                <div class="cadastro">
                    <form action="./processaME.php" method="post">
                        <input type="hidden" name="id">


                        <h2  class="MC">Escrita</h2>
                        <select name="escrita" class="escrita">
                            <?php
                            $sql = "SELECT EscritaID,Caneta,Cor FROM escrita;";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['EscritaID'];?>"><?php echo $row['Caneta'].'-'.$row['Cor'];?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <h2 class="MC">Pintura</h2>
                        <select name="pintura" class="escrita">
                            <?php
                            $sql = "SELECT PinturaID,Tinta,Pincel,CorTinta FROM pintura;";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['PinturaID'];?>"><?php echo $row['Tinta'].'-'.$row['CorTinta'];?></option>
                            <?php
                            }
                            ?>
                        </select>


                        <h2 class="MC">Marca Mochila</h2>
                        <input type="text" value="<?php echo $dados1['Mochila'];?>" name="marcaMochila" placeholder="Digite a marca da sua mochila" class="MarcaCanetas">

                        <h2 class="MC">Marca Estojo</h2>
                        <input type="text" name="estojo" value="<?php echo $dados2['Estojo']?>" placeholder="Digite a marca do seu estojo" class="MarcaCanetas">

                        <h2 class="MC">Marca Garrafa</h2>
                        <input type="text" name="garrafa" placeholder="Digite a marca da sua garrafa" class="MarcaCanetas">

                        <input type="submit" value="Salvar">
                    </form>
                </div>
            </div>
        </div>
    </body>
</body>
</html>