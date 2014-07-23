<?php require_once("header.php"); ?> 

<div>
    <h2>Fale Conosco</h2>
    <div class="caixa-dentro">       
        <form class="form" id="contact_form" method="get" action="enviar-dados.php">
            <input class="form-cont" name="nome" id="nome" type="text" maxlength="50" placeholder="Nome"/>
            <input class="form-cont" name="email" id="email" type="text" maxlength="50" placeholder="E-mail"/>
            <input class="form-cont" name="telefone" id="telefone" type="text" placeholder="Telefone"/>
            <textarea class="form-area" name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
            <div class="botoes">
            <input type="submit" name="enviar" class="footer-button" value="Enviar"/>
            <input type="reset" class="footer-button" name="limpar" id="limpar" value="Limpar"/>
        </div>
        </form>        
        <div class="contato">
            <p><strong>Telefone: </strong> 1234567890</p>
            <p><strong>Email: </strong> larespirita@hotmail.com</p>
            <p><strong>Rua: </strong> Sete de Setembro <strong> N° </strong> 473 </p>               
        </div>
        <div class="icon-pom">
            <a href="https://pt-br.facebook.com/" title="Facebook"><img class="icon-f" src="images/icon-facebook.png"/></a>
            <a href="https://twitter.com/" title="Twitter"><img class="icon-t" src="images/icon-twitter.png"/></a>
        </div>
    </div>
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3578.84476129311!2d-51.08264687434386!3d-26.234233191632548!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e661e3892b37c7%3A0x4c7efae8f0d95d89!2sR.+Sete+de+Setembro%2C+473+-+Centro%2C+SC%2C+89400-000!5e0!3m2!1spt-BR!2sbr!4v1406055670912" width="475" height="475" frameborder="0" style="border:0"></iframe>
    </div>
</div>

<?php require_once("footer.php"); ?> 