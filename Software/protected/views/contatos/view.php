<?php
/* @var $this ContatosController */
/* @var $model Contatos */

$this->breadcrumbs=array(
	'Contatoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contatos', 'url'=>array('index')),
	array('label'=>'Create Contatos', 'url'=>array('create')),
	array('label'=>'Update Contatos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contatos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contatos', 'url'=>array('admin')),
);
?>

<h1>View Contatos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'email',
		'idade',
		'telefone',
	),
)); ?>
