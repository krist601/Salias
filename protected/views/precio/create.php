<?php
/* @var $this PrecioController */
/* @var $model Precio */

$this->breadcrumbs=array(
	'Precios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Precio', 'url'=>array('index')),
	array('label'=>'Manage Precio', 'url'=>array('admin')),
);
?>

<h1>Create Precio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>