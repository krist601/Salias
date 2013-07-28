<?php
/* @var $this ProfesorTallerController */
/* @var $model ProfesorTaller */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-taller-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechainicio'); ?>
		<?php echo $form->textField($model,'fechainicio'); ?>
		<?php echo $form->error($model,'fechainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechafin'); ?>
		<?php echo $form->textField($model,'fechafin'); ?>
		<?php echo $form->error($model,'fechafin'); ?>
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