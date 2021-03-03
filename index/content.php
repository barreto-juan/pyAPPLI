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
                <img src="img/212005.jpg" width="500px" alt="">
            </div>
        </div>
    
    </div>
<!------------------------parte 2------------------------>
    <h1 class="op" id="servicos">Nossos Serviços</h1>

    <div class="servicos">
        <div class="grid">
            <div class="space-grid service" id="s1">
                <div class="titulo">Lorem</div>
                <hr>
                <div class="descricao">lorem lorem lorem</div>
                <button enabled>Ver serviço</button>
            </div>

            <div class="space-grid service" id="s2">
                <div class="titulo">Ipsum</div>
                <hr>
                <div class="descricao">ipsum ipsum ipsum</div>
                <button enabled>Ver serviço</button>
            </div>

            <div class="space-grid service" id="s3">
                <div class="titulo">Dolor</div>
                <hr>
                <div class="descricao">dolor dolor dolor</div>
                <button enabled>Ver serviço</button>
            </div>

            <div class="space-grid service" id="s4">
                <div class="titulo">Lorem</div>
                <hr>
                <div class="descricao">lorem lorem lorem</div>
                <button enabled>Ver serviço</button>
            </div>

            <div class="space-grid service" id="s5">
                <div class="titulo">Ipsum</div>
                <hr>
                <div class="descricao">ipsum ipsum ipsum</div>
                <button enabled>Ver serviço</button>
            </div>

            <div class="space-grid service" id="s6">
                <div class="titulo">Dolor</div>
                <hr>
                <div class="descricao">dolor dolor dolor</div>
                <button enabled>Ver serviço</button>
            </div>
        </div>

    </div>
<!------------------------parte 3------------------------>
    <h1 class="op" id="sobrenos">Sobre Nós</h1>
    <div class="sobrenos">
        <div class="foto">
            <div class="img">
                <img src="img/2231.jpg" height="312.75px" width="469.5px" style="margin-right: 15px;" alt="">
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
    <h1 class="op" id="equipe">Nossa Equipe</h1>
    <div class="equipe">
        <div class="grid">
            <?php
				$sql = mysqli_query($conn, "SELECT * FROM equipe");
				$exibe = mysqli_fetch_assoc($sql);

				while($exibe = mysqli_fetch_assoc($sql)) {
					echo "
					
						<div class='space-grid'>
						
							<div class='cols col1'>
								<div class='imgp'> <img src=" .$exibe['foto']. "></div>
							</div>

							<div class='cols col2'>
								<div class='nome'>" .$exibe['nome']. "</div>
								<div class='cargo'>" .$exibe['cargo']. "</div>
							</div>
								
						</div>
						
					";
				}
			?>
        </div>

    </div>

</div>
<!------------------------parte 5------------------------>
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
                <div class="texto">contato@gmail.com</div>
            </div>
        </div>


        <div class="space-grid redessociais">
            <div class="instagram">
                <div class="foto"><img src="img/instagram.png" alt=""></div>
                <div class="texto"><a href="instagram.com/">instagram.com/</a></div>
            </div>
            <div class="twitter">
                <div class="foto"><img src="img/twitter.png" alt=""></div>
                <div class="texto"><a href="twitter.com/">twitter.com/</a></div>
            </div>
            <div class="github">
                <div class="foto"><img src="img/github.png" alt=""></div>
                <div class="texto"><a href="github.com/">github.com/</a></div>
            </div>
        </div>


        <div class="space-grid nos">
            <div class="logo"><h1>J-Comp</h1></div>
            <div class="texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed velit amet quisquam dolor vero! Saepe consectetur nihil aut tempora, magni eveniet velit dignissimos sunt unde accusantium nam officia obcaecati quos.</div>
        </div>
    </div>