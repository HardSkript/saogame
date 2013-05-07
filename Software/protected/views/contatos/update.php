<?php
/* @var $this ContatosController */
/* @var $model Contatos */

$this->breadcrumbs=array(
	'Contatoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contatos', 'url'=>array('index')),
	array('label'=>'Create Contatos', 'url'=>array('create')),
	array('label'=>'View Contatos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Contatos', 'url'=>array('admin')),
);
?>

<h1>Update Contatos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>