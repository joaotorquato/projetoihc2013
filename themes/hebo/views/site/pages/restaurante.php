<?php
//
$empresa = Yii::app()->session['empresas'][$_GET['id']];

$menu = array(
    'Lanches' => array(
        '01 - X BURGUER' => array(
            'descricao' => 'Hamburguer, presunto, mussarela, tomate e maionese.',
            'preco' => 'R$ 7,50'
        ),
        '02 - X BURGUER C/ CATU' => array(
            'descricao' => 'Hamburguer, presunto, mussarela, catupiri, tomate e maionese.',
            'preco' => 'R$ 9,50'
        ),
        '03 - X SUGESTÃO' => array(
            'descricao' => 'Hamburguer, presunto, mussarela, catupiri, tomate e maionese.',
            'preco' => 'R$ 12,00'
        ),
        '04 - X BURGUER CATU E OVO' => array(
            'descricao' => 'Hambúrguer, presunto, mussarela, catupiri, ovo, tomate e maionese.',
            'preco' => 'R$ 10,50'
        ),
    ),
    'Marmitas' => array(
        'SEGUNDA FEIRA' => array(
            'descricao' => '1ª OPÇÃO: ARROZ, FEIJÃO, MACARRÃO A BOLONHESA, ALMONDEGAS<br> 2ª OPÇÃO: ARROZ, FEIJÃO, BATATAS CORADAS, BIFE ACEBOLADO<br> SALADA: ALFACE, TOMATE, PEPINO, LIMÃO',
            'preco' => array('pequena' => 'R$ 8,00', 'média' => 'R$ 9,00', 'grande' => 'R$ 10,00')
        ),
        'TERÇA FEIRA' => array(
            'descricao' => '1ª OPÇÃO: ARROZ, FEIJÃO, STROGONOFF DE FRANGO, BATATA PALHA<br> 2ª OPÇÃO: ARROZ, FEIJÃO, CARNE COZIDA, LEGUMES REFOGADOS<br> SALADA: ALFACE, TOMATE, CENOURA, AZEITONAS',
            'preco' => array('pequena' => 'R$ 8,00', 'média' => 'R$ 9,00', 'grande' => 'R$ 10,00')
        ),
        'QUARTA FEIRA' => array(
            'descricao' => '1ª OPÇÃO: ARROZ, FEIJÃO TROPEIRO, COUVE, LINGUIÇA<br> 2ª OPÇÃO: ARROZ, FEIJÃO, CHUCHU COM OVOS, BIFE ACEBOLADO<br> SALADA: ALFACE, TOMATE, BETERRABA, AZEITONAS',
            'preco' => array('pequena' => 'R$ 8,00', 'média' => 'R$ 9,00', 'grande' => 'R$ 10,00')
        ),
        'QUINTA FEIRA' => array(
            'descricao' => '1ª OPÇÃO: ARROZ, FEIJÃO, FRANGO, FAROFA<br> 2ª OPÇÃO: ARROZ, FEIJÃO, ABOBRINHA COM BACON, BIFE ACEBOLADO<br> SALADA: ALFACE, MAIONESE',
            'preco' => array('pequena' => 'R$ 8,00', 'média' => 'R$ 9,00', 'grande' => 'R$ 10,00')
        ),
        'SEXTA FEIRA' => array(
            'descricao' => '1ª OPÇÃO: ARROZ, FEIJOADA, COUVE, FAROFA<br> 2ª OPÇÃO: ARROZ, FEIJÃO, PURE DE BATATAS, BIFE ACEBOLADO<br> SALADA: ALFACE, TOMATE, CENOURA, LARANJA',
            'preco' => array('pequena' => 'R$ 8,00', 'média' => 'R$ 9,00', 'grande' => 'R$ 10,00')
        ),
    ),
    'Bebidas' => array(
        'Coca-cola' => array(
            'descricao' => 'Refrigerante cola.',
            'preco' => array('lata' => 'R$ 3,00', '600 ml' => 'R$ 4.00', '1,5l' => 'R$ 5,00')
        ),
        'Coca-zero' => array(
            'descricao' => 'Refrigerante cola.',
            'preco' => array('lata' => 'R$ 3,00', '600 ml' => 'R$ 4.00', '1,5l' => 'R$ 5,00')
        ),
        'Fanta' => array(
            'descricao' => 'Refrigerante de laranja.',
            'preco' => array('lata' => 'R$ 3,00', '600 ml' => 'R$ 4.00', '1,5l' => 'R$ 5,00')
        ),
        'Kuat' => array(
            'descricao' => 'Refrigerante de guaraná.',
            'preco' => array('lata' => 'R$ 3,00', '600 ml' => 'R$ 4.00', '1,5l' => 'R$ 5,00')
        ),
        'Sprite' => array(
            'descricao' => 'Refrigerante de limão.',
            'preco' => array('lata' => 'R$ 3,00', '600 ml' => 'R$ 4.00', '1,5l' => 'R$ 5,00')
        ),
    ),
);

