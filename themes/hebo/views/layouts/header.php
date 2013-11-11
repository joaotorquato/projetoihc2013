<div class="container">
    <div class="row-fluid">

        <div class="span8">
            <a href="<?php echo Yii::app()->homeUrl ?>" class="logo"></a>
        </div><!--/.span6 -->
        <div class="span4">
            <div class="social-icons pull-right clearfix">
                <div class="" style="text-align:right;"> <?php
                    if (!Yii::app()->user->isGuest) {
                        echo 'Olá, ' . Yii::app()->user->name. '<a href="'.Yii::app()->homeUrl.'?r=site/logout"/>(sair)</a>';
                    } else {
                        echo 'Olá, Visitante. <a href="'.Yii::app()->homeUrl.'?r=site/login"/>(entrar)</a>';
                    }
                    ?></div>
<!--                <div class="" style="text-align:right;"><img src="<?php echo $baseUrl; ?>/img/icons/social/facebook.png"  alt="Facebook" /> <img src="<?php echo $baseUrl; ?>/img/icons/social/twitter.png"  alt="Twitter" /> <img src="<?php echo $baseUrl; ?>/img/icons/social/linkedin.png"  alt="LinkedIn" /> <img src="<?php echo $baseUrl; ?>/img/icons/social/google.png"  alt="Google+" /> <img src="<?php echo $baseUrl; ?>/img/icons/social/rss.png"  alt="RSS" /></div>
                <div class="header-text" style="">Contate-nos: (11) 99633-0740</div>-->
            </div>
            <!--array('label' => 'Entrar', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest, 'linkOptions' => array("data-description" => "Entre na sua conta")),-->
            <!--array('label' => 'Sair', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest, 'linkOptions' => array("data-description" => "Bem vindo,  ". Yii::app()->user->name))-->
        </div><!--/.span6 -->
    </div><!--/.row-fluid header -->
</div>