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
$label_cidade = Yii::app()->session['cidade'];

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

<div class="shout-box">
    <div class="shout-text">
        <h1>Plano Semanal - Veja os restaurantes em <?php echo $label_cidade; ?>!</h1>
    </div>
</div> 

<div style='height: 10px;'></div>
<div id="container_busca" style='text-align:center;'>
    <?php echo CHtml::textField('buscar_nome', '', array('id' => 'buscar_nome', 'style' => 'width:50%')); ?>
    
    <?php echo CHtml::button("Buscar", array('title' => "Buscar", 'style' => 'margin-left:10px;margin-top:-8px;', 'onclick' => 'js:buscarNome();', 'class' => 'btn')); ?>
</div>

<?php foreach ($empresas as $key => $empresa) { ?>
    <?php if ($key % 2 == 0) { ?>
        <div class="row-fluid">
        <?php } ?>
        <div class="span6">
            <input type='hidden' class='nome_hidden' value="<?php echo limpar_nome($empresa['nome']); ?>" />
            <h2 class="header"> <?php echo $empresa['nome']; ?>
                <img src="<?php echo $empresa['img']; ?>" alt="<?php echo $empresa['nome']; ?>" style='float:right' width="100" height="67"/> 
                <span class="header-line"></span> 
            </h2>
            <table class="table table-striped table-bordered table-hover" style='height: 320px;'>
                <thead>
                    <tr>
                        <th>Informações</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src='http://www.gourmex.com/images/icons/horarioatendimento.png' />Horário de funcionamento</td>
                        <td><?php echo $empresa['horario_funcionamento']; ?></td>
                    </tr>
                    <tr>
                        <td>Formas de pagamento</td>
                        <td><?php echo $empresa['forma_pagamento']; ?></td>
                    </tr>
                    <tr>
                        <td>Nota dos usuários</td>
                        <td>
                            <?php for ($i = 0; $i < $empresa['feedback_nota']; $i++) { ?>
                                <img src='http://www.gourmex.com/images/icons/estrela.png' />
                            <?php } ?>
                            <?php for ($i = 0; $i < (5 - $empresa['feedback_nota']); $i++) { ?>
                                <img src='http://www.gourmex.com/images/icons/estrelavazia.png' />
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Comentários de usuários(<?php echo $empresa['comentarios_total']; ?>)</td>
                        <td class='comentario_container'>
                            <?php foreach ($empresa['comentarios'] as $usuario => $comentario) { ?>
                                <div class='comentario' style="display:none"><i>"<?php echo $comentario; ?></i>"<br><div style='float:right'> - <?php echo $usuario; ?> </div></div>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr id="produto_tr<?php echo $key; ?>">
                        <td>Plano x tamanho da marmita</td>
                        <td>
                            <?php $count = 0; ?>
                            <?php foreach ($empresa['tamanho_marmita'] as $kt => $tamanho) { ?>
                                <input type="radio" name="tamanho_<?php echo $key;?>" value="<?php echo $kt; ?>" <?php if($count == 0){ ?>checked="checked"<?php } ?>/><strong class='produto'><?php echo ucfirst($tamanho); ?></strong><br/>
                            <?php $count++; ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td style='text-align:center;' colspan="2"><?php echo CHtml::button("Contratar Plano", array('title' => "Contratar Plano", 'style' => 'margin:auto;', 'onclick' => 'js:confirmar(' . $key . ', "' . $empresa['nome'] . '", "' . $empresa['tamanho_valor'][$kt] . '");', 'class' => 'btn btn-success')); ?></td>
                    </tr>
                </tbody>
            </table>
            <div class='produto_hidden'>
                <?php foreach ($empresa['produtos'] as $key_produto => $produto) { ?>
                    <input type='hidden' value='<?php echo $key_produto; ?>' />
                <?php } ?>
            </div>
        </div>
        <?php if ($key % 2 != 0) { ?>
        </div>
    <?php } ?>
<?php } ?>
<?php if (count($empresas) % 2 != 0) { ?>
    </div>
<?php } ?>

<h3 class="header">Últimas opiniões
    <span class="header-line"></span>  
</h3>

<div class="row-fluid">
    <div class="span9 comentario_container">
        <?php foreach ($empresas as $key => $empresa) { ?>
            <?php foreach ($empresa['comentarios'] as $usuario => $comentario) { ?>
                <blockquote class='comentario' style='display:none;'>
                    <h2 ><?php echo $comentario; ?></h2>
                    <small><?php echo $usuario; ?> sobre <strong><?php echo $empresa['nome']; ?></strong></small>
                </blockquote>
            <?php } ?>
        <?php } ?>
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
    
    function confirmar(id, nome, valor){
        var plano = $('input[name="tamanho_'+id+'"]:checked').val();
        
        $.ajax({
            url: '<?php echo Yii::app()->homeUrl . '?r=site/session'; ?>',
            type: 'post',
            data: {
                nome: nome,
                valor: valor,
                plano: plano,
                tipo: 'Semanal'
            },
            success: function(data) {
                if(data)
                    window.location = '<?php echo Yii::app()->homeUrl . '?r=site/page&view=pagamento'; ?>';
                else
                    alert('Ocorreu algum erro na escolha do plano, por favor tente novamente.');
            }
	});
    }

</script>

<?php

function limpar_nome($realname, $strip_spaces = true, $tolower = true) {
    $bad_chars = array("'", "\\", ' ', '/', ':', '*', '?', '"', '<', '>', '|');
    $realname = preg_replace('/[àáâãåäæ]/iu', 'a', $realname);
    $realname = preg_replace('/[èéêë]/iu', 'e', $realname);
    $realname = preg_replace('/[ìíîï]/iu', 'i', $realname);
    $realname = preg_replace('/[òóôõöø]/iu', 'o', $realname);
    $realname = preg_replace('/[ùúûü]/iu', 'u', $realname);
    $realname = preg_replace('/[ç]/iu', 'c', $realname);
    $realname = rawurlencode(str_replace($bad_chars, '_', $realname));
    $realname = preg_replace("/%(\w{2})/", '_', $realname);
    while (strpos($realname, '__') !== false) {
        $realname = str_replace("__", "_", $realname);
    }
    if ($strip_spaces === false) {
        $realname = str_replace('_', ' ', $realname);
    }

    return ($tolower === true) ? strtolower($realname) : $realname;
}
?>