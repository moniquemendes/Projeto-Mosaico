<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Negocios';
    include 'head.php';
    ?> 
 <!-- Corpo do código -->   
<body>
    <!-- Começa o Header  --> 
    <?php
    include 'header.php';
    ?>
        <!--Menu de Navegação  --> 
        <?php
        include 'nav.php';
        ?>
        <div class="container">
    <h6>Business</h6>
    <section class="col-md-12">
        <a href="negocios.php">
             <div class="MoImgIndex">
                    <h6>Negócios</h6><hr class="linhaHr">
                    		<img class="MoImgIndex" src="imagens/imgBusiness/imgNegocios.jpg" alt="Negocios" /> 
                </div>
                    <div class="col-md-12">
                        <p>Profissional de TI precisa entender de negócio?</p>
                    </div>
                 </a>
    </section>
    <section class="col-md-12">
        <a href="inovacao.php">
                    <div class="MoImgIndex">
                    <h6>Inovação</h6><hr class="linhaHr">
                    		<img class="MoImgIndex" src="imagens/imgBusiness/imgInovacao.jpg" alt="Inovacao" /> 
                </div>
                    <div class="col-md-12">
                        <p>Invenções: Nike promete lançar tênis de “De Volta para o Futuro” em 2016</p>
                    </div>
                    </a>
    </section>
    <section class="col-md-12">
        <a href="empregos.php">
                   <div class="MoImgIndex">
                    <h6>Empregos</h6><hr class="linhaHr">
                    		<img class="MoImgIndex" src="imagens/imgBusiness/imgEmpregoUlt.jpg" alt="Empregos" /> 
                </div>
                    <div class="col-md-12">
                    <p>Primeiro banco de empregos de economia criativa.</p>
                    </div>
                     </a>
    </section>
             <section class="col-md-12">
        <a href="empreendedorismo.php">
                    <div class="MoImgIndex">
                    <h6>Empreendedorismo</h6><hr class="linhaHr">
                    		<img class="MoImgIndex" src="imagens/imgBusiness/imgEmpOportIndex.jpg" alt="Empreendedorismo" /> 
                </div>
                    <div class="col-md-12">
                    <p>Guia para orientar empreendedor visa impulsionar o desenvolvimento de negócios de impacto.</p>
                    </div>
                     </a>
    </section>
             <section class="col-md-12">
                <a href="startup.php">
                    <div class="MoImgIndex">
                    <h6>Startup</h6><hr class="linhaHr">
                    		<img class="MoImgIndex" src="imagens/imgBusiness/imgStartup.JPG" alt="Startup" /> 
                    </div>
                        <div class="col-md-12">
                        <p>Startup brasileira recebe prêmio no Vale do Silício.</p>
                    </div>
                    </a>
    </section>
</div>
<!--fim container --> 
        <!--Area do Footer --> 
         <?php
        include 'footer.php';
        ?>
    
<!-- Scripts --> 
<?php 
include 'scripts.php';
?>
    
</body>
</html>