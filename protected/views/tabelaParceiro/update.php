<?php
/* @var $this TabelaParceiroController */
/* @var $model TabelaParceiro */

$this->breadcrumbs=array(
	'Tabela Parceiros'=>array('index'),
	$model->id_parceiro=>array('view','id'=>$model->id_parceiro),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabelaParceiro', 'url'=>array('index')),
	array('label'=>'Create TabelaParceiro', 'url'=>array('create')),
	array('label'=>'View TabelaParceiro', 'url'=>array('view', 'id'=>$model->id_parceiro)),
	array('label'=>'Manage TabelaParceiro', 'url'=>array('admin')),
);
?>

<h1>Update TabelaParceiro <?php echo $model->id_parceiro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>