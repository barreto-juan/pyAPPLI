<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="img/icone-site2.png" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <title>Jinfo | Soluções em Informática</title>
</head>
<body>

    <input type="checkbox" name="" id="bt_menu">
    <label for="bt_menu">&#9776;</label>
    
    <nav>
        <span class="logo">
            Jinfo
        </span>

        <?php
            if(isset($_GET['url'])){
                $url = ($_GET['url']);
                $url = array_filter(explode('/', $url));
                if($url[0] != "dashboard"){
                    echo "
                        <ul>
                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#home\">Home</a></li>
                            <hr class=\"lista\">

                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#servicos\">Serviços</a></li>
                            <hr class=\"lista\">
                            
                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#sobrenos\">Sobre Nós</a></li>
                            <hr class=\"lista\">
                            
                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#contato\">Contato</a></li>
                        </ul>
                    ";
                }else{
                    echo "<h4>Bem-vindo, ".$_COOKIE['login']."!</h4>";
                    echo "<span class=\"logout\"><a href=\"logout\">Sair</a></span>";
                }
                
            }else{
                echo "
                        <ul>
                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#home\">Home</a></li>
                            <hr class=\"lista\">

                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#servicos\">Serviços</a></li>
                            <hr class=\"lista\">
                            
                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#sobrenos\">Sobre Nós</a></li>
                            <hr class=\"lista\">
                            
                            <li><a href=\"http://localhost/siteEmpresa/site-empresa/#contato\">Contato</a></li>
                        </ul>
                    ";
            }
        ?>
    
    
    </nav>