<div class="content">

<!------------------------------------------------------->
<!------------------------INICIO------------------------->
<!------------------------------------------------------->

    <div id="home">
        
        <div class="texto">
            <h1>Bem-vindo à Jinfo! &#x1F603;</h1>
            <p>Nossa empresa foi criada a fim de solucionar problemas no quisito informática!</p>
            <br>
            <p>Confira abaixo nossos serviços e conheça-nos um pouco, qualquer dúvida contate-nos por nossos canais sociais ou pelo nosso formulário de contato.</p>
        </div>

        <div class="foto">
            <div class="img">
                <img src="img/icone-site.png" width="400px" alt="">
            </div>
        </div>
    
    </div>

<!------------------------------------------------------->
<!-----------------------SERVICOS------------------------>
<!------------------------------------------------------->

    <h1 class="op" id="servicos">Conheça nossos serviços 💻&#x1F527;</h1>

    <div class="servicos">
        <div class="grid">
            <?php
                $sql = mysqli_query($con, "SELECT * FROM servicos");

                while ($exibe = mysqli_fetch_assoc($sql)) {
                    echo "
                        <div class='service' id='s" .$exibe["id"]. "'>
                            <div class='titulo'>" .$exibe["nome"]. "</div>
                            <div class='descricao'>" .$exibe["descricao"]. "</div>
                            <hr>
                            <div class=\"preco\"> R$ " . number_format($exibe["preco"], 2, ",", "."). "</div>
                            <button " .$exibe["disp"]. ">Ver orçamento</button>
                        </div>
                    ";
                }
            
            ?>
        </div>

    </div>

<!------------------------------------------------------->
<!-----------------------CLIENTES------------------------>
<!------------------------------------------------------->

    <h1 class="op" id="clientes">Opiniões de clientes</h1>
</div>

    <div class="slide-carousel">
        <span class="out"><h1>Lorem</h1> <br> <p>"ipsum"</p></span>
        <span class="out"><h1>Dolor</h1> <br> <p>"sit"</p></span>
        <span class="out"><h1>Amet</h1> <br> <p>"consectur"</p></span>
    </div>

<!------------------------------------------------------->
<!-----------------------SOBRE NOS----------------------->
<!------------------------------------------------------->

<h1 class="op" id="sobrenos">Um pouco sobre nós</h1>
    <div class="sobrenos">
        <div class="foto">
            <div class="img">
                <img src="img/2231.jpg" height="250px" width="400px" style="margin-right: 15px;" alt="">
            </div>
        </div>

        <div class="texto">
            <h2>Missão</h2>
            <p>Existimos a fim de oferecer um serviço de qualidade com um preço acessível ao cliente!</p>
            <br>

            <h2>Visão</h2>
            <p>Visamos o crescimento e a oferta de mais serviços, com mais qualidade e com um preço ainda melhor!</p>
            <br>
            
            <h2>Valores</h2>
            <p>
                - Integridade; <br>
                - Honestidade. <br>
                Trabalhamos com integridade, buscamos a transparência para com nossos clientes. Presamos honestidade do começo ao fim, acreditamos que sem ela nem deveríamos criar nossa empresa.
            </p>
        </div>

    </div>
    
<!------------------------------------------------------->
<!------------------------EQUIPE------------------------->
<!------------------------------------------------------->

    <div class="content">    
        <h1 class="op" id="equipe">Nossa equipe</h1>
        <div class="equipe">
            <div class="grid">
                <?php
                    $sql = mysqli_query($con, "SELECT * FROM equipe");

                    while($exibe = mysqli_fetch_assoc($sql)){
                        echo "
                            <div class=\"integrante\" id=\"e" . $exibe["id"] . "\">
                                <img src=\"" . $exibe["foto"] . "\"/>
                                
                                <div class=\"section\">
                                    <div class=\"nome\">" . $exibe["nome"]. "</div>
                                    <hr>
                                    <div class=\"cargo\">" . $exibe["cargo"] . "</div>
                                </div>
                            </div>
                        ";
                    }

                ?>
            </div>
        </div>
    </div>

<!------------------------------------------------------->
<!----------------------FORMULARIO----------------------->
<!------------------------------------------------------->

    <div id="contact" class="form-contato">
        <h1>Envie-nos uma mensagem</h1> <br>
        <form action="submit" method="post">
            <input type="text" name="nome" id="nome" placeholder="Nome..." required> <br>
            <input type="email" name="email" id="email" placeholder="Email..." required> <br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Mensagem..." style="resize: vertical;"></textarea> <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>

<!------------------------------------------------------->
<!------------------------RODAPE------------------------>
<!------------------------------------------------------->

    <div id="contato">
        <div class="space-grid enderecos">
            <div class="local">
                <div class="foto"><img src="img/local.png" alt="" style="width: 35px;"></div>
                <div class="texto">Rua Jubiscleuda, 7070<br>Somewhere/01</div>
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