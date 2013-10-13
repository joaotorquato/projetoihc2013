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
                            array('label' => 'Planos de delivery', 'url' => array('/site/page', 'view' => 'pricing-tables'), 'linkOptions' => array("data-description" => "Sua entrega marcada"),),
                            array('label' => 'Restaurantes <span class="caret"></span>', 'url' => array('/site/page', 'view' => 'columns'), 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown", "data-description" => "Organizados por categoria"),
                                'items' => array(
                                    array('label' => 'Columns', 'url' => array('/site/page', 'view' => 'columns')),
                                    array('label' => 'Pricing tables', 'url' => array('/site/page', 'view' => 'pricing-tables')),
                                    array('label' => 'UI Elements', 'url' => array('/site/page', 'view' => 'elements')),
                                )),
                            array('label' => 'Pratos <span class="caret"></span>', 'url' => array('/site/page', 'view' => 'columns'), 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown", "data-description" => "Organizados por categoria"),
                                'items' => array(
                                    array('label' => 'Marmita', 'url' => array('/site/page', 'view' => 'columns'),'id'=>'marmita'),
                                    array('label' => 'Lanches', 'url' => array('/site/page', 'view' => 'pricing-tables')),
                                    array('label' => 'Pizzas', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Massas', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Batata', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Doces', 'url' => array('/site/page', 'view' => 'elements')),
                                    array('label' => 'Churrasco', 'url' => array('/site/page', 'view' => 'elements')),
                                )),
                            array('label' => 'Sobre', 'url' => array('/site/page', 'view' => 'about'), 'linkOptions' => array("data-description" => "Quem nós somos"),),
                            array('label' => 'Seja nosso parceiro', 'url' => array('/site/page', 'view' => 'about'), 'linkOptions' => array("data-description" => "Cadastre sua empresa"),),
                            array('label' => 'Entrar', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest, 'linkOptions' => array("data-description" => "Entre na sua conta")),
                            array('label' => 'Sair', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest, 'linkOptions' => array("data-description" => "Bem vindo,  ". Yii::app()->user->name)),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- /#navigation-main -->