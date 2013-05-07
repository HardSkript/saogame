<?php
/* @var $this ContatosController */
/* @var $model Contatos */

$this->breadcrumbs=array(
	'Contatoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contatos', 'url'=>array('index')),
	array('label'=>'Manage Contatos', 'url'=>array('admin')),
);
?>

<h1>Create Contatos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>