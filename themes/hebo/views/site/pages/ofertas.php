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
$label_cidade = $cidades[$_GET['cidade']];

$empresas['neri'] = array(
    'nome' => "Neri Lanches",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/9c9da3324/img/restaurante/104_mini.jpg",
    'horario_funcionamento' => "Dia 11:00 às 15:00 Noite 18:00 às 00:00",
    'feedback_nota' => 3,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/111_mini.jpg" title="AMEX Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/93_mini.jpg" title="Diners Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/108_mini.jpg" title="Elo Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/100_mini.jpg" title="GoodCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/90_mini.jpg" title="Sodexo Pass">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/109_mini.jpg" title="Ticket Restaurante">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">
                                            <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/94_mini.jpg" title="Visa Vale - Refeição">',
    'comentarios_total' => 72,
    'comentarios' => array('Oswaldo' => 'Achei muito bom o serviço, nota dez!', 'Jackeline' => 'Atendimento bom, pede o lanche e já chega, demais!'),
);

$empresas['nigth_dog'] = array(
    'nome' => "Nigth Dog",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/a49e97b8a/img/restaurante/244_mini.jpg",
    'horario_funcionamento' => "Das 18:30 as 23:30h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/79_mini.jpg" title="Vale Alimentação - Papel">
                                 <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/78_mini.jpg" title="Vale Refeição - Papel">',
    'comentarios_total' => 89,
    'comentarios' => array('Brina' => 'Como la direto, melhor que tem!', 'Vinícius' => 'Sempre como com meu brother lá, é top!'),
);

$empresas['vivitalia'] = array(
    'nome' => "Vivitália Pizza Delivery",
    'img' => "http://d12v6yim1t2ckp.cloudfront.net/arquivos/c53092137/img/restaurante/220_mini.jpg",
    'horario_funcionamento' => "Terça a Domingo das 18h30 às 23h",
    'feedback_nota' => 4,
    'forma_pagamento' => '<img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/83_mini.jpg" title="Dinheiro">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/85_mini.jpg" title="MasterCard Crédito ou Débito - Maquineta">
                         <img src="http://d12v6yim1t2ckp.cloudfront.net/img/fotosFormasPagamento/86_mini.jpg" title="Visa Crédito ou Débito - Maquineta">',
    'comentarios_total' => 100,
    'comentarios' => array('Arthur' => 'Melhor pizzaria de Sorocaba! Peço sempre lá', 'Creuza' => 'A pizza de gorgonzola é show! Recomendo!!!'),
);
?>

<div class="shout-box">
    <div class="shout-text">
        <h1>Veja nosso parceiros em <?php echo $label_cidade; ?>!</h1>
    </div>
</div>    

<div class="row-fluid">
    <?php foreach ($empresas as $key => $empresa) { ?>
        <div class="span6">
            <h2 class="header"> <?php echo $empresa['nome']; ?>
                <img src="<?php echo $empresa['img']; ?>" alt="<?php echo $empresa['nome']; ?>" style='float:right'/> 
                <span class="header-line"></span> 
            </h2>
            <table class="table table-striped table-bordered table-hover">
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
                        <td>
                            <?php foreach ($empresa['comentarios'] as $usuario => $comentario) { ?>
                                <div class='comentario' style="display:none"><i>"<?php echo $comentario; ?></i>"<br> - <?php echo $usuario; ?> </div>
                            <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>
</div>

<h3 class="header">Our customers
    <span class="header-line"></span>  
</h3>
<div class="row-fluid">
    <div class="span3 center">
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
<script type="text/javascript">
    $(document).ready(function() {
        $.each($('.comentario'), function(i, val) {
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
</script>