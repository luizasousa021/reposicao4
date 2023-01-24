<?php
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $artigo = $_POST["artigo"];
    $foto = $_FILES["foto"]; //array
            
           
    $ext = explode(".", $foto["name"]); //[foto][ferias][jpg]
    $ext = array_reverse($ext); //[jpg][ferias][foto]
    $ext = $ext[0]; //jpg
    $ext = strtolower($ext);
            
     if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
        echo "Artigo inválido";
    }else{
        include_once'conexao.php';
        $nomefoto = data("YmdHis").rand(0000, 9999).".".$ext;
        //intrução que irá levar os dados para gravar a imagem
        $sql = "insert into artigo values
        (null,'".$titulo."','".$autor."','".$artigo."','".$nomefoto."')";
        
        if(mysql_query($con,$sql)){
            //mover a imagem para a pasta upload
            move_uploaded_file($foto["tmp_name"],"../upload".$nomefoto);
        }
    }
?>