<?php

    if (isset($_POST['bt_login'])) {
        $erros = "";

        if(!$_POST["nome"]){
            $erros .= "Campo nome vazio! <br>";
        }if(!$_POST["senha"]){
            $erros .= "Campo senha vazio! <br>";
        }else{
            $nome = addslashes($_POST["nome"]);
            $senha = addslashes($_POST["senha"]);
        }

        if (strlen($erros) > 0) {
            echo $erros;
            header("location: login");
            exit();
        }

        global $con;
        $query = "SELECT nome, senha FROM acesso WHERE nome=\"$nome\" AND senha=\"$senha\" LIMIT 1";
        $sql = $con->query($query) or die($con->error);

        if (mysqli_num_rows($sql) == 0) {
            $erros .= "Login incorreto! <br>";
        }else{
            $_SESSION["nome"] = $nome;
        }

        if (strlen($erros) > 0) {
            echo $erros;
            header("location: login");
            exit();
        }

    }else{
        echo "Página restrita";
        header("location: login");
        exit();
    }



?>