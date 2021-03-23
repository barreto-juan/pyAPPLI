<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_site-empresa";

    $con = mysqli_connect($host, $user, $pass, $db);

    if(isset($_POST['submit'])){
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $mensagem = addslashes($_POST["mensagem"]);

        $sql = "INSERT INTO mensagens(nome, email, mensagem, lida) VALUES('$nome', '$email', '$mensagem', 0)";

        if(mysqli_query($con, $sql)){

            echo "
                <div class='main-alert'>
                    <div class='alert alert-sucessful'>
                        <h2>Sua mensagem foi enviada com sucesso!</h2>
                        <hr>
                        <p>Obrigada, $nome! A empresa agradece sua mensagem.</p> <br>
                        <p>Iremos te contatar assim que possível!</p>
                        <button onclick='window.history.back()'>Voltar</button>
                    </div>
                </div>
            ";
        }
    }else{
        header("location:http://localhost/site-empresa/index/");
    }

?>