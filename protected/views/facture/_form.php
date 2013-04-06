<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'facture-form',
	'enableAjaxValidation'=>false,
)); ?>
	
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php 
	
	
	echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'facture_num',array('class'=>'span5','maxlength'=>45)); ?>


	<?php //echo $form->textFieldRow($model,'accounts_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'accounts_id', CHtml::listData(accounts::model()->findAll(),'id','label')); ?>

	<?php echo $form->textFieldRow($model,'total',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tax',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'estate',
	array('Por Pagar', 'Pago'),
	array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'t_pay_date',array('class'=>'span5')); 
 	echo $form->labelEx($model,'t_pay_date');
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'t_pay_date',
					'language'=>'es',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						'constrainInput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						),

					));
	echo $form->error($model,'t_pay_date');

	?>
	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'consumo',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'tipo_medida',
		array('m3'=>'m3', 'Litros'=>'Litros'),
		array('class'=>'span5')); 
	?>

	<?php 
	if ($model->isNewRecord) {
		echo $form->hiddenField($model,'datecreate',array('class'=>'span5','value'=>date('Y-m-d H:m:s'))); 
	}
	?>

	<?php echo $form->hiddenField($model,'datemodify',array('class'=>'span5','value'=>date('Y-m-d H:m:s'))); ?>

	<?php echo $form->hiddenField($model,'users_id',array('class'=>'span5','value'=>Yii::app()->user->id)); ?>

	<?php echo $form->hiddenField($model,'entity_id',array('class'=>'span5','value'=>Yii::app()->user->id)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
