<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Lar Espírita</title>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Style-Type" content="text/css"/>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/banner.css" />
        <link rel="stylesheet" href="css/noticias.css" />
        <link rel="stylesheet" href="css/lightbox.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/banner.js"></script>
        <script src="js/jquery-1.2.6.js"></script>
        <script src="js/jquery.slide.js"></script>
        <script src="js/larespirita.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" language="javascript" src="js/maskedinput.js"></script>
        <script type="text/javascript" language="javascript">
            $(document).ready(function() {
                $("#telefone").mask("(99)9999-9999");
            });
        </script>
    </head>

    <body> 

        <div id="page"> 
            <header id="brading">
                <div class="nuvem">

                    <h1 id="blog-description">
                        <img src="images/logo.png"/>
                    </h1> 
                    <span class="centro">Lar Espírita</span> 
                    <div class="icon-dom">
                        <a href="https://pt-br.facebook.com/" title="Facebook"><img class="icon-f" src="images/icon-facebook.png"/></a>
                        <a href="https://twitter.com/" title="Twitter"><img class="icon-t" src="images/icon-twitter.png"/></a>
                    </div>
                    <div class="tom">
                        <p class="border"></p>
                        <div class="conteudo">
                            <p class="redes">Redes Sociais</p>
                            <p class="acesse">Conecte-se e acesse</p>
                            <p class="acesse">conteúdos exclusivos</p>
                        </div>
                    </div>                               
                </div>
                <div class="menu">
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
                <div id="banner" class="banner">

                    <div id="banner_img">
                        <img src="banner_img/1.jpg" width="1000px" height="300px" border="0" alt="Banner">

                    </div>

                    <div>

                        <a href="javascript:void(0);" id="banner_img_1" class="hover" onclick="mudaImg('0');"></a>
                        <a href="javascript:void(0);" id="banner_img_2" onclick="mudaImg('1');"></a>
                        <a href="javascript:void(0);" id="banner_img_3" onclick="mudaImg('2');"></a>
                        <a href="javascript:void(0);" id="banner_img_4" onclick="mudaImg('3');"></a>

                    </div>

                </div>

            </header>