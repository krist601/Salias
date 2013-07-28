<?php
/* @var $this ProfesorTallerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesor Tallers',
);

$this->menu=array(
	array('label'=>'Create ProfesorTaller', 'url'=>array('create')),
	array('label'=>'Manage ProfesorTaller', 'url'=>array('admin')),
);
?>

<h1>Profesor Tallers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
