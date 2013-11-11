<div class="container">
    <div class="row-fluid">

        <div class="span8">
            <a href="<?php echo Yii::app()->homeUrl ?>" class="logo"></a>
        </div><!--/.span6 -->
        <div class="span4">
            <div class="social-icons pull-right clearfix">
                <div class="" style="text-align:right;"> <?php
                    if (!Yii::app()->user->isGuest) {
                        echo 'Olá, ' . Yii::app()->user->name . '<a href="' . Yii::app()->homeUrl . '?r=site/logout"/>(sair)</a>';
                    } else {
                        echo 'Olá, Visitante. <a href="' . Yii::app()->homeUrl . '?r=site/login"/>(entrar)</a>';
                    }
                    ?>
                </div>
            </div>
        </div><!--/.span6 -->
    </div><!--/.row-fluid header -->
</div>