$concorrente = array(
    
);
?>
<div class="shout-box">
    <div class="shout-text">
        <h1>Você está vendo as promoções de <?php echo $empresa['nome']; ?></h1>
    </div>
</div> 

<div class="row-fluid">
    <div class="span12">
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
                    <td>Produtos</td>
                    <td>
                        <?php foreach ($empresa['produtos'] as $produto) { ?>
                            <strong class='produto'><?php echo ucfirst(strtolower($produto)); ?></strong>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Possui plano de entrega?</td>
                    <td>
                        <?php
                        if ($empresa['plano']) {
                            echo 'Sim <a href="">clique aqui para visualizar</a>';
                        } else {
                            echo 'Não';
                        }
                        ?>
                    </td>
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
            </tbody>
        </table>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <h2 class="header"> Promoções
            <span class="header-line"></span> 
        </h2>
        <!--<div id="accordion2" class="accordion">-->
        <?php $count = 0; ?>
        <?php foreach ($menu as $tipo => $item) { ?>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th><?php echo $tipo; ?></th>
                        <th>descrição</th>
                        <th>preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($item as $nome => $it) { ?>
                        <tr>
                            <td>
                                <strong class='produto' onclick="exibir_concorrente('<?php echo $tipo; ?>',<?php echo $count; ?>);" title='Clique para comparar com a concorrência' style='cursor: pointer'><?php echo $nome; ?></strong>
                            </td>
                            <td><?php echo $it['descricao']; ?></td>
                            <td>
                                <?php if (!is_array($it['preco'])) { ?>
                                    <?php echo $it['preco']; ?>
                                <?php } else { ?>
                                    <?php foreach ($it['preco'] as $variacao => $var) { ?>
                                        <?php echo $variacao . " - " . $var . "<br>"; ?>
                                    <?php } ?>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr class="concorrencia_tr<?php echo $count; ?>" style='display:none;'>
                            <td colspan="3" style='width:100%;'>
                                <label style='float:left;' id='produto_title<?php echo $count; ?>'></label>
                                <div style='float: right'><a href="javascript:fechar_concorrencia(<?php echo $count; ?>)">fechar</a></div>
                                <div style='clear:both'></div>
                                <?php if (isset($empresa['comparacao'])) { ?>
                                    <div>
                                        <h5 class="header"><?php echo Yii::app()->session['empresas'][$empresa['concorrentes'][0]]['nome']; ?>
                                            <img height="30" src="<?php echo Yii::app()->session['empresas'][$empresa['concorrentes'][0]]['img']; ?>" alt="<?php echo Yii::app()->session['empresas'][$empresa['concorrentes'][0]]['nome']; ?>" style='float:right' width="100" height="67"/> 
                                            <span class="header-line"></span> 
                                        </h5>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                            <tr>
                                                <th style='background-color: #0088CC'>Concorrente</th>
                                                <th style='background-color: #0088CC'>Produto</th>
                                                <th style='background-color: #0088CC'>Preço</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($empresa['comparacao'] as $key_p => $produto) { ?>
                                                <tr class='<?php echo $key_p; ?> lista' style='display:none;'>
                                                    <td><?php echo $produto['produto']; ?></td>
                                                    <td><?php echo $produto['casa_preco']; ?></td>
                                                    <td><?php echo $produto['concorrente']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                <?php } else { ?>
                                    <div>
                                        <h5 class="header">Este restaurante não possui concorrente neste produto.
                                            <span class="header-line"></span> 
                                        </h5>
                                    </div>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php $count++; ?>
        <?php } ?>
        <!--</div>-->
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
        $('.produto').tooltip();
    });

    function exibir_concorrente(produto, id) {
        $(".concorrencia_tr" + id).show();
        $(".lista").hide();
        $("[class*=" + produto + ']').show();
        console.log(produto);
        $("#produto_title" + id).html("Principal concorrente deste produto:");
    }

    function fechar_concorrencia(id) {
        $(".concorrencia_tr" + id).hide();
    }


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