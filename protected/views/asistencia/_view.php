<?php
/* @var $this AsistenciaController */
/* @var $data Asistencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpersona')); ?>:</b>
	<?php echo CHtml::encode($data->idpersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtaller')); ?>:</b>
	<?php echo CHtml::encode($data->idtaller); ?>
	<br />


</div>