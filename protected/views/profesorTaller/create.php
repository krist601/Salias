<?php
/* @var $this ProfesorTallerController */
/* @var $model ProfesorTaller */

$this->breadcrumbs=array(
	'Profesor Tallers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfesorTaller', 'url'=>array('index')),
	array('label'=>'Manage ProfesorTaller', 'url'=>array('admin')),
);
?>

<h1>Create ProfesorTaller</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>