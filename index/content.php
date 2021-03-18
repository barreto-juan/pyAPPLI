<div class="content">
<!------------------------parte 1------------------------>
    <div id="home">
        
        <div class="texto">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem molestias error, quam illum earum atque vero tempora??</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, doloremque magni. Molestias, inventore necessitatibus?</p>
        </div>

        <div class="foto">
            <div class="img">
                <img src="img/212005.jpg" width="400px" alt="">
            </div>
        </div>
    
    </div>
<!------------------------parte 2------------------------>
    <h1 class="op" id="servicos">Conheça nossos serviços</h1>

    <div class="servicos">
        <div class="grid">
            <?php
                $sql = mysqli_query($conn, "SELECT * FROM servicos");
                $exibe = mysqli_fetch_assoc($sql);

                while ($exibe = mysqli_fetch_assoc($sql)) {
                    echo "
                        <div class='service' id='s" .$exibe['id']. "'>
                            <div class='titulo'>" .$exibe['nome']. "</div>
                            <div class='descricao'>" .$exibe['descricao']. "</div>
                            <hr>
                            <div class='preco'> R$ " . number_format($exibe['preco'], 2, ',', '.'). "</div>
                            <button " .$exibe['disp']. ">Ver orçamento</button>
                        </div>
                    ";
                }
            
            ?>
        </div>

    </div>
<!------------------------parte 3------------------------>
    <h1 class="op" id="sobrenos">Saiba um pouco sobre nós</h1>
    <div class="sobrenos">
        <div class="foto">
            <div class="img">
                <img src="img/2231.jpg" height="250px" width="400px" style="margin-right: 15px;" alt="">
            </div>
        </div>

        <div class="texto">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem molestias error, quam illum earum atque vero tempora??</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, doloremque magni. Molestias, inventore necessitatibus?</p>
        </div>

    </div>
<!------------------------parte 4------------------------>
    <h1 class="op" id="clientes">Opiniões de clientes</h1>
</div>

    <div class="slide-carousel">
        <span class="out"><h1>rafael</h1> <br> <p>sprinter</p></span>
        <span class="out"><h1>donatelo</h1> <br> <p>michellangelo</p></span>
        <span class="out"><h1>pink</h1> <br> <p>brain</p></span>
    </div>

<!------------------------parte 5------------------------>
    <div class="content">    
        <h1 class="op" id="equipe">Conheça nossa equipe</h1>
        <div class="equipe">
            <div class="grid">
                <?php
                    $sql = mysqli_query($conn, "SELECT * FROM equipe");
                    $exibe = mysqli_fetch_assoc($sql);

                    while($exibe = mysqli_fetch_assoc($sql)){
                        echo "
                            <div class='integrante' id='e" . $exibe['id'] . "'>
                                <img src=\"" . $exibe['foto'] . "\"/>
                                
                                <div class='section'>
                                    <div class='nome'>" . $exibe['nome']. "</div>
                                    <hr>
                                    <div class='cargo'>" . $exibe['cargo'] . "</div>
                                </div>
                            </div>
                        ";
                    }

                ?>
            </div>
        </div>
    </div>
<!------------------------parte 6------------------------>
    <div id="contato">
        <div class="space-grid enderecos">
            <div class="local">
                <div class="foto"><img src="img/local.png" alt="" style="width: 35px;"></div>
                <div class="texto">Rua Jubiscleuda, 7070<br>Somewhere/AO</div>
            </div>
            <div class="whats">
                <div class="foto"><img src="img/whatsapp.png" alt=""></div>
                <div class="texto">+55 35 9 8765-4321</div>
            </div>
            <div class="email">
                <div class="foto"><img src="img/email.png" alt="" style="width: 50px;"></div>
                <div class="texto">contato@jinfo.epizy.com</div>
            </div>
        </div>


        <div class="space-grid redessociais">
            <div class="instagram">
                <div class="foto"><img src="img/instagram.png" alt=""></div>
                <div class="texto"><a href="https://instagram.com/" target="_blank">instagram.com/</a></div>
            </div>
            <div class="twitter">
                <div class="foto"><img src="img/twitter.png" alt=""></div>
                <div class="texto"><a href="https://twitter.com/" target="_blank">twitter.com/</a></div>
            </div>
            <div class="github">
                <div class="foto"><img src="img/github.png" alt=""></div>
                <div class="texto"><a href="https://github.com/" target="_blank">github.com/</a></div>
            </div>
        </div>


        <div class="space-grid nos">
            <div class="logo"><h1>Jinfo</h1></div>
            <div class="texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed velit amet quisquam dolor vero! Saepe consectetur nihil aut tempora, magni eveniet velit dignissimos sunt unde accusantium nam officia obcaecati quos.</div>
        </div>
    </div>