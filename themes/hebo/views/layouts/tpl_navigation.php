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
                            array('label' => 'Restaurantes', 'url' => array('/site/page', 'view' => 'ofertas'), 'linkOptions' => array("data-description" => "Melhores restaurantes para você"),),
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
                    <div id="SmartCart" class="scMain">
                        <input type="hidden" pimage="<?php echo Yii::app()->theme->baseUrl; ?>/img/marmita.jpg" pprice="11.99"
                               pdesc="" pcategory="Marmita"
                               pname="Marmita média" pid="100">

                        <input type="hidden" pimage="<?php echo Yii::app()->theme->baseUrl; ?>/img/marmita.jpg" pprice="9.50"
                               pdesc=""  pcategory="Marmita"
                               pname="Marmita pequena"
                               pid="101"> 
                    </div>
                    <div style="text-align: center;">
                        <a href="javascript:esconder_carrinho()">Esconder carrinho</a>
                    </div>
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
        $('#SmartCart').smartCart();
        $('#sproducts').hide();
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
