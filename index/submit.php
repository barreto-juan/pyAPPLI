<?php
    if(isset($_POST['submit'])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        echo "bem vindo $nome";
    }else{
        echo "preencha os dados do formulario!";
    }

?>