<?php
/* @var $this TallerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tallers',
);

$this->menu=array(
	array('label'=>'Create Taller', 'url'=>array('create')),
	array('label'=>'Manage Taller', 'url'=>array('admin')),
);
?>

<h1>Tallers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
