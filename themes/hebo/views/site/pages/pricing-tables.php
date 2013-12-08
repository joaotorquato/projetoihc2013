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

<?php if(!isset(Yii::app()->session['cidade']) || (isset(Yii::app()->session['cidade']) && Yii::app()->session['cidade'] == '')){ ?>
<div class="page-header">
    <h1>Nossos planos <span style="display: none;" id="nome_cidade">em São Paulo</span><small> escolha a melhor opção para você.</small></h1>
</div>
<div class="span10" id="div_cep" style="margin: 0px; margin-bottom: 10px;">
    <div class="span4" style="margin-left: 0px;">
        <h3 class="header">Procure por seu cep!
            <span class="header-line"></span> 
        </h3>

        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/loading.gif" id='loading' style='display:none;' />
        <div id="procurar_cep">
            <h4>Informe seu CEP e veja os planos para sua cidade</h4>
            <?php echo CHtml::textField('cep', '', array('id' => 'cep')); ?>
            <?php echo CHtml::button("Procurar CEP", array('title' => "Procurar CEP", 'style' => 'margin-left:10px;margin-top:-8px;', 'onclick' => 'js:verificaCep();', 'class' => 'btn')); ?>
        </div>
        <div id="result_cep" style='display:none'><h4>Infelizemente não encontramos a sua cidade. Será que você digitou certo? Se sim, selecione ao lado uma de nossas cidades.</h4></div>

    </div>
    <div class="span6" style="margin-right: 0px;">
        <h3 class="header">Cidades em que atuamos
            <span class="header-line"></span> 
        </h3>

        <?php
        foreach ($cidades as $key => $cidade) {
            echo '<a href="#" onclick="registraCidade(\'' . $cidade . '\')" style="float:left;min-width:190px;text-align:center;"><h3 style="margin: 0px;"><strong>' . $cidade . '</strong></h3></a>';
        }
        ?>
    </div>
</div>
    <?php }else{ ?>
<div class="page-header">
    <h1>Nossos planos em <?php echo Yii::app()->session['cidade']; ?><small> escolha a melhor opção para você.</small></h1>
</div>
    <?php } ?>
<div style="clear:both;"></div>

<div id="div_planos" <?php if(!isset(Yii::app()->session['cidade']) || (isset(Yii::app()->session['cidade']) && Yii::app()->session['cidade'] == '')){ echo 'style="display:none"';}?>>
    <div class="price-table clear col3">
        <dl class="blue plan">
            <dt>Personalizado</dt>
            <dd class="price">
                <sup>R$</sup>10<small>por dia*</small>
            </dd>
            <dd><strong>1 </strong> Marmita por dia escolhido</dd>
            <dd>Entrega <strong>gratuita</strong></dd>
            <dd>Entrega a partir do <strong>meio dia</strong></dd>
            <dd>Valor para tamanho <strong>médio</strong></dd>
            <dd>Não acompanha <strong>sobremesa</strong></dd>
            <dd><a class="btn btn-success" href="<?php echo Yii::app()->homeUrl . '?r=site/page&view=planoDiario'; ?>"><i class="icon-ok icon-white"></i>  Visualizar restaurantes</a></dd>
        </dl>    
        <dl class="plan most-popular">
            <dt>Semanal</dt>
            <dd class="price">
                <sup>R$</sup>42<small>por semana*</small>
            </dd>
            <dd><strong>5</strong> Marmitas - segunda a sexta</dd>
            <dd>Entrega <strong>gratuita</strong></dd>
            <dd>Entrega a partir do <strong>meio dia</strong></dd>
            <dd>Valor para tamanho <strong>médio</strong></dd>
            <dd>Não acompanha <strong>sobremesa</strong></dd>
            <dd><a class="btn btn-warning" href="<?php echo Yii::app()->homeUrl . '?r=site/page&view=planoSemanal'; ?>"><i class="icon-ok icon-white"></i>  Visualizar restaurantes</a></dd>
        </dl>
        <dl class="plan">
            <dt>Mensal</dt>
            <dd class="price">
                <sup>R$</sup>165<small>por mês*</small>
            </dd>
            <dd><strong>22 </strong> Marmitas - 22 dias úteis</dd>
            <dd>Entrega <strong>gratuita</strong></dd>
            <dd>Entrega no <strong>horário definido</strong></dd>
            <dd>Valor para tamanho <strong>médio</strong></dd>
            <dd>Acompanha <strong>sobremesa</strong></dd>
            <dd><a class="btn btn-info" href="<?php echo Yii::app()->homeUrl . '?r=site/page&view=planoMensal'; ?>"><i class="icon-ok icon-white"></i>  Visualizar restaurantes</a></dd>
            <?php // echo CHtml::button("Assinar", array('title' => "Assinar", 'style' => 'margin-left:10px;margin-top:-8px;', 'onclick' => 'js:assinarPlano();', 'class' => 'btn btn-info')); ?>
        </dl>
    </div>
    * Este valor pode ser alterado dependendo da empresa solicitada.
</div>

<script type="text/javascript">
    $("#cep").mask("99999-999");
    
    function registraCidade(cidade){
        $('#div_cep').slideUp();
        $('#div_planos').slideDown();
        $('#nome_cidade').html('em ' + cidade);
        $('#nome_cidade').show();
        
        $.ajax({
            url: '<?php echo Yii::app()->homeUrl . '?r=site/sessionCep'; ?>',
            type: 'post',
            async: false,
            data: {
                cep: $('#cep').val(),
                cidade: cidade
            }
        });
    }
    
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
                        $("#result_cep").html('<h4><div class="loading" style="float:left;"></div>Encontramos sua cidade! Aguarde enquanto atualizamos.</h4>');
                        registraCidade(cidade);
//                        window.location = '<?php echo Yii::app()->homeUrl . '?r=site/page&view=ofertas&cidade='; ?>' + caracteres_especias(cidade);
                    } else {
                        $("#procurar_cep").show();
                        $("#result_cep").show();
                    }
                }
            });
        }

    }
</script>