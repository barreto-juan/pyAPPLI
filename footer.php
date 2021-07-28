    <div class="footer">

<?php
            if(isset($_GET['url'])){
                $url = ($_GET['url']);
                $url = array_filter(explode('/', $url));
                if($url[0] != "dashboard" AND $url[0] != "login"){
                    echo "
                        <div class=\"link-topo\" title=\"IR AO TOPO\">
                            <a href=\"#\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Circle-icons-arrow-up.svg/1024px-Circle-icons-arrow-up.svg.png\" alt=\"\"></a>
                        </div>
        
                        <div class=\"container-footer\">
                            <div class=\"logo-footer\">
                                <h1>Jinfo</h1>
                            </div>
        
                            <div class=\"menu-footer\">
                                <ul class=\"footer-menu\">
                                    <li><a href=\"#home\">Home</a></li>
                                    <li><a href=\"#servicos\">Serviços</a></li>
                                    <li><a href=\"#sobrenos\">Sobre Nós</a></li>        
                                    <li><a href=\"#contato\">Contato</a></li>
                                </ul>
                            </div>
        
                            <div class=\"sociais\">
                                <ul class=\"redes\">
                                    <li><a href=\"#\" target=\"_blank\"><img src=\"img/instagram2.png\" alt=\"Instagram\"></a></li>
                                    <li><a href=\"#\" target=\"_blank\"><img src=\"img/gmail.png\" alt=\"Gmail\"></a></li>
                                    <li><a href=\"#\" target=\"_blank\"><img src=\"img/github2.png\" alt=\"Github\"></a></li>
                                </ul>
                            </div>
                        </div>
                    ";
                }else{
                    echo "<div class=\"footer-reg\">todos direitos reservados &reg; | jinfo 2020 </div>";
                }
                
            }else{
                echo "
                        <div class=\"link-topo\" title=\"IR AO TOPO\">
                            <a href=\"#\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Circle-icons-arrow-up.svg/1024px-Circle-icons-arrow-up.svg.png\" alt=\"\"></a>
                        </div>
        
                        <div class=\"container-footer\">
                            <div class=\"logo-footer\">
                                <h1>Jinfo</h1>
                            </div>
        
                            <div class=\"menu-footer\">
                                <ul class=\"footer-menu\">
                                    <li><a href=\"#home\">Home</a></li>
                                    <li><a href=\"#servicos\">Serviços</a></li>
                                    <li><a href=\"#sobrenos\">Sobre Nós</a></li>        
                                    <li><a href=\"#contato\">Contato</a></li>
                                </ul>
                            </div>
        
                            <div class=\"sociais\">
                                <ul class=\"redes\">
                                    <li><a href=\"#\" target=\"_blank\"><img src=\"img/instagram2.png\" alt=\"Instagram\"></a></li>
                                    <li><a href=\"#\" target=\"_blank\"><img src=\"img/gmail.png\" alt=\"Gmail\"></a></li>
                                    <li><a href=\"#\" target=\"_blank\"><img src=\"img/github2.png\" alt=\"Github\"></a></li>
                                </ul>
                            </div>
                        </div>
                    ";
            }
        ?>

    </div>
</body>
</html>