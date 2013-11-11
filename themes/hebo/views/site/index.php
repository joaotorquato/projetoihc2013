<?php
$cidades = array(
    'sorocaba' => 'Sorocaba',
    'osasco' => 'Osasco',
    'riberao_preto' => 'Riberão Preto',
    'sao_paulo' => 'São Paulo',
    'sao_carlos' => 'São Carlos',
    'jundiai' => 'Jundiaí',
    'campinas' => 'Campinas',
    'guaira' => 'Guaíra',
    'amparo' => 'Amparo',
);
?>

<div class="shout-box">
    <div class="shout-text">
        <h1>Marmitão, seu delivery de comida predileto!</h1>
        <p>Melhores restaurantes e melhores preços.<br>Planos de delivery fácil para seu dia a dia.</p>
    </div>
</div>    
<div style="clear:both;"></div>

<div class="slider-bootstrap span5" style="margin-left: 0px;"><!-- start slider -->
    <div class="slider-wrapper theme-default">
        <div id="slider-nivo" class="nivoSlider">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s14.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s16.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s15.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s17.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/flickr/s11.jpg" alt="" title="" />
        </div>
    </div>
</div> <!-- /slider -->

<div class="span5" style="margin-left:20px;">
    <h2 class="header">Procure por seu cep!
        <span class="header-line"></span> 
    </h2>

    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/loading.gif" id='loading' style='display:none;' />
    <div id="procurar_cep">
        <h4>Informe seu CEP e veja todas as novidades de sua cidade!</h4>
        <?php echo CHtml::textField('cep', '', array('id' => 'cep')); ?>
        <?php echo CHtml::button("Procurar CEP", array('title' => "Procurar CEP", 'style' => 'margin-left:10px;margin-top:-8px;', 'onclick' => 'js:verificaCep();', 'class' => 'btn')); ?>
    </div>

</div>
<div style="clear:both;"></div>
<div id="result_cep" style='display:none'><h2>Infelizemente não encontramos a sua cidade. Será que você digitou certo? Se sim, selecione abaixo uma de nossas cidades.</h2></div>

<h3 class="header">Cidades em que atuamos
    <span class="header-line"></span> 
</h3>

<div style="margin: auto;width: 100%;">
    <?php
    foreach ($cidades as $key => $cidade) {
        echo '<a href="' . Yii::app()->homeUrl . '?r=site/page&view=ofertas&cidade=' . $key . '" style="float:left;min-width:190px;text-align:center;"><h3><strong>' . $cidade . '</strong></h3></a>';
    }
    ?>
</div>
<div style="clear:both;"></div>

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
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/fogao_maneiro.png" alt="Fogão mineiro" />
    </div>
    <div class="span3">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/nerizao.png" alt="Neri lanches" />
    </div>
    <div class="span3">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/tokio.jpg" alt="Tokio" />
    </div>
    <!--    <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/customers/photodune.png" alt="Photodune" />
        </div>-->

</div><!--/row-fluid-->

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
            effect: 'boxRandom',
            manualAdvance: false,
            controlNav: false
        });
        $("#cep").mask("99999-999");
    });
    function verificaCep() {
        var cidade = '';
        if ($('#cep').val() != '') {
            $("#result_cep").hide();
            $("#procurar_cep").hide();
            $("#loading").show();
            $.getScript('http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=' + $('#cep').val(), function() {
                if (resultadoCEP['resultado']) {
                    cidade = unescape(resultadoCEP['cidade']);
                    $("#loading").hide();
                    if (cidade != '') {
                        $("#result_cep").show();
                        $("#result_cep").html('<h2><div class="loading" style="float:left;"></div>Encontramos sua cidade! Aguarde enquanto é redirecionado.</h2>');
                        window.location = '<?php echo Yii::app()->homeUrl . '?r=site/page&view=ofertas&cidade='; ?>' + caracteres_especias(cidade);
                    } else {
                        $("#procurar_cep").show();
                        $("#result_cep").show();
                    }
                }
            });
        }

    }

    function sleep(milliseconds) {
        var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds) {
                break;
            }
        }
    }

    $('#cep').keyup(function(event) {
        if (event.keyCode == '13') {
            verificaCep();
        }
        return false;
    });

    function caracteres_especias(string) {
        for (i = 0; i < string.length; i++) {
            string = string.replace('/[`~!@#$%^&*()_|+\-=?;:",.<>\{\}\[\]\\\/]', '');
            string = string.replace(' ', '_');
        }
        return removeAcento(string.toLowerCase());
    }

    function removeAcento(strToReplace) {
        str_acento = "áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ";
        str_sem_acento = "aaaaaeeeeiiiiooooouuuucAAAAAEEEEIIIIOOOOOUUUUC";
        var nova = "";
        for (var i = 0; i < strToReplace.length; i++) {
            if (str_acento.indexOf(strToReplace.charAt(i)) != -1) {
                nova += str_sem_acento.substr(str_acento.search(strToReplace.substr(i, 1)), 1);
            } else {
                nova += strToReplace.substr(i, 1);
            }
        }
        return nova;
    }

</script> <!--<script type="text/javascript">
$(document).ready(function() {
   $('#slider-nivo2').nivoSlider();
});
</script>-->