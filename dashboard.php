<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $db = "db_site-empresa";

    $con = mysqli_connect($host, $user, $senha, $db);

    if (isset($_POST['bt_login'])) {
        $erros = "";

        if(!$_POST["nome"]){
            $erros .= "Campo login vazio!\\n";
        }if(!$_POST["senha"]){
            $erros .= "Campo senha vazio!\\n";
        }else{
            $nome = addslashes($_POST["nome"]);
            $senha = addslashes($_POST["senha"]);
        }

        if (strlen($erros) > 0) {
            echo "<script> alert(\"". $erros ."\") </script>";
            exit();
        }

        $query = "SELECT nome, senha FROM acesso WHERE nome=\"$nome\" AND senha=\"$senha\" LIMIT 1";
        $sql = $con->query($query) or die($con->error);

        if (mysqli_num_rows($sql) == 0) {
            $erros .= "Login e/ou senha incorreto(s)!\\n";
        }else{
            setcookie("login", $nome);
        }

        if (strlen($erros) > 0) {
            echo "<script> alert(\"". $erros ."\") </script>";
            exit();
        }

    }else{
        header("Location: login");
    }



?>