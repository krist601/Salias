<?php
/* @var $this PrecioController */
/* @var $model Precio */

$this->breadcrumbs=array(
	'Precios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Precio', 'url'=>array('index')),
	array('label'=>'Create Precio', 'url'=>array('create')),
	array('label'=>'Update Precio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Precio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Precio', 'url'=>array('admin')),
);
?>

<h1>View Precio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Monto',
	),
)); ?>
