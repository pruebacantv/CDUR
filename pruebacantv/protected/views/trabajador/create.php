<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trabajador', 'url'=>array('index')),
	array('label'=>'Manage Trabajador', 'url'=>array('admin')),
);
?>

<h1>Crear Trabajador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>