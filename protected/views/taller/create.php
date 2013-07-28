<?php
/* @var $this TallerController */
/* @var $model Taller */

$this->breadcrumbs=array(
	'Tallers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Taller', 'url'=>array('index')),
	array('label'=>'Manage Taller', 'url'=>array('admin')),
);
?>

<h1>Create Taller</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>