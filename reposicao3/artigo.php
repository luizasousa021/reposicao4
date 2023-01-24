<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div id="total">
        <div id="topo">
            <div id="logo">
            </div><!-- fecha a divisão logotipo -->
            <div id="menu">
                <a href="index.php">Home</a>
                <a href="#">Quem somos</a>
                <a href="#">Servicos</a>
                <a href="artigo.php">Artigo</a>
                <a href="#">Contato</a>

            </div><!-- fecha a divisão menu -->
        </div><!-- fecha a divisão topo -->

        <div id="banner">
            <img src="img/banner1.jpg" alt="banner do site"/>
        </div>
        
        <div id="conteudoartigo">
            <h1>Cadastro de Artigo</h1>
            <!-- O form precisa ser habilitado a enviar um arquivo
            enctype="multipart/form-data"-->
            <form action="gravarartigo.php" enctype="multipart/form-data">
            Título: <br> 
            <input type="text" name="título" required="required" id="">
            <br><br>
            Autor: <br> 
            <input type="text" name="autor" required="required" id="">
            <br><br>
            Artigo: <br> 
            <input type="text" name="artigo" required="required" id="">
            <br><br>
            Foto: <br> 
            <input type="file" name="foto" id="">
            <br><br>
            <input type="submit" value="Cadastrar Artigo">    
        </form>      
   </div><!--fechar a divisão conteúdo artigo-->   
   <div id="conteudoartigo2">
        <h2>Artigo</h2>
        <?php
        // abrir conexao com banco
        include_once'conexao.php';
        $sql = "select * form artigo";
        $result = mysql_fetch_array($con,$sql);
        while($row = mysql_fetch_array($result)){
            ?>
            <h4>Autor: <?php acho $row["autor"];?></h4>
            <h4>Título: <?php acho $row["titulo"];?></h4>
            <img
             src="upload/<?php  echo $row["foto"]; ?>" alt="">
            <?php
        }
        ?>
   </div>
        <div id="rodape">
            Restaurante - Fresh and Natural
    </div><!-- fecha a divisão total -->
    
</body>
</html>
