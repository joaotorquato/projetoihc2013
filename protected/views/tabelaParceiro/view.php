<?php
/* @var $this TabelaParceiroController */
/* @var $model TabelaParceiro */

$this->breadcrumbs=array(
	'Tabela Parceiros'=>array('index'),
	$model->id_parceiro,
);

$this->menu=array(
	array('label'=>'List TabelaParceiro', 'url'=>array('index')),
	array('label'=>'Create TabelaParceiro', 'url'=>array('create')),
	array('label'=>'Update TabelaParceiro', 'url'=>array('update', 'id'=>$model->id_parceiro)),
	array('label'=>'Delete TabelaParceiro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_parceiro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TabelaParceiro', 'url'=>array('admin')),
);
?>

<h1>View TabelaParceiro #<?php echo $model->id_parceiro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_parceiro',
		'nome',
		'cnpj',
		'cep',
		'endereco',
		'complemento',
		'bairro',
		'cidade',
		'uf',
		'telefone',
		'celular',
		'email',
	),
)); ?>
