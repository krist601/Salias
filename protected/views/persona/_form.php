<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<script type="text/javascript">
    var childCount =  0;
    function addChild() {
        var htmlId = "telefono" + childCount;  
        var deleteIcon = '<?php echo Yii::app()->baseUrl ?>/images/icon_delete.png';     
        var templateHtml = "<div id='" + htmlId + "' name='" + htmlId + "'>\n";
        templateHtml +="<label>Telefono " + (childCount+1) + ": </label>"
        templateHtml += "<input type='text' id='etiquetas[" + childCount + "]' name='etiquetas[" + childCount + "]' />\n";
        templateHtml += "<span onClick='$(\"#" + htmlId + "\").remove();descontar();'><img src='" + deleteIcon + "' /></span>\n";
        templateHtml += "</div>\n";
        $("#childList").append(templateHtml);
        childCount++;      
  }
  function descontar(){
      childCount=childCount-1;
  }
</script>
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
	'id'=>'persona-form',
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Los Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>
        
        <div class="row">
            <?php echo $form->labelEx($model, 'FechaNac'); ?>
            <?php
            if ($model->FechaNac != '') {
                $model->FechaNac = date('d-m-Y', strtotime($model->FechaNac));
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'FechaNac',
                'value' => $model->FechaNac,
                'language' => 'es',
                'htmlOptions' => array('readonly' => "readonly"),
                'options' => array(
                    'autoSize' => true,
                    'defaultDate' => $model->FechaNac,
                    'dateFormat' => 'dd-mm-yy',
                    'yearRange'=>'1900:',
                    'buttonImage' => Yii::app()->baseUrl . '/images/calendar.png',
                    'buttonImageOnly' => true,
                    'buttonText' => 'Fecha',
                    'selectOtherMonths' => true,
                    'showAnim' => 'slide',
                    'showButtonPanel' => true,
                    'showOn' => 'button',
                    'showOtherMonths' => true,
                    'changeMonth' => 'true',
                    'changeYear' => 'true',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'FechaNac'); ?>
        </div>
	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esEmpleado'); ?>
		<?php echo $form->checkBox($model,'esEmpleado',array('id' => 'emple')); ?>
		<?php echo $form->error($model,'esEmpleado'); ?>
	</div>

	<div class="row" id="empleIn">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password', array('value' => '')); ?>
                <?php echo $form->passwordField($model,'PasswordConfirm', array('value' => '')); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>
        
        <div id="childList">
        </div>
        
        <input type="button" class="button small blue" value="Añadir Telefono" onclick="addChild();" />
        
      <!--  <li>
            <?php //echo CHtml::Label('Nogmaals', 'User_PasswordConfirm'); ?>
            <?php //echo CHtml::activePasswordField($model, 'PasswordConfirm', array('value' => '')); ?>
        </li>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save',array('class' => 'submitClass', 'class' => 'button small blue')); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
	checkDisplay("emple", "empleIn");
</script>