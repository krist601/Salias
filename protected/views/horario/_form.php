<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'horainicio'); ?>
		<?php echo $form->textField($model,'horainicio'); ?>
		<?php echo $form->error($model,'horainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horafin'); ?>
		<?php echo $form->textField($model,'horafin'); ?>
		<?php echo $form->error($model,'horafin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idsalon'); ?>
		<?php echo $form->textField($model,'idsalon'); ?>
		<?php echo $form->error($model,'idsalon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idtaller'); ?>
		<?php echo $form->textField($model,'idtaller'); ?>
		<?php echo $form->error($model,'idtaller'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->