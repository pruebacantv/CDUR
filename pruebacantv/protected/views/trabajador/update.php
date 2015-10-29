<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadores'=>array('index'),
	$model->cedula_trab=>array('view','id'=>$model->cedula_trab),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trabajador', 'url'=>array('index')),
	array('label'=>'Create Trabajador', 'url'=>array('create')),
	array('label'=>'View Trabajador', 'url'=>array('view', 'id'=>$model->cedula_trab)),
	array('label'=>'Manage Trabajador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Trabajador <?php echo $model->cedula_trab; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>