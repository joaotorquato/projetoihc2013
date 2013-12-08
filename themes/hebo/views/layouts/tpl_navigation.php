<section id="navigation-main">  
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="nav-collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'htmlOptions' => array('class' => 'nav'),
                        'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                        'itemCssClass' => 'item-test',
                        'encodeLabel' => false,
                        'items' => array(
                            array('label' => 'Início', 'url' => array('/site/index'), 'linkOptions' => array("data-description" => "Página inicial"),),
//                            array('label' => 'Planos de delivery', 'url' => array('/site/page', 'view' => 'pricing-tables'), 'linkOptions' => array("data-description" => "Sua entrega marcada"),),
//                            array('label' => 'Restaurantes <span class="caret"></span>', 'url' => array('/site/page', 'view' => 'columns'), 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown", "data-description" => "Organizados por categoria"),
//                                'items' => array(
//                                    array('label' => 'Columns', 'url' => array('/site/page', 'view' => 'columns')),
//                                    array('label' => 'Pricing tables', 'url' => array('/site/page', 'view' => 'pricing-tables')),
//                                    array('label' => 'UI Elements', 'url' => array('/site/page', 'view' => 'elements')),
//                                )),
                            array('label' => 'Pratos <span class="caret"></span>', 'url' => array('/site/page', 'view' => 'columns'), 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown", "data-description" => "Organizados por categoria"),
                                'items' => array(
                                    array('label' => 'Marmitex', 'url' => array('/site/page', 'view' => 'columns'), 'id' => 'marmita'),
                                    array('label' => 'Lanches', 'url' => array('/site/page', 'view' => 'pricing-tables')),
                                    array('label' => 'Pizzas', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Massas', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Batata', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Doces', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Churrasco', 'url' => array('/site/page', 'view' => 'elements')),
                                )),
                            array('label' => 'Restaurantes <span class="caret"></span>', 'url' => array('/site/page', 'view' => 'columns'), 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown", "data-description" => "Organizados por categoria"),
                                'items' => array(
                                    array('label' => 'Ver Restaurantes', 'url' => array('/site/page', 'view' => 'columns')),
                                )),
                            array('label' => 'Plano Mensal Marmitex', 'url' => array('/site/page', 'view' => 'pricing-tables'), 'linkOptions' => array("data-description" => "Sua entrega marcada"),
                                'items' => array(
                                    array('label' => 'Assinar Plano', 'url' => array('/site/page', 'view' => 'columns')),
                                    array('label' => 'Meu Plano', 'url' => array('/site/page', 'view' => 'columns')),
                                )),
                            array('label' => 'Sobre', 'url' => array('/site/page', 'view' => 'about'), 'linkOptions' => array("data-description" => "Quem nós somos"),),
                            array('label' => 'Seja nosso parceiro', 'url' => array('/tabelaParceiro/create', 'view' => 'create'), 'linkOptions' => array("data-description" => "Cadastre sua empresa"),),
//                            array('label' => 'Entrar', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest, 'linkOptions' => array("data-description" => "Entre na sua conta")),
//                            array('label' => 'Sair', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest, 'linkOptions' => array("data-description" => "Bem vindo,  ". Yii::app()->user->name)),
                        ),
                    ));

                    $carrinho[] = array(
                        'nome' => '04 - X BURGUER CATU E OVO',
                        'total' => 10.90,
                        'empresa' => 'Neri Lanches',
                    );
                    Yii::app()->session['carrinho'] = $carrinho;
                    ?>
                </div>
            </div>
            <div class="row-fluid">
                <?php if (isset(Yii::app()->session['carrinho']) && count(Yii::app()->session['carrinho']) > 0) { ?>
                    <div class="info_carrinho container" style="text-align: center;">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/cart.png">Você possui <?php echo count(Yii::app()->session['carrinho']); ?> item(s) no seu carrinho. <a href="javascript:visualizar_carrinho()">Clique aqui</a> para visualizar.
                    </div>
                <?php } ?>
                <div class="carrinho_container" style="margin:auto;width: 50%;display:none;">
                    <?php
                    $total_carrinho = 0;
                    foreach (Yii::app()->session['carrinho'] as $item) {
                        $total_carrinho += $item['total'];
                    }
                    ?>
                    <a href="javascript:esconder_carrinho()" class="esconder" >esconder carrinho</a>
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th style='background-color: #0088CC'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/cart32.png" />Itens do carrinho</th>
                                <th style='background-color: #0088CC;width:30%;'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/money.png" />Total R$ <strong><?php echo number_format($total_carrinho, 2, ',', "."); ?></strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach (Yii::app()->session['carrinho'] as $item) { ?>
                                    <td colspan="2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/delete.png" /> 1 unidade de <?php echo $item['nome']; ?><strong style="float:right;">total deste item: R$ <?php echo number_format($item['total'], 2, ",", "."); ?></strong></td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td style='text-align:center;' colspan="2" class="finalizar_carrinho"><?php echo CHtml::button("Finalizar compra", array('title' => "Finalizar compra", 'style' => 'margin:auto', 'onclick' => 'js:finalizar_compra();', 'class' => 'btn')); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section><!-- /#navigation-main -->

<script type="text/javascript">
    $(document).ready(function() {
        $('.produto').tooltip();
<?php if (isset($_GET['view'])) { ?>
            if ('<?php echo $_GET['view']; ?>' == 'restaurante') {
                $(".info_carrinho").hide();
    //            $(".esconder").hide();
                $(".carrinho_container").show();
            } else if ('<?php echo $_GET['view']; ?>' == 'pagamento') {
                $(".info_carrinho").hide();
    //            $(".esconder").hide();
                $(".finalizar_carrinho").hide();
                $(".carrinho_container").show();
            }
<?php } ?>
    });

    function visualizar_carrinho() {
        $(".info_carrinho").hide();
        $(".carrinho_container").show();
    }

    function esconder_carrinho() {
        $(".info_carrinho").show();
        $(".carrinho_container").hide();
    }

    function finalizar_compra() {
        $.ajax({
            url: '<?php echo Yii::app()->homeUrl . '?r=site/session'; ?>',
            type: 'post',
            data: {
                nome: '01 unidade de 04 - X BURGUER CATU E OVO',
                valor: '10,90',
                plano: '',
                tipo: ''
            },
            success: function(data) {
                if (data)
                    window.location = '<?php echo Yii::app()->homeUrl . '?r=site/page&view=pagamento'; ?>';
                else
                    alert('Ocorreu algum erro na escolha do plano, por favor tente novamente.');
            }
        });
    }

</script>
