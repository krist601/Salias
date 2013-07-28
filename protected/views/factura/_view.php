<?php
/* @var $this FacturaController */
/* @var $data Factura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancelado')); ?>:</b>
	<?php echo CHtml::encode($data->cancelado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpersona')); ?>:</b>
	<?php echo CHtml::encode($data->idpersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprecio')); ?>:</b>
	<?php echo CHtml::encode($data->idprecio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtaller')); ?>:</b>
	<?php echo CHtml::encode($data->idtaller); ?>
	<br />


</div>