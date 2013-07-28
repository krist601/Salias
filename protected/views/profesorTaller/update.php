<?php
/* @var $this ProfesorTallerController */
/* @var $model ProfesorTaller */

$this->breadcrumbs=array(
	'Profesor Tallers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfesorTaller', 'url'=>array('index')),
	array('label'=>'Create ProfesorTaller', 'url'=>array('create')),
	array('label'=>'View ProfesorTaller', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProfesorTaller', 'url'=>array('admin')),
);
?>

<h1>Update ProfesorTaller <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>