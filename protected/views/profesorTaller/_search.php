<?php
/* @var $this ProfesorTallerController */
/* @var $model ProfesorTaller */
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
		<?php echo $form->label($model,'fechainicio'); ?>
		<?php echo $form->textField($model,'fechainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechafin'); ?>
		<?php echo $form->textField($model,'fechafin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpersona'); ?>
		<?php echo $form->textField($model,'idpersona'); ?>
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