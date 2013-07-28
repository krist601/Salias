<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horainicio'); ?>
		<?php echo $form->textField($model,'horainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horafin'); ?>
		<?php echo $form->textField($model,'horafin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idsalon'); ?>
		<?php echo $form->textField($model,'idsalon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idtaller'); ?>
		<?php echo $form->textField($model,'idtaller'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->