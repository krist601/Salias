<?php
/* @var $this PrecioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Precios',
);

$this->menu=array(
	array('label'=>'Create Precio', 'url'=>array('create')),
	array('label'=>'Manage Precio', 'url'=>array('admin')),
);
?>

<h1>Precios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
