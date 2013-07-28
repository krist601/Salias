<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horainicio')); ?>:</b>
	<?php echo CHtml::encode($data->horainicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horafin')); ?>:</b>
	<?php echo CHtml::encode($data->horafin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idsalon')); ?>:</b>
	<?php echo CHtml::encode($data->idsalon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtaller')); ?>:</b>
	<?php echo CHtml::encode($data->idtaller); ?>
	<br />


</div>