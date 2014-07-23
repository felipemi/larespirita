<div style="clear: both;"></div>
<footer>
    <div class="box">
        <div class="menu-footer">
            <ul>
                <?php
                        $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
                        ?>
                        <li <?php
                        if ($paginaCorrente == 'index.php') {
                            echo 'class="pagina"';
                        }
                        ?> ><a href="index.php" title="Página Inicial. Lar Espírita">Home</a></li>
                        <li <?php
                        if ($paginaCorrente == 'espiritismo.php') {
                            echo 'class="pagina"';
                        }
                        ?> ><a href="espiritismo.php" title="Página sobre o Espiritismo">Espiritismo</a></li>
                        <li <?php
                        if ($paginaCorrente == 'o-centro.php') {
                            echo 'class="pagina"';
                        }
                        ?> ><a href="o-centro.php" title="Página Sobre o Lar Espírita">O Centro</a></li>
                        <li <?php
                        if ($paginaCorrente == 'cursos.php') {
                            echo 'class="pagina"';
                        }
                        ?> ><a href="cursos.php" title="Página de Cursos feito pelo Lar Espírita">Cursos</a></li>
                        <li <?php
                        if ($paginaCorrente == 'livros.php') {
                            echo 'class="pagina"';
                        }
                        ?> ><a href="livros.php" title="Página dos Livros Disponíveis no Lar Espírita">Livros</a></li>
                        <li <?php
                        if ($paginaCorrente == 'horarios.php') {
                            echo 'class="pagina"';
                        }
                        ?> ><a href="horarios.php" title="Horários do Lar Espírita">Horários</a></li>
                        <li <?php
                        if ($paginaCorrente == 'fale-conosco.php') {
                            echo 'class="pagina"';
                        }
                        ?> ><a href="fale-conosco.php" title="Página para entrar em Contato com o Lar Espírita">Fale Conosco</a></li>
            </ul>
        </div>
        <form class="footer-newsletter" id="form-news" method="get" action="newsletter.php">
                        <input type="hidden" name="acao" value="enviar"/>
                        <h2 class="news">Newsletter</h2>
                        <input class="footer-nome" name="nome" type="text" placeholder="Seu Nome">
                        <input class="footer-email" name="email" type="text" placeholder="Seu E-mail">
                        <button class="footer-button botao-enviar" type="submit">Enviar</button>
                    </form>
        <div class="logo-footer"><img src="images/logo-footer.png"/></div>
        
    </div>
</footer>
</div>
</body>
</html>