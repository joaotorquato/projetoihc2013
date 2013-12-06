<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Identificação</h1>

<p>Por favor, entre abaixo com seus dados de cadastro ou caso não possua, se cadastre ao lado:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<div id="div_cadastro">
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

<?php $this->endWidget(); ?>
</div><!-- form -->

<script type="text/javascript">
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
                    window.location = '<?php echo Yii::app()->homeUrl . '?r=site/page&view=ofertas&cidade=' . Yii::app()->session['cidade_index'] ?>';
                    $('#result_cep').hide();
                }else{
                    $('#result_cep').show();
                }
            }
	});
    }
</script>