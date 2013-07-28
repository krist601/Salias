<?php
/* @var $this ProfesorTallerController */
/* @var $data ProfesorTaller */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechainicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechainicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechafin')); ?>:</b>
	<?php echo CHtml::encode($data->fechafin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpersona')); ?>:</b>
	<?php echo CHtml::encode($data->idpersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtaller')); ?>:</b>
	<?php echo CHtml::encode($data->idtaller); ?>
	<br />


</div>