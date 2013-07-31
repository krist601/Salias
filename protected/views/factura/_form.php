<?php
/* @var $this FacturaController */
/* @var $model Factura */
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
        <script type="text/javascript">
$(document).ready(function() {
    $('input[type=checkbox]').live('click', function(){
        var parent = $(this).parent().attr('id');
        $('#'+parent+' input[type=checkbox]').removeAttr('checked');
        $(this).attr('checked', 'checked');
    });
});
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factura-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Persona'); ?>
		<?php echo $form->dropDownList($model,'idpersona', CHtml::listData(Persona::model()->findAll(), 'id', 'correo')); ?>
		<?php echo $form->error($model,'idpersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio'); ?>
		<?php echo $form->dropDownList($model,'idprecio', CHtml::listData(Precio::model()->findAll(), 'id', 'Monto')); ?>
		<?php echo $form->error($model,'idprecio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Taller'); ?>
		<?php echo $form->dropDownList($model,'idtaller', CHtml::listData(Taller::model()->findAll(), 'id', 'Nombre')); ?>
		<?php echo $form->error($model,'idtaller'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Cancelado'); ?>
		<?php echo $form->checkBox($model,'cancelado',array('id' => 'cance')); ?>
		<?php echo $form->error($model,'cancelado'); ?>
	</div>
        
        <div id="Opciones">
            <p style="display: inline-block;">Efectivo</p>&nbsp;&nbsp;<input type="checkbox" value="1" id="efe" name="check"/>
            <p style="display: inline-block;">Deposito</p>&nbsp;&nbsp;<input type="checkbox" value="2" id="depo" name="check"/>
        </div>
        
        <div id="deposi">
            <div class="row">
                    <?php echo $form->labelEx($model,'Numero de Deposito'); ?>
                    <?php echo $form->textField($model,'numeroDeposito'); ?>
                    <?php echo $form->error($model,'numeroDeposito'); ?>
            </div>
            <div class="row">
            <?php echo $form->labelEx($model, 'fechaDeposito'); ?>
            <?php
            if ($model->fechaDeposito != '') {
                $model->fechaDeposito = date('d-m-Y', strtotime($model->fechaDeposito));
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'fechaDeposito',
                'value' => $model->fechaDeposito,
                'language' => 'es',
                'htmlOptions' => array('readonly' => "readonly"),
                'options' => array(
                    'autoSize' => true,
                    'defaultDate' => $model->fechaDeposito,
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
            <?php echo $form->error($model, 'fechaDeposito'); ?>
        </div>
            
            
        </div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'submitClass', 'class' => 'button small blue')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
	checkDisplay("cance", "Opciones");
</script>
<script type="text/javascript">
	checkDisplay("depo", "deposi");
</script>
