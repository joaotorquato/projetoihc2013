
<div class="shout-box">
    <div class="shout-text">
        <h1>Marmitão, seu delivery de comida predileto!</h1>
        <p>Melhores restaurantes e melhores preços.<br>Planos de delivery fácil para seu dia a dia.</p>
    </div>
</div>    
<div class="slider-bootstrap"><!-- start slider -->
    <div class="slider-wrapper theme-default">
        <div id="slider-nivo" class="nivoSlider">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s14.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s16.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s15.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s17.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
        </div>
    </div>

</div> <!-- /slider -->

<h2 class="header">Veja como é fácil pedir!
    <span class="header-line"></span> 
</h2>

<div class="row-fluid">
    <ul class="thumbnails center">
        <li class="span3">
            <div class="colored_banner thumb-content-blue">
                <div class="thumbnail">
                    <div class="round_background r-grey-light">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/smashing/01.png" alt="" class="">
                    </div>
                    <p class='texto'>Escolhe a cidade ou entre com o CEP.</p>
                </div>
            </div>
        </li>
        <li class="span3">
            <div class="colored_banner thumb-content-blue">
                <div class="thumbnail">
                    <div class="round_background r-grey-light">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/smashing/02.png" alt="" class="">
                    </div>
                    <p class='texto'>Escolha um restaurante.</p>
                </div>
            </div>
        </li>
        <li class="span3">
            <div class="colored_banner thumb-content-blue">
                <div class="thumbnail">
                    <div class="round_background r-grey-light">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/smashing/03.png" alt="" class="">
                    </div>
                    <p class='texto'>Escolha seu pedido.</p>
                </div>
            </div>
        </li>
        <li class="span3">
            <div class="colored_banner thumb-content-blue">
                <div class="thumbnail">
                    <div class="round_background r-grey-light">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/smashing/04.png" alt="" class="">
                    </div>
                    <p class='texto'>Pague na entrega ou online.</p>
                </div>
            </div>
        </li>

    </ul>
</div>

<h3 class="header">Opiniões de nossos clientes
    <span class="header-line"></span> 
</h3>
<div class="row-fluid">
    <div class="span9">
        <blockquote>
            <h2>Agora com o marmitão, ficou muito mais fácil se organizar com as marmita na hora de bater o rango na obra!</h2>
            <small>Jacinto pereira<cite title="Source Title"> - Pedreiro</cite></small>
        </blockquote>
    </div>

    <div class="span3" style="text-align:center;">
        <h3 class="text-error">O que você está esperando?</h3>
        <button class="btn btn-large btn-danger" type="button">Cadastre-se agora!</button>
        <p> <small>* leia nosso termo de uso</small></p>
    </div>
</div>

<h3 class="header">Nossos principais parceiros
    <span class="header-line"></span>  
</h3>
<div class="row-fluid center customers">
    <div class="span3 ">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/themeforest.png" alt="Themeforest" />
    </div>
    <div class="span3">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/codecanyon.png" alt="Codecanyon" />
    </div>
    <div class="span3">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/graphicriver.png" alt="Graphicriver" />
    </div>
    <div class="span3">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/photodune.png" alt="Photodune" />
    </div>

</div><!--/row-fluid-->

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
            effect: 'boxRandom',
            manualAdvance: false,
            controlNav: false
        });
    });
</script> <!--<script type="text/javascript">
$(document).ready(function() {
   $('#slider-nivo2').nivoSlider();
});
</script>-->