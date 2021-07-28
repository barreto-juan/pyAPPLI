<div class="content">
    <!------------------------>
    <!---------HOME----------->
    <!------------------------>
    <div id="home" class="home">
        <div class="container-home">
            <div class="titulo">
                <h1 id="titulo"></h1>
            </div>

            <div class="imagem">
                <img src="img/man-works-home-office.png" alt="" class="imagem-topo">
            </div>
        </div>
    </div>

    <!------------------------>
    <!--------SERVICOS-------->
    <!------------------------>
    <div id="servicos" class="servicos">
        <?php
        
            global $con;
            $query = "SELECT * FROM servicos";
            $sql = mysqli_query($con, $query);

            while($resultado = mysqli_fetch_assoc($sql)){
                echo "
                <div class=\"container-servicos\">
                    <div class=\"produto\"> 
                        <img class=\"imagem-produto\" src=\"".
                            $resultado["imagem"]
                            #number_format($resultado["preco"], 2, ',', '.')
                        ."\"/>
                    </div>

                    <div class=\"descricao\">
                        <h1>".
                            $resultado["nome"]
                        ."</h1>".
                        $resultado["descricao"]
                    ."</div>
                </div>
                
                ";
            }
            
        ?>
    </div>

    <!------------------------>
    <!--------SOBRE NOS------->
    <!------------------------>
    <div id="sobrenos" class="sobrenos">
    <?php
            $query = "SELECT * FROM equipe";
            $sql = mysqli_query($con, $query);

            while($resultado = mysqli_fetch_assoc($sql)){
                echo "
                <div class=\"container-equipe\">
                    <div class=\"integrante\"> 
                        <img class=\"imagem-integrante\" src=\"".
                            $resultado["foto"]
                        ."\"/>
                    </div>

                    <div class=\"sobre\">
                        <h2>".
                            $resultado["nome"]
                        ."</h2>".
                        $resultado["cargo"]
                    ."</div>
                </div>
                
                ";
            }
            
        ?>
    </div>

    <!------------------------>
    <!---------CONTATO-------->
    <!------------------------>
    <div id="contato" class="contato">
        <div class="container-contato">
            <div class="contain">
                <h1>Hello, World!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, beatae. Praesentium aliquam cumque eum iusto libero, obcaecati dolore sint adipisci impedit esse!</p>
            </div>
                    
            <div class="form">
                <form action="" method="post">
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <input type="email" name="email" id="email" placeholder="Email"> <br>
                    <textarea name="mensagem" id="mensagem" rows="10" placeholder="Mensagem"></textarea> <br>
                    <input type="submit" id="btn_enviar" class="enviar" value="Enviar">
                </form>
            </div>
        </div>
    </div>

</div>