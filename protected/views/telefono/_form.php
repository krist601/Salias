<?php
/* @var $this TelefonoController */
/* @var $model Telefono */
/* @var $form CActiveForm */
?>
 <script type="text/javascript">
		var checkDisplay = function(check, form) { //check ID, form ID
			form = document.getElementById(form), check = document.getElementById(check);
			check.onclick = function(){
				form.style.display = (this.checked) ? "block" : "none";
				form.reset();
			};
			check.onclick();
		};
	</script>     
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'telefono-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are requiredos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>
        <input type="checkbox" id="emple" />
	<div id="empleIn">
		<input type="text" />
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'idpersona'); ?>
		<?php echo $form->dropDownList($model,'idpersona', CHtml::listData(Persona::model()->findAll(), 'id', 'Nombre')); ?>
		<?php echo $form->error($model,'idpersona'); ?>
	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->

	<script type="text/javascript">
	checkDisplay("emple", "empleIn");
	</script>