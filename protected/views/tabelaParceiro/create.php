<?php
/* @var $this TabelaParceiroController */
/* @var $model TabelaParceiro */

$this->breadcrumbs=array(
	'Tabela Parceiros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabelaParceiro', 'url'=>array('index')),
	array('label'=>'Manage TabelaParceiro', 'url'=>array('admin')),
);
?>

<h1>Cadastro de Parceiro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>