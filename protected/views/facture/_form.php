<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'facture-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
));
	echo $form->errorSummary($model); 	
	
?>


	
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Datos Generales
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        <?php echo $form->textFieldRow($model,'facture_num',array('class'=>'span3','maxlength'=>45)); ?>

		<?php echo $form->dropDownListRow($model, 'accounts_id', CHtml::listData(accounts::model()->findAll(),'id','label')); ?>
		<?php echo $form->textFieldRow($model,'consumo',array('class'=>'span3')); ?>
		<?php echo $form->dropDownListRow($model,'tipo_medida',
			array('m3'=>'m3', 'Litros'=>'Litros'),
			array('class'=>'span1')); 
		?>
				
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Datos Avanzados
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">


	

	<?php echo $form->textFieldRow($model,'total',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'tax',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'estate',
	array('Por Pagar', 'Pago'),
	array('class'=>'span5')); ?>

		<div class="control-group">
		        <?php echo $form->labelEx($model,'t_pay_date',array('class'=>'control-label required')); ?>
		        <div class="controls">
		                <?php
		                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		 					'model'=>$model,
							'attribute'=>'t_pay_date',
							'language'=>'es',
							'options'=>array(
								'dateFormat'=>'yy-mm-dd',
								'constrainInput'=>'false',
								'minDate'=> '0',
								'duration'=>'fast',
								'showAnim'=>'slide',
								),
		                ));
		                ?>
		                <span class="help-inline error" id="Facture_facture_num_em_" style="display: none"></span>
		        </div>
		</div>	


	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span5')); ?>


	<?php 
	if ($model->isNewRecord) {
		echo $form->hiddenField($model,'datecreate',array('class'=>'span5','value'=>date('Y-m-d H:m:s'))); 
	}
	?>

	<?php echo $form->hiddenField($model,'datemodify',array('class'=>'span5','value'=>date('Y-m-d H:m:s'))); ?>

	<?php echo $form->hiddenField($model,'users_id',array('class'=>'span5','value'=>Yii::app()->user->id)); ?>

	<?php echo $form->hiddenField($model,'entity_id',array('class'=>'span5','value'=>'1')); ?>
      </div>
    </div>
  </div>
</div>

	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
