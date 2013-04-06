<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'accounts-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'account_num',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'label',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'estrato',array('class'=>'span5','maxlength'=>45)); ?>

	<?php //echo $form->textFieldRow($model,'utilities_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'utilities_id', CHtml::listData(utilities::model()->findAll(),'id','label')); ?>

	<?php //echo $form->textFieldRow($model,'public_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'public_id', CHtml::listData(publico::model()->findAll(),'id','label')); ?>

	<?php 
	if ($model->isNewRecord) {
		echo $form->hiddenField($model,'datecreate',array('class'=>'span5','value'=>date('Y-m-d H:m:s'))); 
	}
	?>

	<?php echo $form->hiddenField($model,'datemodify',array('class'=>'span5','value'=>date('Y-m-d H:m:s'))); ?>
	<?php echo $form->textFieldRow($model,'medidor_num',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->hiddenField($model,'users_id',array('class'=>'span5','value'=>'1')); ?>

	<?php echo $form->hiddenField($model,'entity_id',array('class'=>'span5','value'=>'1')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
