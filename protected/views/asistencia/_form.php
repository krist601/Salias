<?php
/* @var $this AsistenciaController */
/* @var $model Asistencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asistencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idpersona'); ?>
		<?php echo $form->textField($model,'idpersona'); ?>
		<?php echo $form->error($model,'idpersona'); ?>
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