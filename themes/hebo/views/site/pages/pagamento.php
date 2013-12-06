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
$label_cidade = 'São Paulo';

$empresas[] = array(
    'nome' => "Neri Lanches",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/9c9da3324/img/restaurante/104_mini.jpg",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 00:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/109_mini.jpg" title="Ticket Restaurante">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/94_mini.jpg" title="Visa Vale - Refeição">',
    'comentarios_total' => 72,
    'plano' => true,
    'comentarios' => array('Almir Kazunari' => 'Achei muito bom o serviço, nota dez!', 'Fernando Villas Boas' => 'Atendimento bom, pede o lanche e já chega, demais!'),
    'produtos' => array('lanche' => 'Lanches', 'marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'sucos', 'porcao' => 'Porcões', 'sobremesa' => 'Sobremesas'),
    'tamanho_marmita' => array('m' => 'Média - R$ 42,00', 'g' => 'Grande - R$ 48,00'),
    'tamanho_valor' => array('m' => '42,00', 'g' => '48,00'),
    'concorrentes' => array('1', '5'),
    'comparacao' => array(
        'lanche' => array(
            'produto' => 'Bauru',
            'casa_preco' => 'R$12,50',
            'concorrente' => 'R$13,50',
        ),
        'lanche' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
        'suco' => array(
            'produto' => 'Vitamina',
            'casa_preco' => 'R$7,00',
            'concorrente' => 'R$7,20',
        ),
    )
);

$empresas[] = array(
    'nome' => "Bonga Delivery",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/cb7a29fb0/img/restaurante/195_mini.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Fellipe Leão' => 'Peço sempre nesse lugar, muito boa a marmita!', 'Marcel Popolim' => 'A marmita de sexta é sucesso! Recomendo!!!'),
    'produtos' => array('lanche' => 'Lanches', 'marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos'),
    'tamanho_marmita' => array('m' => 'Média - R$ 45,00'),
    'tamanho_valor' => array('m' => '45,00'),
    'concorrentes' => array('5'),
);

$empresas[] = array(
    'nome' => "Cozinha Brasileira 2 Irmãos",
    'img' => "http://www.osascofacil.com.br/guia/fotos/1_75201321010logo.jpg",
    'horario_funcionamento' => "Domingo a Quinta das 18h30 as 23hSexta e Sábado das 18h30 as 23h",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">',
    'comentarios_total' => 27,
    'plano' => true,
    'comentarios' => array('Jacinto Pereira' => 'A marmita chega quentinha e na hora que a gente pede!', 'Clodoaldo de Souza' => 'Melhor dia é de sexta, pode pedir que boa!'),
    'produtos' => array('marmita' => 'Marmitas', 'refrigerante' => 'Refrigerantes', 'suco' => 'Sucos', 'sobremesa' => 'Sobremesas'),
    'tamanho_marmita' => array('m' => 'Média - R$ 50,00', 'g' => 'Grande - R$ 55,00'),
    'tamanho_valor' => array('m' => '50,00', 'g' => '55,00'),
    'concorrentes' => array('4'),
    'comparacao' => array(
        'lanche' => array(
            'produto' => 'Bauru',
            'casa_preco' => 'R$12,50',
            'concorrente' => 'R$13,50',
        ),
        'lanche' => array(
            'produto' => 'x-egg',
            'casa_preco' => 'R$10,50',
            'concorrente' => 'R$8,50',
        ),
    )
);

$tipo_produto = array('' => 'Todos');
foreach ($empresas as $empresa) {
    $tipo_produto = array_merge($tipo_produto, $empresa['produtos']);
}
?>
<div id="div_pagamento" <?php if(!isset(Yii::app()->session['logado']) || (isset(Yii::app()->session['logado']) && !Yii::app()->session['logado'])){ echo 'style="display:none"';}?>>
    <div id="result_cep_sucesso" style='display:none; color: green;'><h3>Login efetuado com sucesso.</h3></div>
    <div class="row-fluid">
        <div class="span8">
            <h2 class="header"> Descrição
                <span class="header-line"></span> 
            </h2>
            <h3><?php echo Yii::app()->session['descricao']; ?></h3>
        </div>
        <div class="span4">
            <h2 class="header"> Valor Total
                <span class="header-line"></span> 
            </h2>
            <h3>R$ <?php echo Yii::app()->session['valor_total']; ?></h3>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <h2 class="header"> Forma de pagamento
                <span class="header-line"></span> 
            </h2>
                <button class="btn btn-large btn-success" style="float: right;" type="button">Finalizar</button>
                <button class="btn btn-large" style="float: right; margin-right: 5px;" type="button">Voltar</button>
        </div>
    </div>
</div>
<div id="div_cadastro" <?php if(isset(Yii::app()->session['logado']) && Yii::app()->session['logado']){ echo 'style="display:none"';}?>>
    <div class="row-fluid">
        <div class="span6">
            <h2 class="header"> Já possui cadastro?
                <span class="header-line"></span> 
            </h2>
            <div id="result_cep" style='display:none; color: red;'><h3>Usuário ou senha incorretos.</h3></div>
            <div class="row-fluid">
                <div class="span12">
                    <label for="username">Usuário</label>
                    <?php echo CHtml::textField('username', '', array('id' => 'username', 'style' => 'width:50%')); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <label for="password">Senha</label>
                    <?php echo CHtml::passwordField('password', '', array('id' => 'password', 'style' => 'width:50%')); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <?php echo CHtml::button('Acessar', array('onclick' => 'logarUsuario(); return false;', 'class' => 'btn btn-success')); ?>
                </div>
            </div>

        </div>
        <div class="span6">
            <h2 class="header"> Novo cadastro
                <span class="header-line"></span> 
            </h2>
            
            <div class="row-fluid">
                <div class="span12">
                    <label for="username">Usuário</label>
                    <?php echo CHtml::textField('username_novo', '', array('id' => 'username', 'style' => 'width:50%')); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <label for="password">Senha</label>
                    <?php echo CHtml::passwordField('password_novo', '', array('id' => 'password', 'style' => 'width:50%')); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <label for="password">Repita a Senha</label>
                    <?php echo CHtml::passwordField('r_password_novo', '', array('id' => 'password', 'style' => 'width:50%')); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <label for="password">CEP</label>
                    <?php echo CHtml::textField('cep', '', array('id' => 'cep', 'style' => 'width:40%')); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <?php echo CHtml::button('Cadastrar', array('onclick' => 'loginAjax(); return false;', 'class' => 'btn btn-success')); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $.each($('.comentario_container'), function(y, container) {
            $.each($(container).find('.comentario'), function(i, val) {
                if (i > 0) {
                    setTimeout(function() {
                        $(val).prev().hide(0);
                        $(val).fadeIn(500);
                    }, 5000 + (i * 5000));
                } else {
                    $(val).fadeIn(500);
                }
            });
            
            $("#cep").mask("99999-999");
        });
        $("#produto_busca").change(function() {
            $('.produto_hidden').parent().show();
            var procura = $(this).val();
            if ($(this).val() != '') {
                $.each($('.produto_hidden'), function(i, val) {
                    var cont = 0;
                    $.each($(val).find('input:hidden'), function(i, el) {
                        if ($(el).val() == procura) {
                            cont++;
                        }
                    });
                    if (cont == 0)
                        $(val).parent().hide();
                });
            }
        });
        $('.produto').tooltip();
    });

    function exibir_concorrente(produto, id) {
        $(".concorrencia_tr" + id).show();
        $("#produto_title" + id).html("Principal concorrente em " + produto + ":");
    }

    function fechar_concorrencia(id) {
        $(".concorrencia_tr" + id).hide();
    }

    function buscarNome() {
        $('.produto_hidden').parent().show();
        var procura = $('#buscar_nome').val();
        if (procura != '') {
            $.each($('.nome_hidden'), function(i, val) {
                var cont = 0;
                if ($(val).val().indexOf(caracteres_especias(procura)) >= 0) {
                    cont++;
                }
                if (cont == 0)
                    $(val).parent().hide();
            });
        }
    }

    $('#buscar_nome').keyup(function(event) {
        if (event.keyCode == '13') {
            buscarNome();
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

    function logarUsuario(){
        var user = $('#username').val();
        var password = $('#password').val();
        
        $.ajax({
            url: '<?php echo Yii::app()->homeUrl . '?r=site/loginAjax'; ?>',
            type: 'post',
            async: false,
            data: {
                username: user,
                password: password
            },
            success: function(data) {
                if(data == 1){
                    $('#div_cadastro').slideUp();
                    $('#div_pagamento').slideDown();
                    $('#result_cep').hide();
                    $('#result_cep_sucesso').show();
                }else{
                    $('#result_cep').show();
                    $('#result_cep_sucesso').hide();
                }
            }
	});
    }
</script>

<?php

?>
