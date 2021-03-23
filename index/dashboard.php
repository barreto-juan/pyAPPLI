<?php

    //conexao
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_site-empresa";

    $con = mysqli_connect($host, $user, $pass, $db);
    //fim conexao


    if (isset($_POST['bt_login'])) {
        $nome = addslashes($_POST['nome']);
        $senha = addslashes($_POST['senha']);

        $sql = mysqli_query($con, "SELECT nome, senha FROM acesso WHERE nome=\"$nome\" AND senha=\"$senha\" LIMIT 1");

        if (mysqli_num_rows($sql) <= 0) {
            echo "<script> alert(\"Login e/ou senha incorreto(s)!\");window.location.href='http://localhost/site-empresa/index/login';</script>";
        }else{
            setcookie("login", $nome);
            echo "
                <div class=\"dashboard\">
                    <div class=\"contain-message\">
                        <h1>Mensagens</h1>
                        <p>Você possui <h1>
                
                        ";
                                    $sql = mysqli_query($con, "SELECT * FROM mensagens WHERE lida = 0");
                                    $cont=0;
                                    while($exibe = mysqli_fetch_assoc($sql)){
                                        $cont+=1;
                                    }
                                    echo $cont;
                        echo "
                        </h1>
                        mensagens não lidas!
                        </p>
                    
                    </div>
                    <div class=\"contain-shop\">
                        <h1>Vendas</h1>
                        <p>suas vendas aparecerão aqui!</p>
                    </div>
                    
                    <div class=\"table-message\">
                        <table border='1'>
                            <tr>
                                <td class=\"title-table\">
                                    Nome
                                </td>
                                <td class=\"title-table\">
                                    Email
                                </td>
                                <td class=\"title-table\">
                                    Mensagem
                                </td>
                                <td class=\"title-table\">
                                    Lido
                                </td>
                            </tr>
                            ";

                            $sql = mysqli_query($con, "SELECT * FROM mensagens");

                            while ($exibe = mysqli_fetch_assoc($sql)) {
                                echo "
                                    <tr>
                                        <td>
                                            ".$exibe['nome']."
                                        </td>
                                        <td>
                                            ".$exibe['email']."
                                        </td>
                                        <td>
                                            ".$exibe['mensagem']."
                                        </td>
                                        <td>
                                            <select>
                                                <option>"; 
                                                    if ($exibe['lida'] == 1){echo "Sim";}else{echo"Não";}
                                            echo "
                                                </option>
                                                ";
                                                if ($exibe['lida'] == 0){echo"<option>Sim</option>";}
                                            echo"
                                            </select>
                                        </td>
                                    </tr>
                                ";
                            }

                            echo "
                            <tr class=\"tr-button-table\">
                                <td class=\"button-table\">
                                    <input type=\"submit\" value=\"Atualizar\" name=\"update\">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            ";
        }


    }else{
        header("location:http://localhost/site-empresa/index/login");
    }



?>