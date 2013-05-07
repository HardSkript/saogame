<?php
/* @var $this ContatosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contatoses',
);

$this->menu=array(
	array('label'=>'Create Contatos', 'url'=>array('create')),
	array('label'=>'Manage Contatos', 'url'=>array('admin')),
);
?>

<h1>Contatoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
