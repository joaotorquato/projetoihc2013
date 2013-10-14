<?php
/* @var $this TabelaParceiroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tabela Parceiros',
);

$this->menu=array(
	array('label'=>'Create TabelaParceiro', 'url'=>array('create')),
	array('label'=>'Manage TabelaParceiro', 'url'=>array('admin')),
);
?>

<h1>Tabela Parceiros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
